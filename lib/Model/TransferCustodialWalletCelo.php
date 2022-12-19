<?php

/**
 * TransferCustodialWalletCelo Model
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
 * TransferCustodialWalletCelo Model
 */
class TransferCustodialWalletCelo extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_CELO = 'CELO';
    public const CONTRACT_TYPE_0 = 0;
    public const CONTRACT_TYPE_1 = 1;
    public const CONTRACT_TYPE_2 = 2;
    public const CONTRACT_TYPE_3 = 3;
    public const FEE_CURRENCY_CELO = 'CELO';
    public const FEE_CURRENCY_CUSD = 'CUSD';
    public const FEE_CURRENCY_CEUR = 'CEUR';
    protected static $_name = "TransferCustodialWalletCelo";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "custodial_address" => ["custodialAddress", "string", null, "getCustodialAddress", "setCustodialAddress"], 
        "recipient" => ["recipient", "string", null, "getRecipient", "setRecipient"], 
        "contract_type" => ["contractType", "float", null, "getContractType", "setContractType"], 
        "token_address" => ["tokenAddress", "string", null, "getTokenAddress", "setTokenAddress"], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount"], 
        "token_id" => ["tokenId", "string", null, "getTokenId", "setTokenId"], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey"], 
        "fee_currency" => ["feeCurrency", "string", null, "getFeeCurrency", "setFeeCurrency"], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce"], 
        "fee" => ["fee", "\Tatum\Model\ApproveTransferCustodialWalletFee", null, "getFee", "setFee"]
    ];

    /**
     * TransferCustodialWalletCelo
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["chain"=>null, "custodial_address"=>null, "recipient"=>null, "contract_type"=>null, "token_address"=>null, "amount"=>null, "token_id"=>null, "from_private_key"=>null, "fee_currency"=>null, "nonce"=>null, "fee"=>null] as $k => $v) {
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
        if (is_null($this->_data['custodial_address'])) {
            $ip[] = "'custodial_address' can't be null";
        }
        if ((mb_strlen($this->_data['custodial_address']) > 42)) {
            $ip[] = "'custodial_address' length must be <= 42";
        }
        if ((mb_strlen($this->_data['custodial_address']) < 42)) {
            $ip[] = "'custodial_address' length must be >= 42";
        }
        if (is_null($this->_data['recipient'])) {
            $ip[] = "'recipient' can't be null";
        }
        if ((mb_strlen($this->_data['recipient']) > 42)) {
            $ip[] = "'recipient' length must be <= 42";
        }
        if ((mb_strlen($this->_data['recipient']) < 42)) {
            $ip[] = "'recipient' length must be >= 42";
        }
        if (is_null($this->_data['contract_type'])) {
            $ip[] = "'contract_type' can't be null";
        }
        $allowed = $this->getContractTypeAllowableValues();
        $value = $this->_data['contract_type'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'contract_type' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (!is_null($this->_data['token_address']) && (mb_strlen($this->_data['token_address']) > 42)) {
            $ip[] = "'token_address' length must be <= 42";
        }
        if (!is_null($this->_data['token_address']) && (mb_strlen($this->_data['token_address']) < 42)) {
            $ip[] = "'token_address' length must be >= 42";
        }
        if (!is_null($this->_data['amount']) && !preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['amount'])) {
            $ip[] = "'amount' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (!is_null($this->_data['token_id']) && (mb_strlen($this->_data['token_id']) > 256)) {
            $ip[] = "'token_id' length must be <= 256";
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
        if (is_null($this->_data['fee_currency'])) {
            $ip[] = "'fee_currency' can't be null";
        }
        $allowed = $this->getFeeCurrencyAllowableValues();
        $value = $this->_data['fee_currency'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'fee_currency' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
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
    public function getContractTypeAllowableValues(): array {
        return [
            self::CONTRACT_TYPE_0,
            self::CONTRACT_TYPE_1,
            self::CONTRACT_TYPE_2,
            self::CONTRACT_TYPE_3,
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
     * @param string $chain The blockchain to work with
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("TransferCustodialWalletCelo.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get custodial_address
     *
     * @return string
     */
    public function getCustodialAddress(): string {
        return $this->_data["custodial_address"];
    }

    /**
     * Set custodial_address
     * 
     * @param string $custodial_address The gas pump address that transfers the asset; this is the address that you <a href=\"#operation/PrecalculateGasPumpAddresses\">precalculated</a> and <a href=\"#operation/ActivateGasPumpAddresses\">activated</a> earlier and that is assigned to a customer in your custodial application; this is not the \"master address\"
     * @return $this
     */
    public function setCustodialAddress(string $custodial_address) {
        if ((mb_strlen($custodial_address) > 42)) {
            throw new IAE('TransferCustodialWalletCelo.setCustodialAddress: $custodial_address length must be <= 42');
        }
        if ((mb_strlen($custodial_address) < 42)) {
            throw new IAE('TransferCustodialWalletCelo.setCustodialAddress: $custodial_address length must be >= 42');
        }
        $this->_data['custodial_address'] = $custodial_address;

        return $this;
    }

    /**
     * Get recipient
     *
     * @return string
     */
    public function getRecipient(): string {
        return $this->_data["recipient"];
    }

    /**
     * Set recipient
     * 
     * @param string $recipient The blockchain address that receives the asset
     * @return $this
     */
    public function setRecipient(string $recipient) {
        if ((mb_strlen($recipient) > 42)) {
            throw new IAE('TransferCustodialWalletCelo.setRecipient: $recipient length must be <= 42');
        }
        if ((mb_strlen($recipient) < 42)) {
            throw new IAE('TransferCustodialWalletCelo.setRecipient: $recipient length must be >= 42');
        }
        $this->_data['recipient'] = $recipient;

        return $this;
    }

    /**
     * Get contract_type
     *
     * @return float
     */
    public function getContractType(): float {
        return $this->_data["contract_type"];
    }

    /**
     * Set contract_type
     * 
     * @param float $contract_type The type of the asset to transfer. Set <code>0</code> for fungible tokens (ERC-20 or equivalent), <code>1</code> for NFTs (ERC-721 or equivalent), <code>2</code> for Multi Tokens (ERC-1155 or equivalent), or <code>3</code> for native blockchain currencies.
     * @return $this
     */
    public function setContractType(float $contract_type) {
        $allowed = $this->getContractTypeAllowableValues();
        if (!in_array($contract_type, $allowed, true)) {
            throw new IAE(sprintf("TransferCustodialWalletCelo.setContractType: contract_type invalid value '%s', must be one of '%s'", $contract_type, implode("', '", $allowed)));
        }
        $this->_data['contract_type'] = $contract_type;

        return $this;
    }

    /**
     * Get token_address
     *
     * @return string|null
     */
    public function getTokenAddress(): ?string {
        return $this->_data["token_address"];
    }

    /**
     * Set token_address
     * 
     * @param string|null $token_address (Only if the asset is a fungible token, NFT, or Multi Token) The address of the token to transfer. Do not use if the asset is a native blockchain currency.
     * @return $this
     */
    public function setTokenAddress(?string $token_address) {
        if (!is_null($token_address) && (mb_strlen($token_address) > 42)) {
            throw new IAE('TransferCustodialWalletCelo.setTokenAddress: $token_address length must be <= 42');
        }
        if (!is_null($token_address) && (mb_strlen($token_address) < 42)) {
            throw new IAE('TransferCustodialWalletCelo.setTokenAddress: $token_address length must be >= 42');
        }
        $this->_data['token_address'] = $token_address;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string|null
     */
    public function getAmount(): ?string {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param string|null $amount (Only if the asset is a fungible token, Multi Token, or native blockchain currency) The amount of the asset to transfer. Do not use if the asset is an NFT.
     * @return $this
     */
    public function setAmount(?string $amount) {
        if (!is_null($amount) && (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $amount))) {
            throw new IAE('TransferCustodialWalletCelo.setAmount: $amount must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($amount, true) . ' given');
        }
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get token_id
     *
     * @return string|null
     */
    public function getTokenId(): ?string {
        return $this->_data["token_id"];
    }

    /**
     * Set token_id
     * 
     * @param string|null $token_id (Only if the asset is a Multi Token or NFT) The ID of the token to transfer. Do not use if the asset is a fungible token or native blockchain currency.
     * @return $this
     */
    public function setTokenId(?string $token_id) {
        if (!is_null($token_id) && (mb_strlen($token_id) > 256)) {
            throw new IAE('TransferCustodialWalletCelo.setTokenId: $token_id length must be <= 256');
        }
        $this->_data['token_id'] = $token_id;

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
     * @param string $from_private_key The private key of the blockchain address that owns the gas pump address (\"master address\")
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        if ((mb_strlen($from_private_key) > 66)) {
            throw new IAE('TransferCustodialWalletCelo.setFromPrivateKey: $from_private_key length must be <= 66');
        }
        if ((mb_strlen($from_private_key) < 66)) {
            throw new IAE('TransferCustodialWalletCelo.setFromPrivateKey: $from_private_key length must be >= 66');
        }
        $this->_data['from_private_key'] = $from_private_key;

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
     * @param string $fee_currency The currency to pay for the gas fee
     * @return $this
     */
    public function setFeeCurrency(string $fee_currency) {
        $allowed = $this->getFeeCurrencyAllowableValues();
        if (!in_array($fee_currency, $allowed, true)) {
            throw new IAE(sprintf("TransferCustodialWalletCelo.setFeeCurrency: fee_currency invalid value '%s', must be one of '%s'", $fee_currency, implode("', '", $allowed)));
        }
        $this->_data['fee_currency'] = $fee_currency;

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
     * @param float|null $nonce The nonce to be set to the transfer transaction; if not present, the last known nonce will be used
     * @return $this
     */
    public function setNonce(?float $nonce) {
        $this->_data['nonce'] = $nonce;

        return $this;
    }

    /**
     * Get fee
     *
     * @return \Tatum\Model\ApproveTransferCustodialWalletFee|null
     */
    public function getFee(): ?\Tatum\Model\ApproveTransferCustodialWalletFee {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param \Tatum\Model\ApproveTransferCustodialWalletFee|null $fee fee
     * @return $this
     */
    public function setFee(?\Tatum\Model\ApproveTransferCustodialWalletFee $fee) {
        $this->_data['fee'] = $fee;

        return $this;
    }
}