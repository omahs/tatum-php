<?php

/**
 * VetBlock Model
 *
 * @version   3.17.0
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

use InvalidArgumentException as IAE;

/**
 * VetBlock Model
 */
class VetBlock extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "VetBlock";
    protected static $_definition = [
        "number" => ["number", "int", 'uint32', "getNumber", "setNumber"], 
        "id" => ["id", "string", 'bytes32', "getId", "setId"], 
        "size" => ["size", "int", 'uint32', "getSize", "setSize"], 
        "parent_id" => ["parentID", "string", 'bytes32', "getParentId", "setParentId"], 
        "timestamp" => ["timestamp", "int", 'uint64', "getTimestamp", "setTimestamp"], 
        "gas_limit" => ["gasLimit", "int", 'uint64', "getGasLimit", "setGasLimit"], 
        "beneficiary" => ["beneficiary", "string", 'bytes32', "getBeneficiary", "setBeneficiary"], 
        "gas_used" => ["gasUsed", "int", 'uint64', "getGasUsed", "setGasUsed"], 
        "total_score" => ["totalScore", "int", 'uint64', "getTotalScore", "setTotalScore"], 
        "txs_root" => ["txsRoot", "string", 'bytes32', "getTxsRoot", "setTxsRoot"], 
        "txs_features" => ["txsFeatures", "int", 'uint32', "getTxsFeatures", "setTxsFeatures"], 
        "state_root" => ["stateRoot", "string", 'bytes32', "getStateRoot", "setStateRoot"], 
        "receipts_root" => ["receiptsRoot", "string", 'bytes32', "getReceiptsRoot", "setReceiptsRoot"], 
        "signer" => ["signer", "string", 'bytes20', "getSigner", "setSigner"], 
        "transactions" => ["transactions", "string[]", 'bytes32', "getTransactions", "setTransactions"]
    ];

    /**
     * VetBlock
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["number"=>null, "id"=>null, "size"=>null, "parent_id"=>null, "timestamp"=>null, "gas_limit"=>null, "beneficiary"=>null, "gas_used"=>null, "total_score"=>null, "txs_root"=>null, "txs_features"=>null, "state_root"=>null, "receipts_root"=>null, "signer"=>null, "transactions"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        
        return $ip;
    }

    /**
     * Get number
     *
     * @return int|null
     */
    public function getNumber(): ?int {
        return $this->_data["number"];
    }

    /**
     * Set number
     * 
     * @param int|null $number block number (height)
     * @return $this
     */
    public function setNumber(?int $number) {
        $this->_data['number'] = $number;

        return $this;
    }

    /**
     * Get id
     *
     * @return string|null
     */
    public function getId(): ?string {
        return $this->_data["id"];
    }

    /**
     * Set id
     * 
     * @param string|null $id block identifier
     * @return $this
     */
    public function setId(?string $id) {
        $this->_data['id'] = $id;

        return $this;
    }

    /**
     * Get size
     *
     * @return int|null
     */
    public function getSize(): ?int {
        return $this->_data["size"];
    }

    /**
     * Set size
     * 
     * @param int|null $size RLP encoded block size in bytes
     * @return $this
     */
    public function setSize(?int $size) {
        $this->_data['size'] = $size;

        return $this;
    }

    /**
     * Get parent_id
     *
     * @return string|null
     */
    public function getParentId(): ?string {
        return $this->_data["parent_id"];
    }

    /**
     * Set parent_id
     * 
     * @param string|null $parent_id parent block ID
     * @return $this
     */
    public function setParentId(?string $parent_id) {
        $this->_data['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return int|null
     */
    public function getTimestamp(): ?int {
        return $this->_data["timestamp"];
    }

    /**
     * Set timestamp
     * 
     * @param int|null $timestamp block unix timestamp
     * @return $this
     */
    public function setTimestamp(?int $timestamp) {
        $this->_data['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Get gas_limit
     *
     * @return int|null
     */
    public function getGasLimit(): ?int {
        return $this->_data["gas_limit"];
    }

    /**
     * Set gas_limit
     * 
     * @param int|null $gas_limit block gas limit (max allowed accumulative gas usage of transactions)
     * @return $this
     */
    public function setGasLimit(?int $gas_limit) {
        $this->_data['gas_limit'] = $gas_limit;

        return $this;
    }

    /**
     * Get beneficiary
     *
     * @return string|null
     */
    public function getBeneficiary(): ?string {
        return $this->_data["beneficiary"];
    }

    /**
     * Set beneficiary
     * 
     * @param string|null $beneficiary Address of account to receive block reward
     * @return $this
     */
    public function setBeneficiary(?string $beneficiary) {
        $this->_data['beneficiary'] = $beneficiary;

        return $this;
    }

    /**
     * Get gas_used
     *
     * @return int|null
     */
    public function getGasUsed(): ?int {
        return $this->_data["gas_used"];
    }

    /**
     * Set gas_used
     * 
     * @param int|null $gas_used accumulative gas usage of transactions
     * @return $this
     */
    public function setGasUsed(?int $gas_used) {
        $this->_data['gas_used'] = $gas_used;

        return $this;
    }

    /**
     * Get total_score
     *
     * @return int|null
     */
    public function getTotalScore(): ?int {
        return $this->_data["total_score"];
    }

    /**
     * Set total_score
     * 
     * @param int|null $total_score sum of all ancestral blocks' score
     * @return $this
     */
    public function setTotalScore(?int $total_score) {
        $this->_data['total_score'] = $total_score;

        return $this;
    }

    /**
     * Get txs_root
     *
     * @return string|null
     */
    public function getTxsRoot(): ?string {
        return $this->_data["txs_root"];
    }

    /**
     * Set txs_root
     * 
     * @param string|null $txs_root root hash of transactions in the block
     * @return $this
     */
    public function setTxsRoot(?string $txs_root) {
        $this->_data['txs_root'] = $txs_root;

        return $this;
    }

    /**
     * Get txs_features
     *
     * @return int|null
     */
    public function getTxsFeatures(): ?int {
        return $this->_data["txs_features"];
    }

    /**
     * Set txs_features
     * 
     * @param int|null $txs_features supported txs features bitset
     * @return $this
     */
    public function setTxsFeatures(?int $txs_features) {
        $this->_data['txs_features'] = $txs_features;

        return $this;
    }

    /**
     * Get state_root
     *
     * @return string|null
     */
    public function getStateRoot(): ?string {
        return $this->_data["state_root"];
    }

    /**
     * Set state_root
     * 
     * @param string|null $state_root root hash of accounts state
     * @return $this
     */
    public function setStateRoot(?string $state_root) {
        $this->_data['state_root'] = $state_root;

        return $this;
    }

    /**
     * Get receipts_root
     *
     * @return string|null
     */
    public function getReceiptsRoot(): ?string {
        return $this->_data["receipts_root"];
    }

    /**
     * Set receipts_root
     * 
     * @param string|null $receipts_root root hash of transaction receipts
     * @return $this
     */
    public function setReceiptsRoot(?string $receipts_root) {
        $this->_data['receipts_root'] = $receipts_root;

        return $this;
    }

    /**
     * Get signer
     *
     * @return string|null
     */
    public function getSigner(): ?string {
        return $this->_data["signer"];
    }

    /**
     * Set signer
     * 
     * @param string|null $signer the one who signed this block
     * @return $this
     */
    public function setSigner(?string $signer) {
        $this->_data['signer'] = $signer;

        return $this;
    }

    /**
     * Get transactions
     *
     * @return string[]|null
     */
    public function getTransactions(): ?array {
        return $this->_data["transactions"];
    }

    /**
     * Set transactions
     * 
     * @param string[]|null $transactions transactions IDs
     * @return $this
     */
    public function setTransactions(?array $transactions) {
        $this->_data['transactions'] = $transactions;

        return $this;
    }
}