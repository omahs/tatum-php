<?php

/**
 * Data Model
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
 * Data Model
 */
class Data extends AbstractModel {

    public const _D = null;
    protected static $_name = "Data";
    protected static $_definition = [
        "data" => ["data", "\Tatum\Model\DataData", null, "getData", "setData", null, ["r" => 1]]
    ];

    /**
     * Data
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get data
     *
     * @return \Tatum\Model\DataData
     */
    public function getData(): \Tatum\Model\DataData {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param \Tatum\Model\DataData $data data
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setData(\Tatum\Model\DataData $data) {
        return $this->_set("data", $data);
    }
}
