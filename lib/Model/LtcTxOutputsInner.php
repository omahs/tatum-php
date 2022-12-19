<?php

/**
 * LtcTx_outputs_inner Model
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
 * LtcTx_outputs_inner Model
 */
class LtcTxOutputsInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "LtcTx_outputs_inner";
    protected static $_definition = [
        "value" => ["value", "string", null, "getValue", "setValue"], 
        "script" => ["script", "string", null, "getScript", "setScript"], 
        "address" => ["address", "string", null, "getAddress", "setAddress"]
    ];

    /**
     * LtcTxOutputsInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["value"=>null, "script"=>null, "address"=>null] as $k => $v) {
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
     * Get value
     *
     * @return string|null
     */
    public function getValue(): ?string {
        return $this->_data["value"];
    }

    /**
     * Set value
     * 
     * @param string|null $value Sent amount in LTC.
     * @return $this
     */
    public function setValue(?string $value) {
        $this->_data['value'] = $value;

        return $this;
    }

    /**
     * Get script
     *
     * @return string|null
     */
    public function getScript(): ?string {
        return $this->_data["script"];
    }

    /**
     * Set script
     * 
     * @param string|null $script Transaction script.
     * @return $this
     */
    public function setScript(?string $script) {
        $this->_data['script'] = $script;

        return $this;
    }

    /**
     * Get address
     *
     * @return string|null
     */
    public function getAddress(): ?string {
        return $this->_data["address"];
    }

    /**
     * Set address
     * 
     * @param string|null $address Recipient address.
     * @return $this
     */
    public function setAddress(?string $address) {
        $this->_data['address'] = $address;

        return $this;
    }
}