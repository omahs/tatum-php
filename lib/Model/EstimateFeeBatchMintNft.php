<?php

/**
 * EstimateFeeBatchMintNft Model
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
 * EstimateFeeBatchMintNft Model
 */
class EstimateFeeBatchMintNft extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_CELO = 'CELO';
    public const CHAIN_ETH = 'ETH';
    public const CHAIN_BSC = 'BSC';
    public const CHAIN_XDC = 'XDC';
    public const CHAIN_ONE = 'ONE';
    public const CHAIN_MATIC = 'MATIC';
    public const CHAIN_KLAY = 'KLAY';
    public const TYPE_MINT_NFT_BATCH = 'MINT_NFT_BATCH';
    protected static $_name = "EstimateFeeBatchMintNft";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "type" => ["type", "string", null, "getType", "setType"], 
        "sender" => ["sender", "string", null, "getSender", "setSender"], 
        "recipients" => ["recipients", "string[]", null, "getRecipients", "setRecipients"], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress"], 
        "token_ids" => ["tokenIds", "string[]", null, "getTokenIds", "setTokenIds"], 
        "urls" => ["urls", "string[]", null, "getUrls", "setUrls"]
    ];

    /**
     * EstimateFeeBatchMintNft
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["chain"=>null, "type"=>null, "sender"=>null, "recipients"=>null, "contract_address"=>null, "token_ids"=>null, "urls"=>null] as $k => $v) {
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
        if (is_null($this->_data['type'])) {
            $ip[] = "'type' can't be null";
        }
        $allowed = $this->getTypeAllowableValues();
        $value = $this->_data['type'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'type' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (is_null($this->_data['sender'])) {
            $ip[] = "'sender' can't be null";
        }
        if ((mb_strlen($this->_data['sender']) > 42)) {
            $ip[] = "'sender' length must be <= 42";
        }
        if ((mb_strlen($this->_data['sender']) < 43)) {
            $ip[] = "'sender' length must be >= 43";
        }
        if (is_null($this->_data['recipients'])) {
            $ip[] = "'recipients' can't be null";
        }
        if (!is_null($this->_data['contract_address']) && (mb_strlen($this->_data['contract_address']) > 42)) {
            $ip[] = "'contract_address' length must be <= 42";
        }
        if (!is_null($this->_data['contract_address']) && (mb_strlen($this->_data['contract_address']) < 43)) {
            $ip[] = "'contract_address' length must be >= 43";
        }
        if (is_null($this->_data['token_ids'])) {
            $ip[] = "'token_ids' can't be null";
        }
        if (is_null($this->_data['urls'])) {
            $ip[] = "'urls' can't be null";
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
            self::CHAIN_CELO,
            self::CHAIN_ETH,
            self::CHAIN_BSC,
            self::CHAIN_XDC,
            self::CHAIN_ONE,
            self::CHAIN_MATIC,
            self::CHAIN_KLAY,
        ];
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getTypeAllowableValues(): array {
        return [
            self::TYPE_MINT_NFT_BATCH,
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
     * @param string $chain Blockchain to estimate fee for.
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("EstimateFeeBatchMintNft.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType(): string {
        return $this->_data["type"];
    }

    /**
     * Set type
     * 
     * @param string $type Type of transaction
     * @return $this
     */
    public function setType(string $type) {
        $allowed = $this->getTypeAllowableValues();
        if (!in_array($type, $allowed, true)) {
            throw new IAE(sprintf("EstimateFeeBatchMintNft.setType: type invalid value '%s', must be one of '%s'", $type, implode("', '", $allowed)));
        }
        $this->_data['type'] = $type;

        return $this;
    }

    /**
     * Get sender
     *
     * @return string
     */
    public function getSender(): string {
        return $this->_data["sender"];
    }

    /**
     * Set sender
     * 
     * @param string $sender Address of the minter
     * @return $this
     */
    public function setSender(string $sender) {
        if ((mb_strlen($sender) > 42)) {
            throw new IAE('EstimateFeeBatchMintNft.setSender: $sender length must be <= 42');
        }
        if ((mb_strlen($sender) < 43)) {
            throw new IAE('EstimateFeeBatchMintNft.setSender: $sender length must be >= 43');
        }
        $this->_data['sender'] = $sender;

        return $this;
    }

    /**
     * Get recipients
     *
     * @return string[]
     */
    public function getRecipients(): array {
        return $this->_data["recipients"];
    }

    /**
     * Set recipients
     * 
     * @param string[] $recipients Blockchain addresses to mint tokens to
     * @return $this
     */
    public function setRecipients(array $recipients) {
        $this->_data['recipients'] = $recipients;

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
     * @param string|null $contract_address Contract address of NFT token
     * @return $this
     */
    public function setContractAddress(?string $contract_address) {
        if (!is_null($contract_address) && (mb_strlen($contract_address) > 42)) {
            throw new IAE('EstimateFeeBatchMintNft.setContractAddress: $contract_address length must be <= 42');
        }
        if (!is_null($contract_address) && (mb_strlen($contract_address) < 43)) {
            throw new IAE('EstimateFeeBatchMintNft.setContractAddress: $contract_address length must be >= 43');
        }
        $this->_data['contract_address'] = $contract_address;

        return $this;
    }

    /**
     * Get token_ids
     *
     * @return string[]
     */
    public function getTokenIds(): array {
        return $this->_data["token_ids"];
    }

    /**
     * Set token_ids
     * 
     * @param string[] $token_ids Token IDs
     * @return $this
     */
    public function setTokenIds(array $token_ids) {
        $this->_data['token_ids'] = $token_ids;

        return $this;
    }

    /**
     * Get urls
     *
     * @return string[]
     */
    public function getUrls(): array {
        return $this->_data["urls"];
    }

    /**
     * Set urls
     * 
     * @param string[] $urls Metadata URLs
     * @return $this
     */
    public function setUrls(array $urls) {
        $this->_data['urls'] = $urls;

        return $this;
    }
}