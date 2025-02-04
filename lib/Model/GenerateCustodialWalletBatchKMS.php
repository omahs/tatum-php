<?php

/**
 * GenerateCustodialWalletBatchKMS Model
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
 * GenerateCustodialWalletBatchKMS Model
 */
class GenerateCustodialWalletBatchKMS extends AbstractModel {

    public const _D = null;
    public const CHAIN_MATIC = 'MATIC';
    public const CHAIN_ETH = 'ETH';
    public const CHAIN_ONE = 'ONE';
    public const CHAIN_XDC = 'XDC';
    public const CHAIN_KLAY = 'KLAY';
    public const CHAIN_BSC = 'BSC';
    protected static $_name = "GenerateCustodialWalletBatchKMS";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null, ["r" => 1]], 
        "index" => ["index", "float", null, "getIndex", "setIndex", null, ["r" => 0, "n" => [0]]], 
        "batch_count" => ["batchCount", "float", null, "getBatchCount", "setBatchCount", null, ["r" => 1, "n" => [0], "x" => [270]]], 
        "owner" => ["owner", "string", null, "getOwner", "setOwner", null, ["r" => 1, "nl" => 42, "xl" => 43]], 
        "fee" => ["fee", "\Tatum\Model\DeployErc20Fee", null, "getFee", "setFee", null, ["r" => 0]], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce", null, ["r" => 0, "n" => [0]]]
    ];

    /**
     * GenerateCustodialWalletBatchKMS
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }

    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getChainAllowableValues(): array {
        return [
            self::CHAIN_MATIC,
            self::CHAIN_ETH,
            self::CHAIN_ONE,
            self::CHAIN_XDC,
            self::CHAIN_KLAY,
            self::CHAIN_BSC,
        ];
    }

    /**
     * Get chain
     *
     * @return string
     */
    public function getChain(): string {
        return $this->_data["chain"];
    }

    /**
     * Set chain
     * 
     * @param string $chain Blockchain to work with.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(string $chain) {
        return $this->_set("chain", $chain);
    }

    /**
     * Get signature_id
     *
     * @return string
     */
    public function getSignatureId(): string {
        return $this->_data["signature_id"];
    }

    /**
     * Set signature_id
     * 
     * @param string $signature_id Identifier of the private key associated in signing application. Private key, or signature Id must be present.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        return $this->_set("signature_id", $signature_id);
    }

    /**
     * Get index
     *
     * @return float|null
     */
    public function getIndex(): ?float {
        return $this->_data["index"];
    }

    /**
     * Set index
     * 
     * @param float|null $index If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIndex(?float $index) {
        return $this->_set("index", $index);
    }

    /**
     * Get batch_count
     *
     * @return float
     */
    public function getBatchCount(): float {
        return $this->_data["batch_count"];
    }

    /**
     * Set batch_count
     * 
     * @param float $batch_count Number of addresses to generate.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBatchCount(float $batch_count) {
        return $this->_set("batch_count", $batch_count);
    }

    /**
     * Get owner
     *
     * @return string
     */
    public function getOwner(): string {
        return $this->_data["owner"];
    }

    /**
     * Set owner
     * 
     * @param string $owner Owner of the addresses.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOwner(string $owner) {
        return $this->_set("owner", $owner);
    }

    /**
     * Get fee
     *
     * @return \Tatum\Model\DeployErc20Fee|null
     */
    public function getFee(): ?\Tatum\Model\DeployErc20Fee {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param \Tatum\Model\DeployErc20Fee|null $fee fee
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFee(?\Tatum\Model\DeployErc20Fee $fee) {
        return $this->_set("fee", $fee);
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
     * @param float|null $nonce The nonce to be set to the transaction; if not present, the last known nonce will be used
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNonce(?float $nonce) {
        return $this->_set("nonce", $nonce);
    }
}
