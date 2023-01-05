<?php

/**
 * XrpFee Model
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
 * XrpFee Model
 */
class XrpFee extends AbstractModel {

    public const _D = null;
    protected static $_name = "XrpFee";
    protected static $_definition = [
        "current_ledger_size" => ["current_ledger_size", "string", null, "getCurrentLedgerSize", "setCurrentLedgerSize", null, ["r" => 0]], 
        "current_queue_size" => ["current_queue_size", "string", null, "getCurrentQueueSize", "setCurrentQueueSize", null, ["r" => 0]], 
        "drops" => ["drops", "\Tatum\Model\XrpFeeDrops", null, "getDrops", "setDrops", null, ["r" => 0]], 
        "expected_ledger_size" => ["expected_ledger_size", "string", null, "getExpectedLedgerSize", "setExpectedLedgerSize", null, ["r" => 0]], 
        "ledger_current_index" => ["ledger_current_index", "float", null, "getLedgerCurrentIndex", "setLedgerCurrentIndex", null, ["r" => 0]], 
        "levels" => ["levels", "\Tatum\Model\XrpFeeLevels", null, "getLevels", "setLevels", null, ["r" => 0]], 
        "max_queue_size" => ["max_queue_size", "string", null, "getMaxQueueSize", "setMaxQueueSize", null, ["r" => 0]]
    ];

    /**
     * XrpFee
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get current_ledger_size
     *
     * @return string|null
     */
    public function getCurrentLedgerSize(): ?string {
        return $this->_data["current_ledger_size"];
    }

    /**
     * Set current_ledger_size
     * 
     * @param string|null $current_ledger_size Number of transactions provisionally included in the in-progress ledger.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCurrentLedgerSize(?string $current_ledger_size) {
        return $this->_set("current_ledger_size", $current_ledger_size);
    }

    /**
     * Get current_queue_size
     *
     * @return string|null
     */
    public function getCurrentQueueSize(): ?string {
        return $this->_data["current_queue_size"];
    }

    /**
     * Set current_queue_size
     * 
     * @param string|null $current_queue_size Number of transactions currently queued for the next ledger.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCurrentQueueSize(?string $current_queue_size) {
        return $this->_set("current_queue_size", $current_queue_size);
    }

    /**
     * Get drops
     *
     * @return \Tatum\Model\XrpFeeDrops|null
     */
    public function getDrops(): ?\Tatum\Model\XrpFeeDrops {
        return $this->_data["drops"];
    }

    /**
     * Set drops
     * 
     * @param \Tatum\Model\XrpFeeDrops|null $drops drops
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDrops(?\Tatum\Model\XrpFeeDrops $drops) {
        return $this->_set("drops", $drops);
    }

    /**
     * Get expected_ledger_size
     *
     * @return string|null
     */
    public function getExpectedLedgerSize(): ?string {
        return $this->_data["expected_ledger_size"];
    }

    /**
     * Set expected_ledger_size
     * 
     * @param string|null $expected_ledger_size The approximate number of transactions expected to be included in the current ledger. This is based on the number of transactions in the previous ledger.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setExpectedLedgerSize(?string $expected_ledger_size) {
        return $this->_set("expected_ledger_size", $expected_ledger_size);
    }

    /**
     * Get ledger_current_index
     *
     * @return float|null
     */
    public function getLedgerCurrentIndex(): ?float {
        return $this->_data["ledger_current_index"];
    }

    /**
     * Set ledger_current_index
     * 
     * @param float|null $ledger_current_index The Ledger Index of the current open ledger these stats describe.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setLedgerCurrentIndex(?float $ledger_current_index) {
        return $this->_set("ledger_current_index", $ledger_current_index);
    }

    /**
     * Get levels
     *
     * @return \Tatum\Model\XrpFeeLevels|null
     */
    public function getLevels(): ?\Tatum\Model\XrpFeeLevels {
        return $this->_data["levels"];
    }

    /**
     * Set levels
     * 
     * @param \Tatum\Model\XrpFeeLevels|null $levels levels
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setLevels(?\Tatum\Model\XrpFeeLevels $levels) {
        return $this->_set("levels", $levels);
    }

    /**
     * Get max_queue_size
     *
     * @return string|null
     */
    public function getMaxQueueSize(): ?string {
        return $this->_data["max_queue_size"];
    }

    /**
     * Set max_queue_size
     * 
     * @param string|null $max_queue_size The maximum number of transactions that the transaction queue can currently hold.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMaxQueueSize(?string $max_queue_size) {
        return $this->_set("max_queue_size", $max_queue_size);
    }
}
