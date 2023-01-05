<?php

/**
 * BnbTx_tx_value_msg_inner_value_outputs_inner Model
 *
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

/**
 * BnbTx_tx_value_msg_inner_value_outputs_inner Model
 */
class BnbTxTxValueMsgInnerValueOutputsInner extends AbstractModel {

    public const _D = null;
    protected static $_name = "BnbTx_tx_value_msg_inner_value_outputs_inner";
    protected static $_definition = [
        "address" => ["address", "string", null, "getAddress", "setAddress", null, ["r" => 0]], 
        "coins" => ["coins", "\Tatum\Model\BnbTxTxValueMsgInnerValueInputsInnerCoinsInner[]", null, "getCoins", "setCoins", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * BnbTxTxValueMsgInnerValueOutputsInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
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
     * @param string|null $address address
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAddress(?string $address) {
        return $this->_set("address", $address);
    }

    /**
     * Get coins
     *
     * @return \Tatum\Model\BnbTxTxValueMsgInnerValueInputsInnerCoinsInner[]|null
     */
    public function getCoins(): ?array {
        return $this->_data["coins"];
    }

    /**
     * Set coins
     * 
     * @param \Tatum\Model\BnbTxTxValueMsgInnerValueInputsInnerCoinsInner[]|null $coins coins
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCoins(?array $coins) {
        return $this->_set("coins", $coins);
    }
}
