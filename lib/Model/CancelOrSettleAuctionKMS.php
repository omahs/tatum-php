<?php

/**
 * CancelOrSettleAuctionKMS Model
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
 * CancelOrSettleAuctionKMS Model
 */
class CancelOrSettleAuctionKMS extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_ETH = 'ETH';
    public const CHAIN_ONE = 'ONE';
    public const CHAIN_BSC = 'BSC';
    public const CHAIN_KLAY = 'KLAY';
    public const CHAIN_MATIC = 'MATIC';
    protected static $_name = "CancelOrSettleAuctionKMS";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress"], 
        "erc20_address" => ["erc20Address", "string", null, "getErc20Address", "setErc20Address"], 
        "id" => ["id", "string", null, "getId", "setId"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"], 
        "index" => ["index", "float", null, "getIndex", "setIndex"], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce"], 
        "fee" => ["fee", "\Tatum\Model\DeployErc20Fee", null, "getFee", "setFee"]
    ];

    /**
     * CancelOrSettleAuctionKMS
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["chain"=>null, "contract_address"=>null, "erc20_address"=>null, "id"=>null, "signature_id"=>null, "index"=>null, "nonce"=>null, "fee"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['chain'])) {
            $ip[] = "'chain' can't be null";
        }
        $allowed = $this->getChainAllowableValues();
        $value = $this->_data['chain'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'chain' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (!is_null($this->_data['contract_address']) && (mb_strlen($this->_data['contract_address']) > 42)) {
            $ip[] = "'contract_address' length must be <= 42";
        }
        if (!is_null($this->_data['contract_address']) && (mb_strlen($this->_data['contract_address']) < 42)) {
            $ip[] = "'contract_address' length must be >= 42";
        }
        if (!is_null($this->_data['erc20_address']) && (mb_strlen($this->_data['erc20_address']) > 42)) {
            $ip[] = "'erc20_address' length must be <= 42";
        }
        if (!is_null($this->_data['erc20_address']) && (mb_strlen($this->_data['erc20_address']) < 42)) {
            $ip[] = "'erc20_address' length must be >= 42";
        }
        if (is_null($this->_data['id'])) {
            $ip[] = "'id' can't be null";
        }
        if ((mb_strlen($this->_data['id']) > 200)) {
            $ip[] = "'id' length must be <= 200";
        }
        if ((mb_strlen($this->_data['id']) < 1)) {
            $ip[] = "'id' length must be >= 1";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        if (!is_null($this->_data['index']) && ($this->_data['index'] < 0)) {
            $ip[] = "'index' must be >= 0";
        }
        
        return $ip;
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getChainAllowableValues(): array {
        return [
            self::CHAIN_ETH,
            self::CHAIN_ONE,
            self::CHAIN_BSC,
            self::CHAIN_KLAY,
            self::CHAIN_MATIC,
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
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("CancelOrSettleAuctionKMS.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get contract_address
     *
     * @return string|null
     */
    public function getContractAddress(): ?string {
        return $this->_data["contract_address"];
    }

    /**
     * Set contract_address
     * 
     * @param string|null $contract_address Address of the marketplace smart contract.
     * @return $this
     */
    public function setContractAddress(?string $contract_address) {
        if (!is_null($contract_address) && (mb_strlen($contract_address) > 42)) {
            throw new IAE('CancelOrSettleAuctionKMS.setContractAddress: $contract_address length must be <= 42');
        }
        if (!is_null($contract_address) && (mb_strlen($contract_address) < 42)) {
            throw new IAE('CancelOrSettleAuctionKMS.setContractAddress: $contract_address length must be >= 42');
        }
        $this->_data['contract_address'] = $contract_address;

        return $this;
    }

    /**
     * Get erc20_address
     *
     * @return string|null
     */
    public function getErc20Address(): ?string {
        return $this->_data["erc20_address"];
    }

    /**
     * Set erc20_address
     * 
     * @param string|null $erc20_address Optional address of the ERC20 token, which will be used as a selling currency of the NFT.
     * @return $this
     */
    public function setErc20Address(?string $erc20_address) {
        if (!is_null($erc20_address) && (mb_strlen($erc20_address) > 42)) {
            throw new IAE('CancelOrSettleAuctionKMS.setErc20Address: $erc20_address length must be <= 42');
        }
        if (!is_null($erc20_address) && (mb_strlen($erc20_address) < 42)) {
            throw new IAE('CancelOrSettleAuctionKMS.setErc20Address: $erc20_address length must be >= 42');
        }
        $this->_data['erc20_address'] = $erc20_address;

        return $this;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId(): string {
        return $this->_data["id"];
    }

    /**
     * Set id
     * 
     * @param string $id ID of the auction.
     * @return $this
     */
    public function setId(string $id) {
        if ((mb_strlen($id) > 200)) {
            throw new IAE('CancelOrSettleAuctionKMS.setId: $id length must be <= 200');
        }
        if ((mb_strlen($id) < 1)) {
            throw new IAE('CancelOrSettleAuctionKMS.setId: $id length must be >= 1');
        }
        $this->_data['id'] = $id;

        return $this;
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
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

        return $this;
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
     * @return $this
     */
    public function setIndex(?float $index) {
        if (!is_null($index) && ($index < 0)) {
            throw new IAE('CancelOrSettleAuctionKMS.setIndex: $index must be >=0');
        }
        $this->_data['index'] = $index;

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
     * @param float|null $nonce Nonce to be set to Ethereum transaction. If not present, last known nonce will be used.
     * @return $this
     */
    public function setNonce(?float $nonce) {
        $this->_data['nonce'] = $nonce;

        return $this;
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
     * @return $this
     */
    public function setFee(?\Tatum\Model\DeployErc20Fee $fee) {
        $this->_data['fee'] = $fee;

        return $this;
    }
}