<?php

/**
 * AlgoBlock Model
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
 * AlgoBlock Model
 */
class AlgoBlock extends AbstractModel {

    public const _D = null;
    protected static $_name = "AlgoBlock";
    protected static $_definition = [
        "genesis_hash" => ["genesisHash", "string", null, "getGenesisHash", "setGenesisHash", null, ["r" => 0]], 
        "genesis_id" => ["genesisId", "string", null, "getGenesisId", "setGenesisId", null, ["r" => 0]], 
        "previous_block_hash" => ["previousBlockHash", "string", null, "getPreviousBlockHash", "setPreviousBlockHash", null, ["r" => 0]], 
        "rewards" => ["rewards", "object", null, "getRewards", "setRewards", null, ["r" => 0]], 
        "round" => ["round", "float", null, "getRound", "setRound", null, ["r" => 0]], 
        "seed" => ["seed", "string", null, "getSeed", "setSeed", null, ["r" => 0]], 
        "timestamp" => ["timestamp", "float", null, "getTimestamp", "setTimestamp", null, ["r" => 0]], 
        "txns" => ["txns", "\Tatum\Model\AlgoTx[]", null, "getTxns", "setTxns", null, ["r" => 0, "c" => 1]], 
        "txn" => ["txn", "string", null, "getTxn", "setTxn", null, ["r" => 0]], 
        "txnc" => ["txnc", "float", null, "getTxnc", "setTxnc", null, ["r" => 0]], 
        "upgrade_state" => ["upgradeState", "object", null, "getUpgradeState", "setUpgradeState", null, ["r" => 0]], 
        "upgrade_vote" => ["upgradeVote", "object", null, "getUpgradeVote", "setUpgradeVote", null, ["r" => 0]]
    ];

    /**
     * AlgoBlock
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get genesis_hash
     *
     * @return string|null
     */
    public function getGenesisHash(): ?string {
        return $this->_data["genesis_hash"];
    }

    /**
     * Set genesis_hash
     * 
     * @param string|null $genesis_hash hash to which this block belongs
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setGenesisHash(?string $genesis_hash) {
        return $this->_set("genesis_hash", $genesis_hash);
    }

    /**
     * Get genesis_id
     *
     * @return string|null
     */
    public function getGenesisId(): ?string {
        return $this->_data["genesis_id"];
    }

    /**
     * Set genesis_id
     * 
     * @param string|null $genesis_id ID to which this block belongs
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setGenesisId(?string $genesis_id) {
        return $this->_set("genesis_id", $genesis_id);
    }

    /**
     * Get previous_block_hash
     *
     * @return string|null
     */
    public function getPreviousBlockHash(): ?string {
        return $this->_data["previous_block_hash"];
    }

    /**
     * Set previous_block_hash
     * 
     * @param string|null $previous_block_hash Previous block hash
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPreviousBlockHash(?string $previous_block_hash) {
        return $this->_set("previous_block_hash", $previous_block_hash);
    }

    /**
     * Get rewards
     *
     * @return object|null
     */
    public function getRewards(): ?object {
        return $this->_data["rewards"];
    }

    /**
     * Set rewards
     * 
     * @param object|null $rewards rewards
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRewards(?object $rewards) {
        return $this->_set("rewards", $rewards);
    }

    /**
     * Get round
     *
     * @return float|null
     */
    public function getRound(): ?float {
        return $this->_data["round"];
    }

    /**
     * Set round
     * 
     * @param float|null $round Current round on which this block was appended to the chain
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRound(?float $round) {
        return $this->_set("round", $round);
    }

    /**
     * Get seed
     *
     * @return string|null
     */
    public function getSeed(): ?string {
        return $this->_data["seed"];
    }

    /**
     * Set seed
     * 
     * @param string|null $seed Sortition seed.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSeed(?string $seed) {
        return $this->_set("seed", $seed);
    }

    /**
     * Get timestamp
     *
     * @return float|null
     */
    public function getTimestamp(): ?float {
        return $this->_data["timestamp"];
    }

    /**
     * Set timestamp
     * 
     * @param float|null $timestamp Block creation timestamp in seconds since eposh
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTimestamp(?float $timestamp) {
        return $this->_set("timestamp", $timestamp);
    }

    /**
     * Get txns
     *
     * @return \Tatum\Model\AlgoTx[]|null
     */
    public function getTxns(): ?array {
        return $this->_data["txns"];
    }

    /**
     * Set txns
     * 
     * @param \Tatum\Model\AlgoTx[]|null $txns Array of transactions
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxns(?array $txns) {
        return $this->_set("txns", $txns);
    }

    /**
     * Get txn
     *
     * @return string|null
     */
    public function getTxn(): ?string {
        return $this->_data["txn"];
    }

    /**
     * Set txn
     * 
     * @param string|null $txn TransactionsRoot authenticates the set of transactions appearing in the block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxn(?string $txn) {
        return $this->_set("txn", $txn);
    }

    /**
     * Get txnc
     *
     * @return float|null
     */
    public function getTxnc(): ?float {
        return $this->_data["txnc"];
    }

    /**
     * Set txnc
     * 
     * @param float|null $txnc TxnCounter counts the number of transations committed in the ledger
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxnc(?float $txnc) {
        return $this->_set("txnc", $txnc);
    }

    /**
     * Get upgrade_state
     *
     * @return object|null
     */
    public function getUpgradeState(): ?object {
        return $this->_data["upgrade_state"];
    }

    /**
     * Set upgrade_state
     * 
     * @param object|null $upgrade_state upgrade state
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUpgradeState(?object $upgrade_state) {
        return $this->_set("upgrade_state", $upgrade_state);
    }

    /**
     * Get upgrade_vote
     *
     * @return object|null
     */
    public function getUpgradeVote(): ?object {
        return $this->_data["upgrade_vote"];
    }

    /**
     * Set upgrade_vote
     * 
     * @param object|null $upgrade_vote upgrade vote
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUpgradeVote(?object $upgrade_vote) {
        return $this->_set("upgrade_vote", $upgrade_vote);
    }
}
