<?php

/**
 * XrpFee_drops Model
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
 * XrpFee_drops Model
 * 
 * @description Various information about the transaction cost (the Fee field of a transaction), in drops of XRP.
 */
class XrpFeeDrops extends AbstractModel {

    public const _D = null;
    protected static $_name = "XrpFee_drops";
    protected static $_definition = [
        "base_fee" => ["base_fee", "string", null, "getBaseFee", "setBaseFee", null, ["r" => 0]], 
        "median_fee" => ["median_fee", "string", null, "getMedianFee", "setMedianFee", null, ["r" => 0]], 
        "minimum_fee" => ["minimum_fee", "string", null, "getMinimumFee", "setMinimumFee", null, ["r" => 0]], 
        "open_ledger_fee" => ["open_ledger_fee", "string", null, "getOpenLedgerFee", "setOpenLedgerFee", null, ["r" => 0]]
    ];

    /**
     * XrpFeeDrops
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get base_fee
     *
     * @return string|null
     */
    public function getBaseFee(): ?string {
        return $this->_data["base_fee"];
    }

    /**
     * Set base_fee
     * 
     * @param string|null $base_fee The transaction cost required for a reference transaction to be included in a ledger under minimum load, represented in drops of XRP.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBaseFee(?string $base_fee) {
        return $this->_set("base_fee", $base_fee);
    }

    /**
     * Get median_fee
     *
     * @return string|null
     */
    public function getMedianFee(): ?string {
        return $this->_data["median_fee"];
    }

    /**
     * Set median_fee
     * 
     * @param string|null $median_fee An approximation of the median transaction cost among transactions included in the previous validated ledger, represented in drops of XRP.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMedianFee(?string $median_fee) {
        return $this->_set("median_fee", $median_fee);
    }

    /**
     * Get minimum_fee
     *
     * @return string|null
     */
    public function getMinimumFee(): ?string {
        return $this->_data["minimum_fee"];
    }

    /**
     * Set minimum_fee
     * 
     * @param string|null $minimum_fee The minimum transaction cost for a reference transaction to be queued for a later ledger, represented in drops of XRP. If greater than base_fee, the transaction queue is full.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMinimumFee(?string $minimum_fee) {
        return $this->_set("minimum_fee", $minimum_fee);
    }

    /**
     * Get open_ledger_fee
     *
     * @return string|null
     */
    public function getOpenLedgerFee(): ?string {
        return $this->_data["open_ledger_fee"];
    }

    /**
     * Set open_ledger_fee
     * 
     * @param string|null $open_ledger_fee The minimum transaction cost that a reference transaction must pay to be included in the current open ledger, represented in drops of XRP.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOpenLedgerFee(?string $open_ledger_fee) {
        return $this->_set("open_ledger_fee", $open_ledger_fee);
    }
}
