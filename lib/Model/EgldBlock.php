<?php

/**
 * EgldBlock Model
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
 * EgldBlock Model
 */
class EgldBlock extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "EgldBlock";
    protected static $_definition = [
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce"], 
        "round" => ["round", "float", null, "getRound", "setRound"], 
        "hash" => ["hash", "string", null, "getHash", "setHash"], 
        "prev_block_hash" => ["prevBlockHash", "string", null, "getPrevBlockHash", "setPrevBlockHash"], 
        "epoch" => ["epoch", "float", null, "getEpoch", "setEpoch"], 
        "num_txs" => ["numTxs", "float", null, "getNumTxs", "setNumTxs"], 
        "shard_blocks" => ["shardBlocks", "\Tatum\Model\EgldShardBlock[]", null, "getShardBlocks", "setShardBlocks"], 
        "transactions" => ["transactions", "\Tatum\Model\EgldTx[]", null, "getTransactions", "setTransactions"]
    ];

    /**
     * EgldBlock
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["nonce"=>null, "round"=>null, "hash"=>null, "prev_block_hash"=>null, "epoch"=>null, "num_txs"=>null, "shard_blocks"=>null, "transactions"=>null] as $k => $v) {
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
     * Get nonce
     *
     * @return float|null
     */
    public function getNonce(): ?float {
        return $this->_data["nonce"];
    }

    /**
     * Set nonce
     * 
     * @param float|null $nonce The block height.
     * @return $this
     */
    public function setNonce(?float $nonce) {
        $this->_data['nonce'] = $nonce;

        return $this;
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
     * @param float|null $round The round number.
     * @return $this
     */
    public function setRound(?float $round) {
        $this->_data['round'] = $round;

        return $this;
    }

    /**
     * Get hash
     *
     * @return string|null
     */
    public function getHash(): ?string {
        return $this->_data["hash"];
    }

    /**
     * Set hash
     * 
     * @param string|null $hash Hash of the block.
     * @return $this
     */
    public function setHash(?string $hash) {
        $this->_data['hash'] = $hash;

        return $this;
    }

    /**
     * Get prev_block_hash
     *
     * @return string|null
     */
    public function getPrevBlockHash(): ?string {
        return $this->_data["prev_block_hash"];
    }

    /**
     * Set prev_block_hash
     * 
     * @param string|null $prev_block_hash Hash of the previous block.
     * @return $this
     */
    public function setPrevBlockHash(?string $prev_block_hash) {
        $this->_data['prev_block_hash'] = $prev_block_hash;

        return $this;
    }

    /**
     * Get epoch
     *
     * @return float|null
     */
    public function getEpoch(): ?float {
        return $this->_data["epoch"];
    }

    /**
     * Set epoch
     * 
     * @param float|null $epoch An epoch is a sequence of consecutive rounds during which the configuration of the network does not change (currently aprox. 24 hrs in length).
     * @return $this
     */
    public function setEpoch(?float $epoch) {
        $this->_data['epoch'] = $epoch;

        return $this;
    }

    /**
     * Get num_txs
     *
     * @return float|null
     */
    public function getNumTxs(): ?float {
        return $this->_data["num_txs"];
    }

    /**
     * Set num_txs
     * 
     * @param float|null $num_txs Number of transactions in current block.
     * @return $this
     */
    public function setNumTxs(?float $num_txs) {
        $this->_data['num_txs'] = $num_txs;

        return $this;
    }

    /**
     * Get shard_blocks
     *
     * @return \Tatum\Model\EgldShardBlock[]|null
     */
    public function getShardBlocks(): ?array {
        return $this->_data["shard_blocks"];
    }

    /**
     * Set shard_blocks
     * 
     * @param \Tatum\Model\EgldShardBlock[]|null $shard_blocks Array of shard blocks
     * @return $this
     */
    public function setShardBlocks(?array $shard_blocks) {
        $this->_data['shard_blocks'] = $shard_blocks;

        return $this;
    }

    /**
     * Get transactions
     *
     * @return \Tatum\Model\EgldTx[]|null
     */
    public function getTransactions(): ?array {
        return $this->_data["transactions"];
    }

    /**
     * Set transactions
     * 
     * @param \Tatum\Model\EgldTx[]|null $transactions Array of transactions.
     * @return $this
     */
    public function setTransactions(?array $transactions) {
        $this->_data['transactions'] = $transactions;

        return $this;
    }
}