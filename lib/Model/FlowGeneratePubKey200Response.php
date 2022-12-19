<?php

/**
 * FlowGeneratePubKey_200_response Model
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
 * FlowGeneratePubKey_200_response Model
 */
class FlowGeneratePubKey200Response extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "FlowGeneratePubKey_200_response";
    protected static $_definition = [
        "pub_key" => ["pubKey", "string", null, "getPubKey", "setPubKey"]
    ];

    /**
     * FlowGeneratePubKey200Response
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["pub_key"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        
        return $ip;
    }

    /**
     * Get pub_key
     *
     * @return string|null
     */
    public function getPubKey(): ?string {
        return $this->_data["pub_key"];
    }

    /**
     * Set pub_key
     * 
     * @param string|null $pub_key Flow public key
     * @return $this
     */
    public function setPubKey(?string $pub_key) {
        $this->_data['pub_key'] = $pub_key;

        return $this;
    }
}