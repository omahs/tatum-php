<?php

/**
 * DeployMultiToken_request Model
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
 * DeployMultiToken_request Model
 */
class DeployMultiTokenRequest extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_CELO = 'CELO';
    public const FEE_CURRENCY_CELO = 'CELO';
    public const FEE_CURRENCY_CUSD = 'CUSD';
    public const FEE_CURRENCY_CEUR = 'CEUR';
    protected static $_name = "DeployMultiToken_request";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "uri" => ["uri", "string", null, "getUri", "setUri"], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey"], 
        "public_mint" => ["publicMint", "bool", null, "getPublicMint", "setPublicMint"], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce"], 
        "fee" => ["fee", "\Tatum\Model\DeployErc20Fee", null, "getFee", "setFee"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"], 
        "fee_currency" => ["feeCurrency", "string", null, "getFeeCurrency", "setFeeCurrency"], 
        "index" => ["index", "float", null, "getIndex", "setIndex"]
    ];

    /**
     * DeployMultiTokenRequest
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["chain"=>null, "uri"=>null, "from_private_key"=>null, "public_mint"=>null, "nonce"=>null, "fee"=>null, "signature_id"=>null, "fee_currency"=>null, "index"=>null] as $k => $v) {
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
        if (is_null($this->_data['uri'])) {
            $ip[] = "'uri' can't be null";
        }
        if ((mb_strlen($this->_data['uri']) > 100)) {
            $ip[] = "'uri' length must be <= 100";
        }
        if ((mb_strlen($this->_data['uri']) < 1)) {
            $ip[] = "'uri' length must be >= 1";
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
        if (!is_null($this->_data['nonce']) && ($this->_data['nonce'] < 0)) {
            $ip[] = "'nonce' must be >= 0";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        if (is_null($this->_data['fee_currency'])) {
            $ip[] = "'fee_currency' can't be null";
        }
        $allowed = $this->getFeeCurrencyAllowableValues();
        $value = $this->_data['fee_currency'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'fee_currency' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
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
            self::CHAIN_CELO,
        ];
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getFeeCurrencyAllowableValues(): array {
        return [
            self::FEE_CURRENCY_CELO,
            self::FEE_CURRENCY_CUSD,
            self::FEE_CURRENCY_CEUR,
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
     * @param string $chain Chain to work with.
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("DeployMultiTokenRequest.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get uri
     *
     * @return string
     */
    public function getUri(): string {
        return $this->_data["uri"];
    }

    /**
     * Set uri
     * 
     * @param string $uri URI of the Multi Token contract
     * @return $this
     */
    public function setUri(string $uri) {
        if ((mb_strlen($uri) > 100)) {
            throw new IAE('DeployMultiTokenRequest.setUri: $uri length must be <= 100');
        }
        if ((mb_strlen($uri) < 1)) {
            throw new IAE('DeployMultiTokenRequest.setUri: $uri length must be >= 1');
        }
        $this->_data['uri'] = $uri;

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
     * @param string $from_private_key Private key of account address, from which gas for deployment of ERC1155 will be paid. Private key, or signature Id must be present.
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        if ((mb_strlen($from_private_key) > 66)) {
            throw new IAE('DeployMultiTokenRequest.setFromPrivateKey: $from_private_key length must be <= 66');
        }
        if ((mb_strlen($from_private_key) < 66)) {
            throw new IAE('DeployMultiTokenRequest.setFromPrivateKey: $from_private_key length must be >= 66');
        }
        $this->_data['from_private_key'] = $from_private_key;

        return $this;
    }

    /**
     * Get public_mint
     *
     * @return bool|null
     */
    public function getPublicMint(): ?bool {
        return $this->_data["public_mint"];
    }

    /**
     * Set public_mint
     * 
     * @param bool|null $public_mint True if the contract is publicMint type
     * @return $this
     */
    public function setPublicMint(?bool $public_mint) {
        $this->_data['public_mint'] = $public_mint;

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
     * @param float|null $nonce nonce
     * @return $this
     */
    public function setNonce(?float $nonce) {
        if (!is_null($nonce) && ($nonce < 0)) {
            throw new IAE('DeployMultiTokenRequest.setNonce: $nonce must be >=0');
        }
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
     * Get fee_currency
     *
     * @return string
     */
    public function getFeeCurrency(): string {
        return $this->_data["fee_currency"];
    }

    /**
     * Set fee_currency
     * 
     * @param string $fee_currency Currency to pay for transaction gas
     * @return $this
     */
    public function setFeeCurrency(string $fee_currency) {
        $allowed = $this->getFeeCurrencyAllowableValues();
        if (!in_array($fee_currency, $allowed, true)) {
            throw new IAE(sprintf("DeployMultiTokenRequest.setFeeCurrency: fee_currency invalid value '%s', must be one of '%s'", $fee_currency, implode("', '", $allowed)));
        }
        $this->_data['fee_currency'] = $fee_currency;

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
            throw new IAE('DeployMultiTokenRequest.setIndex: $index must be >=0');
        }
        $this->_data['index'] = $index;

        return $this;
    }
}