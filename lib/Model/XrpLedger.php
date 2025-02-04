<?php

/**
 * XrpLedger Model
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
 * XrpLedger Model
 */
class XrpLedger extends AbstractModel {

    public const _D = null;
    protected static $_name = "XrpLedger";
    protected static $_definition = [
        "ledger" => ["ledger", "\Tatum\Model\XrpLedgerLedger", null, "getLedger", "setLedger", null, ["r" => 0]], 
        "ledger_hash" => ["ledger_hash", "string", null, "getLedgerHash", "setLedgerHash", null, ["r" => 0]], 
        "ledger_index" => ["ledger_index", "int", null, "getLedgerIndex", "setLedgerIndex", null, ["r" => 0]], 
        "validated" => ["validated", "bool", null, "getValidated", "setValidated", null, ["r" => 0]]
    ];

    /**
     * XrpLedger
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get ledger
     *
     * @return \Tatum\Model\XrpLedgerLedger|null
     */
    public function getLedger(): ?\Tatum\Model\XrpLedgerLedger {
        return $this->_data["ledger"];
    }

    /**
     * Set ledger
     * 
     * @param \Tatum\Model\XrpLedgerLedger|null $ledger ledger
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setLedger(?\Tatum\Model\XrpLedgerLedger $ledger) {
        return $this->_set("ledger", $ledger);
    }

    /**
     * Get ledger_hash
     *
     * @return string|null
     */
    public function getLedgerHash(): ?string {
        return $this->_data["ledger_hash"];
    }

    /**
     * Set ledger_hash
     * 
     * @param string|null $ledger_hash Unique identifying hash of the entire ledger.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setLedgerHash(?string $ledger_hash) {
        return $this->_set("ledger_hash", $ledger_hash);
    }

    /**
     * Get ledger_index
     *
     * @return int|null
     */
    public function getLedgerIndex(): ?int {
        return $this->_data["ledger_index"];
    }

    /**
     * Set ledger_index
     * 
     * @param int|null $ledger_index The Ledger Index of this ledger.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setLedgerIndex(?int $ledger_index) {
        return $this->_set("ledger_index", $ledger_index);
    }

    /**
     * Get validated
     *
     * @return bool|null
     */
    public function getValidated(): ?bool {
        return $this->_data["validated"];
    }

    /**
     * Set validated
     * 
     * @param bool|null $validated True if this data is from a validated ledger version; if omitted or set to false, this data is not final.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setValidated(?bool $validated) {
        return $this->_set("validated", $validated);
    }
}
