<?php

/**
 * PrivKeyRequest Model
 *
 * @version   3.17.0
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Model;

use InvalidArgumentException as IAE;

/**
 * PrivKeyRequest Model
 */
class PrivKeyRequest extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "PrivKeyRequest";
    protected static $_definition = [
        "index" => ["index", "int", null, "getIndex", "setIndex"], 
        "mnemonic" => ["mnemonic", "string", null, "getMnemonic", "setMnemonic"]
    ];

    /**
     * PrivKeyRequest
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["index"=>null, "mnemonic"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['index'])) {
            $ip[] = "'index' can't be null";
        }
        if (($this->_data['index'] > 2147483647)) {
            $ip[] = "'index' must be <= 2147483647";
        }
        if (is_null($this->_data['mnemonic'])) {
            $ip[] = "'mnemonic' can't be null";
        }
        if ((mb_strlen($this->_data['mnemonic']) > 500)) {
            $ip[] = "'mnemonic' length must be <= 500";
        }
        if ((mb_strlen($this->_data['mnemonic']) < 1)) {
            $ip[] = "'mnemonic' length must be >= 1";
        }
        
        return $ip;
    }

    /**
     * Get index
     *
     * @return int
     */
    public function getIndex(): int {
        return $this->_data["index"];
    }

    /**
     * Set index
     * 
     * @param int $index Derivation index of private key to generate.
     * @return $this
     */
    public function setIndex(int $index) {
        if (($index > 2147483647)) {
            throw new IAE('PrivKeyRequest.setIndex: $index must be <=2147483647');
        }
        $this->_data['index'] = $index;

        return $this;
    }

    /**
     * Get mnemonic
     *
     * @return string
     */
    public function getMnemonic(): string {
        return $this->_data["mnemonic"];
    }

    /**
     * Set mnemonic
     * 
     * @param string $mnemonic Mnemonic to generate private key from.
     * @return $this
     */
    public function setMnemonic(string $mnemonic) {
        if ((mb_strlen($mnemonic) > 500)) {
            throw new IAE('PrivKeyRequest.setMnemonic: $mnemonic length must be <= 500');
        }
        if ((mb_strlen($mnemonic) < 1)) {
            throw new IAE('PrivKeyRequest.setMnemonic: $mnemonic length must be >= 1');
        }
        $this->_data['mnemonic'] = $mnemonic;

        return $this;
    }
}