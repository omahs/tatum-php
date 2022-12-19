<?php

/**
 * AdaTransactionFromAddress_fromAddress_inner Model
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
 * AdaTransactionFromAddress_fromAddress_inner Model
 */
class AdaTransactionFromAddressFromAddressInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "AdaTransactionFromAddress_fromAddress_inner";
    protected static $_definition = [
        "address" => ["address", "string", null, "getAddress", "setAddress"], 
        "private_key" => ["privateKey", "string", null, "getPrivateKey", "setPrivateKey"]
    ];

    /**
     * AdaTransactionFromAddressFromAddressInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["address"=>null, "private_key"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['address'])) {
            $ip[] = "'address' can't be null";
        }
        if (is_null($this->_data['private_key'])) {
            $ip[] = "'private_key' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress(): string {
        return $this->_data["address"];
    }

    /**
     * Set address
     * 
     * @param string $address The blockchain address to send the assets from
     * @return $this
     */
    public function setAddress(string $address) {
        $this->_data['address'] = $address;

        return $this;
    }

    /**
     * Get private_key
     *
     * @return string
     */
    public function getPrivateKey(): string {
        return $this->_data["private_key"];
    }

    /**
     * Set private_key
     * 
     * @param string $private_key The private key of the address to send the assets from
     * @return $this
     */
    public function setPrivateKey(string $private_key) {
        $this->_data['private_key'] = $private_key;

        return $this;
    }
}