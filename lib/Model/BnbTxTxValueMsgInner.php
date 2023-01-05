<?php

/**
 * BnbTx_tx_value_msg_inner Model
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
 * BnbTx_tx_value_msg_inner Model
 */
class BnbTxTxValueMsgInner extends AbstractModel {

    public const _D = null;
    protected static $_name = "BnbTx_tx_value_msg_inner";
    protected static $_definition = [
        "type" => ["type", "string", null, "getType", "setType", null, ["r" => 0]], 
        "value" => ["value", "\Tatum\Model\BnbTxTxValueMsgInnerValue", null, "getValue", "setValue", null, ["r" => 0]]
    ];

    /**
     * BnbTxTxValueMsgInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get type
     *
     * @return string|null
     */
    public function getType(): ?string {
        return $this->_data["type"];
    }

    /**
     * Set type
     * 
     * @param string|null $type type
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setType(?string $type) {
        return $this->_set("type", $type);
    }

    /**
     * Get value
     *
     * @return \Tatum\Model\BnbTxTxValueMsgInnerValue|null
     */
    public function getValue(): ?\Tatum\Model\BnbTxTxValueMsgInnerValue {
        return $this->_data["value"];
    }

    /**
     * Set value
     * 
     * @param \Tatum\Model\BnbTxTxValueMsgInnerValue|null $value value
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setValue(?\Tatum\Model\BnbTxTxValueMsgInnerValue $value) {
        return $this->_set("value", $value);
    }
}
