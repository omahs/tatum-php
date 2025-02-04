<?php

/**
 * FlowTx_args_inner Model
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
 * FlowTx_args_inner Model
 */
class FlowTxArgsInner extends AbstractModel {

    public const _D = null;
    protected static $_name = "FlowTx_args_inner";
    protected static $_definition = [
        "type" => ["type", "string", null, "getType", "setType", null, ["r" => 0]], 
        "value" => ["value", "string", null, "getValue", "setValue", null, ["r" => 0]]
    ];

    /**
     * FlowTxArgsInner
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
     * @return string|null
     */
    public function getValue(): ?string {
        return $this->_data["value"];
    }

    /**
     * Set value
     * 
     * @param string|null $value value
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setValue(?string $value) {
        return $this->_set("value", $value);
    }
}
