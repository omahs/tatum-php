<?php

/**
 * CancelSellAssetOnMarketplace Model
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
 * CancelSellAssetOnMarketplace Model
 */
class CancelSellAssetOnMarketplace extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_ETH = 'ETH';
    public const CHAIN_ONE = 'ONE';
    public const CHAIN_BSC = 'BSC';
    public const CHAIN_KLAY = 'KLAY';
    public const CHAIN_MATIC = 'MATIC';
    protected static $_name = "CancelSellAssetOnMarketplace";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress"], 
        "erc20_address" => ["erc20Address", "string", null, "getErc20Address", "setErc20Address"], 
        "listing_id" => ["listingId", "string", null, "getListingId", "setListingId"], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey"], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce"], 
        "fee" => ["fee", "\Tatum\Model\DeployErc20Fee", null, "getFee", "setFee"]
    ];

    /**
     * CancelSellAssetOnMarketplace
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["chain"=>null, "contract_address"=>null, "erc20_address"=>null, "listing_id"=>null, "from_private_key"=>null, "nonce"=>null, "fee"=>null] as $k => $v) {
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
        if (is_null($this->_data['contract_address'])) {
            $ip[] = "'contract_address' can't be null";
        }
        if ((mb_strlen($this->_data['contract_address']) > 42)) {
            $ip[] = "'contract_address' length must be <= 42";
        }
        if ((mb_strlen($this->_data['contract_address']) < 42)) {
            $ip[] = "'contract_address' length must be >= 42";
        }
        if (!is_null($this->_data['erc20_address']) && (mb_strlen($this->_data['erc20_address']) > 42)) {
            $ip[] = "'erc20_address' length must be <= 42";
        }
        if (!is_null($this->_data['erc20_address']) && (mb_strlen($this->_data['erc20_address']) < 42)) {
            $ip[] = "'erc20_address' length must be >= 42";
        }
        if (is_null($this->_data['listing_id'])) {
            $ip[] = "'listing_id' can't be null";
        }
        if ((mb_strlen($this->_data['listing_id']) > 200)) {
            $ip[] = "'listing_id' length must be <= 200";
        }
        if ((mb_strlen($this->_data['listing_id']) < 1)) {
            $ip[] = "'listing_id' length must be >= 1";
        }
        if (is_null($this->_data['from_private_key'])) {
            $ip[] = "'from_private_key' can't be null";
        }
        if ((mb_strlen($this->_data['from_private_key']) > 66)) {
            $ip[] = "'from_private_key' length must be <= 66";
        }
        if ((mb_strlen($this->_data['from_private_key']) < 66)) {
            $ip[] = "'from_private_key' length must be >= 66";
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
            throw new IAE(sprintf("CancelSellAssetOnMarketplace.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get contract_address
     *
     * @return string
     */
    public function getContractAddress(): string {
        return $this->_data["contract_address"];
    }

    /**
     * Set contract_address
     * 
     * @param string $contract_address Address of the marketplace smart contract.
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        if ((mb_strlen($contract_address) > 42)) {
            throw new IAE('CancelSellAssetOnMarketplace.setContractAddress: $contract_address length must be <= 42');
        }
        if ((mb_strlen($contract_address) < 42)) {
            throw new IAE('CancelSellAssetOnMarketplace.setContractAddress: $contract_address length must be >= 42');
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
            throw new IAE('CancelSellAssetOnMarketplace.setErc20Address: $erc20_address length must be <= 42');
        }
        if (!is_null($erc20_address) && (mb_strlen($erc20_address) < 42)) {
            throw new IAE('CancelSellAssetOnMarketplace.setErc20Address: $erc20_address length must be >= 42');
        }
        $this->_data['erc20_address'] = $erc20_address;

        return $this;
    }

    /**
     * Get listing_id
     *
     * @return string
     */
    public function getListingId(): string {
        return $this->_data["listing_id"];
    }

    /**
     * Set listing_id
     * 
     * @param string $listing_id ID of the listing. It's up to the developer to generate unique ID
     * @return $this
     */
    public function setListingId(string $listing_id) {
        if ((mb_strlen($listing_id) > 200)) {
            throw new IAE('CancelSellAssetOnMarketplace.setListingId: $listing_id length must be <= 200');
        }
        if ((mb_strlen($listing_id) < 1)) {
            throw new IAE('CancelSellAssetOnMarketplace.setListingId: $listing_id length must be >= 1');
        }
        $this->_data['listing_id'] = $listing_id;

        return $this;
    }

    /**
     * Get from_private_key
     *
     * @return string
     */
    public function getFromPrivateKey(): string {
        return $this->_data["from_private_key"];
    }

    /**
     * Set from_private_key
     * 
     * @param string $from_private_key Private key of sender address. Private key, or signature Id must be present.
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        if ((mb_strlen($from_private_key) > 66)) {
            throw new IAE('CancelSellAssetOnMarketplace.setFromPrivateKey: $from_private_key length must be <= 66');
        }
        if ((mb_strlen($from_private_key) < 66)) {
            throw new IAE('CancelSellAssetOnMarketplace.setFromPrivateKey: $from_private_key length must be >= 66');
        }
        $this->_data['from_private_key'] = $from_private_key;

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