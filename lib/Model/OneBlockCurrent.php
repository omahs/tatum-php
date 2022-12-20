<?php

/**
 * OneBlockCurrent Model
 *
 * @version   3.17.1
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
 * OneBlockCurrent Model
 */
class OneBlockCurrent extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "OneBlockCurrent";
    protected static $_definition = [
        "shard_id" => ["shardID", "float", null, "getShardId", "setShardId"], 
        "block_number" => ["blockNumber", "float", null, "getBlockNumber", "setBlockNumber"]
    ];

    /**
     * OneBlockCurrent
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["shard_id"=>null, "block_number"=>null] as $k => $v) {
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
     * Get shard_id
     *
     * @return float|null
     */
    public function getShardId(): ?float {
        return $this->_data["shard_id"];
    }

    /**
     * Set shard_id
     * 
     * @param float|null $shard_id Shard ID
     * @return $this
     */
    public function setShardId(?float $shard_id) {
        $this->_data['shard_id'] = $shard_id;

        return $this;
    }

    /**
     * Get block_number
     *
     * @return float|null
     */
    public function getBlockNumber(): ?float {
        return $this->_data["block_number"];
    }

    /**
     * Set block_number
     * 
     * @param float|null $block_number Current block number in this shard
     * @return $this
     */
    public function setBlockNumber(?float $block_number) {
        $this->_data['block_number'] = $block_number;

        return $this;
    }
}