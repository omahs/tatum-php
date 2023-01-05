<?php

/**
 * BscBalance Model
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
 * BscBalance Model
 */
class BscBalance extends AbstractModel {

    public const _D = null;
    protected static $_name = "BscBalance";
    protected static $_definition = [
        "balance" => ["balance", "string", null, "getBalance", "setBalance", null, ["r" => 0]]
    ];

    /**
     * BscBalance
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get balance
     *
     * @return string|null
     */
    public function getBalance(): ?string {
        return $this->_data["balance"];
    }

    /**
     * Set balance
     * 
     * @param string|null $balance Balance in BNB
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBalance(?string $balance) {
        return $this->_set("balance", $balance);
    }
}
