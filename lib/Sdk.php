<?php

/**
 * Tatum SDK
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */

namespace Tatum;

use Tatum\Sdk\Caller;
use RuntimeException;

class Sdk {
    /**
     * MainNet API Key
     *
     * @var string
     */
    protected $_apiKeyMainnet;

    /**
     * TestNet API Key
     *
     * @var string
     */
    protected $_apiKeyTestnet;

    /**
     * Mainnet API key
     *
     * @var \Tatum\Sdk\Caller
     */
    protected $_callerMainnet = null;

    /**
     * Testnet API key
     *
     * @var \Tatum\Sdk\Caller
     */
    protected $_callerTestnet = null;

    /**
     * Tatum SDK
     *
     * @see https://apidoc.tatum.io/#section/Authentication
     * @var string $apiKeyMainnet (optional) MainNet Tatum API Key; default <b>null</b>
     * @var string $apiKeyTestnet (optional) TestNet Tatum API Key; default <b>null</b>
     * @throws \RuntimeException
     */
    public function __construct(?string $apiKeyMainnet = null, ?string $apiKeyTestnet = null) {
        $this->_apiKeyMainnet = "$apiKeyMainnet";
        $this->_apiKeyTestnet = "$apiKeyTestnet";

        // System check
        if (PHP_INT_SIZE < 8) {
            throw new RuntimeException("Tatum SDK: 64-bit PHP is required");
        }

        // PHP check
        if (version_compare(PHP_VERSION, "7.3.0") <= 0) {
            throw new RuntimeException("Tatum SDK: PHP v7.3+ is required");
        }

        // Extensions check
        $extensions = [
            "curl" => "curl_init",
            "json" => "json_encode",
            "gmp" => "gmp_init",
            "bcmath" => "bcadd",
            "mbstring" => "mb_strlen"
        ];
        foreach ($extensions as $extName => $extFunction) {
            if (!function_exists($extFunction)) {
                throw new RuntimeException("Tatum SDK: PHP extension '$extName' is required");
            }
        }
    }

    /**
     * MainNet operations
     *
     * @return \Tatum\Sdk\Caller
     */
    public function mainnet(): Caller {
        if (null === $this->_callerMainnet) {
            $this->_callerMainnet = new Caller($this->_apiKeyMainnet, true);
        }

        return $this->_callerMainnet;
    }

    /**
     * TestNet operations
     *
     * @return \Tatum\Sdk\Caller
     */
    public function testnet(): Caller {
        if (null === $this->_callerTestnet) {
            $this->_callerTestnet = new Caller($this->_apiKeyTestnet, false);
        }

        return $this->_callerTestnet;
    }
}
