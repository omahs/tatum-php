<?php

/**
 * DogeBlock Model
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
 * DogeBlock Model
 */
class DogeBlock extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "DogeBlock";
    protected static $_definition = [
        "hash" => ["hash", "string", null, "getHash", "setHash"], 
        "height" => ["height", "float", null, "getHeight", "setHeight"], 
        "size" => ["size", "float", null, "getSize", "setSize"], 
        "confirmations" => ["confirmations", "float", null, "getConfirmations", "setConfirmations"], 
        "weight" => ["weight", "float", null, "getWeight", "setWeight"], 
        "version" => ["version", "float", null, "getVersion", "setVersion"], 
        "previousblockhash" => ["previousblockhash", "string", null, "getPreviousblockhash", "setPreviousblockhash"], 
        "merkle_root" => ["merkleRoot", "string", null, "getMerkleRoot", "setMerkleRoot"], 
        "time" => ["time", "float", null, "getTime", "setTime"], 
        "bits" => ["bits", "float", null, "getBits", "setBits"], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce"], 
        "txs" => ["txs", "\Tatum\Model\DogeTx[]", null, "getTxs", "setTxs"]
    ];

    /**
     * DogeBlock
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["hash"=>null, "height"=>null, "size"=>null, "confirmations"=>null, "weight"=>null, "version"=>null, "previousblockhash"=>null, "merkle_root"=>null, "time"=>null, "bits"=>null, "nonce"=>null, "txs"=>null] as $k => $v) {
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
     * @param string|null $hash Hash of block.
     * @return $this
     */
    public function setHash(?string $hash) {
        $this->_data['hash'] = $hash;

        return $this;
    }

    /**
     * Get height
     *
     * @return float|null
     */
    public function getHeight(): ?float {
        return $this->_data["height"];
    }

    /**
     * Set height
     * 
     * @param float|null $height The number of blocks preceding a particular block on a block chain.
     * @return $this
     */
    public function setHeight(?float $height) {
        $this->_data['height'] = $height;

        return $this;
    }

    /**
     * Get size
     *
     * @return float|null
     */
    public function getSize(): ?float {
        return $this->_data["size"];
    }

    /**
     * Set size
     * 
     * @param float|null $size The size of the block.
     * @return $this
     */
    public function setSize(?float $size) {
        $this->_data['size'] = $size;

        return $this;
    }

    /**
     * Get confirmations
     *
     * @return float|null
     */
    public function getConfirmations(): ?float {
        return $this->_data["confirmations"];
    }

    /**
     * Set confirmations
     * 
     * @param float|null $confirmations Number of confirmations of that block.
     * @return $this
     */
    public function setConfirmations(?float $confirmations) {
        $this->_data['confirmations'] = $confirmations;

        return $this;
    }

    /**
     * Get weight
     *
     * @return float|null
     */
    public function getWeight(): ?float {
        return $this->_data["weight"];
    }

    /**
     * Set weight
     * 
     * @param float|null $weight The weight of the block.
     * @return $this
     */
    public function setWeight(?float $weight) {
        $this->_data['weight'] = $weight;

        return $this;
    }

    /**
     * Get version
     *
     * @return float|null
     */
    public function getVersion(): ?float {
        return $this->_data["version"];
    }

    /**
     * Set version
     * 
     * @param float|null $version Block version.
     * @return $this
     */
    public function setVersion(?float $version) {
        $this->_data['version'] = $version;

        return $this;
    }

    /**
     * Get previousblockhash
     *
     * @return string|null
     */
    public function getPreviousblockhash(): ?string {
        return $this->_data["previousblockhash"];
    }

    /**
     * Set previousblockhash
     * 
     * @param string|null $previousblockhash Hash of the previous block.
     * @return $this
     */
    public function setPreviousblockhash(?string $previousblockhash) {
        $this->_data['previousblockhash'] = $previousblockhash;

        return $this;
    }

    /**
     * Get merkle_root
     *
     * @return string|null
     */
    public function getMerkleRoot(): ?string {
        return $this->_data["merkle_root"];
    }

    /**
     * Set merkle_root
     * 
     * @param string|null $merkle_root The root node of a merkle tree, a descendant of all the hashed pairs in the tree.
     * @return $this
     */
    public function setMerkleRoot(?string $merkle_root) {
        $this->_data['merkle_root'] = $merkle_root;

        return $this;
    }

    /**
     * Get time
     *
     * @return float|null
     */
    public function getTime(): ?float {
        return $this->_data["time"];
    }

    /**
     * Set time
     * 
     * @param float|null $time Time of the block.
     * @return $this
     */
    public function setTime(?float $time) {
        $this->_data['time'] = $time;

        return $this;
    }

    /**
     * Get bits
     *
     * @return float|null
     */
    public function getBits(): ?float {
        return $this->_data["bits"];
    }

    /**
     * Set bits
     * 
     * @param float|null $bits bits
     * @return $this
     */
    public function setBits(?float $bits) {
        $this->_data['bits'] = $bits;

        return $this;
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
     * @param float|null $nonce Arbitrary number that is used in Litecoin's proof of work consensus algorithm.
     * @return $this
     */
    public function setNonce(?float $nonce) {
        $this->_data['nonce'] = $nonce;

        return $this;
    }

    /**
     * Get txs
     *
     * @return \Tatum\Model\DogeTx[]|null
     */
    public function getTxs(): ?array {
        return $this->_data["txs"];
    }

    /**
     * Set txs
     * 
     * @param \Tatum\Model\DogeTx[]|null $txs txs
     * @return $this
     */
    public function setTxs(?array $txs) {
        $this->_data['txs'] = $txs;

        return $this;
    }
}