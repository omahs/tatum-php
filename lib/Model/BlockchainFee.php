<?php

/**
 * BlockchainFee Model
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
 * BlockchainFee Model
 * 
 * @description Recommended fees to perform blockchain transaction
 */
class BlockchainFee extends AbstractModel {

    public const _D = null;
    protected static $_name = "BlockchainFee";
    protected static $_definition = [
        "fast" => ["fast", "float", null, "getFast", "setFast", null, ["r" => 1]], 
        "medium" => ["medium", "float", null, "getMedium", "setMedium", null, ["r" => 1]], 
        "slow" => ["slow", "float", null, "getSlow", "setSlow", null, ["r" => 1]], 
        "base_fee" => ["baseFee", "float", null, "getBaseFee", "setBaseFee", null, ["r" => 0]], 
        "time" => ["time", "string", null, "getTime", "setTime", null, ["r" => 1]], 
        "block" => ["block", "float", null, "getBlock", "setBlock", null, ["r" => 1]]
    ];

    /**
     * BlockchainFee
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get fast
     *
     * @return float
     */
    public function getFast(): float {
        return $this->_data["fast"];
    }

    /**
     * Set fast
     * 
     * @param float $fast Fast transaction acceptance time into block. For btc-based chains - fee per byte. For evm-based chains - gas price in wei
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFast(float $fast) {
        return $this->_set("fast", $fast);
    }

    /**
     * Get medium
     *
     * @return float
     */
    public function getMedium(): float {
        return $this->_data["medium"];
    }

    /**
     * Set medium
     * 
     * @param float $medium Medium transaction acceptance time into block. For btc-based chains - fee per byte. For evm-based chains - gas price in wei
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMedium(float $medium) {
        return $this->_set("medium", $medium);
    }

    /**
     * Get slow
     *
     * @return float
     */
    public function getSlow(): float {
        return $this->_data["slow"];
    }

    /**
     * Set slow
     * 
     * @param float $slow Slow transaction acceptance time into block. For btc-based chains - fee per byte. For evm-based chains - gas price in wei
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSlow(float $slow) {
        return $this->_set("slow", $slow);
    }

    /**
     * Get base_fee
     *
     * @return float|null
     */
    public function getBaseFee(): ?float {
        return $this->_data["base_fee"];
    }

    /**
     * Set base_fee
     * 
     * @param float|null $base_fee (evm-based only) This is the minimum fee needs to paid in order for the tx to be accepted into block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBaseFee(?float $base_fee) {
        return $this->_set("base_fee", $base_fee);
    }

    /**
     * Get time
     *
     * @return string
     */
    public function getTime(): string {
        return $this->_data["time"];
    }

    /**
     * Set time
     * 
     * @param string $time Last time fees were recalculated
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTime(string $time) {
        return $this->_set("time", $time);
    }

    /**
     * Get block
     *
     * @return float
     */
    public function getBlock(): float {
        return $this->_data["block"];
    }

    /**
     * Set block
     * 
     * @param float $block Last used to calculate fee from
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBlock(float $block) {
        return $this->_set("block", $block);
    }
}
