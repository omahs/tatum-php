<?php

/**
 * MintNftCelo Model
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
 * MintNftCelo Model
 * 
 * @description <p>The <code>MintNftCelo</code> schema lets you mint NFTs natively on Celo and sign the transaction with your private key.<br/>For more information, see \"Minting NFTs natively on a blockchain\" in <a href=\"#operation/NftMintErc721\">Mint an NFT</a>.</p><br/>
 */
class MintNftCelo extends AbstractModel {

    public const _D = null;
    public const CHAIN_CELO = 'CELO';
    public const FEE_CURRENCY_CELO = 'CELO';
    public const FEE_CURRENCY_CUSD = 'CUSD';
    public const FEE_CURRENCY_CEUR = 'CEUR';
    protected static $_name = "MintNftCelo";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "to" => ["to", "string", null, "getTo", "setTo", null, ["r" => 1, "nl" => 42, "xl" => 42]], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null, ["r" => 1, "nl" => 42, "xl" => 42]], 
        "token_id" => ["tokenId", "string", 'uint256', "getTokenId", "setTokenId", null, ["r" => 1, "xl" => 78]], 
        "url" => ["url", "string", null, "getUrl", "setUrl", null, ["r" => 1, "xl" => 256]], 
        "fee_currency" => ["feeCurrency", "string", null, "getFeeCurrency", "setFeeCurrency", null, ["r" => 1, "e" => 1]], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey", null, ["r" => 1, "nl" => 66, "xl" => 66]], 
        "erc20" => ["erc20", "string", null, "getErc20", "setErc20", null, ["r" => 0, "nl" => 42, "xl" => 42]], 
        "provenance" => ["provenance", "bool", null, "getProvenance", "setProvenance", null, ["r" => 0]], 
        "author_addresses" => ["authorAddresses", "string[]", null, "getAuthorAddresses", "setAuthorAddresses", null, ["r" => 0, "c" => 1]], 
        "cashback_values" => ["cashbackValues", "string[]", null, "getCashbackValues", "setCashbackValues", null, ["r" => 0, "c" => 1]], 
        "fixed_values" => ["fixedValues", "string[]", null, "getFixedValues", "setFixedValues", null, ["r" => 0, "c" => 1]], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce", null, ["r" => 0, "n" => [0]]]
    ];

    /**
     * MintNftCelo
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
     * @param string $chain The blockchain to work with
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(string $chain) {
        return $this->_set("chain", $chain);
    }

    /**
     * Get to
     *
     * @return string
     */
    public function getTo(): string {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param string $to The blockchain address to send the NFT to
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTo(string $to) {
        return $this->_set("to", $to);
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
     * @param string $contract_address The blockchain address of the smart contract to build the NFT on
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        return $this->_set("contract_address", $contract_address);
    }

    /**
     * Get token_id
     *
     * @return string
     */
    public function getTokenId(): string {
        return $this->_data["token_id"];
    }

    /**
     * Set token_id
     * 
     * @param string $token_id The ID of the NFT
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTokenId(string $token_id) {
        return $this->_set("token_id", $token_id);
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl(): string {
        return $this->_data["url"];
    }

    /**
     * Set url
     * 
     * @param string $url The URL pointing to the NFT metadata; for more information, see <a href=\"https://eips.ethereum.org/EIPS/eip-721#specification\" target=\"_blank\">EIP-721</a>
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUrl(string $url) {
        return $this->_set("url", $url);
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
     * @param string $fee_currency The currency in which the transaction fee will be paid
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeeCurrency(string $fee_currency) {
        return $this->_set("fee_currency", $fee_currency);
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
     * @param string $from_private_key The private key of the blockchain address that will pay the fee for the transaction
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        return $this->_set("from_private_key", $from_private_key);
    }

    /**
     * Get erc20
     *
     * @return string|null
     */
    public function getErc20(): ?string {
        return $this->_data["erc20"];
    }

    /**
     * Set erc20
     * 
     * @param string|null $erc20 The blockchain address of the custom fungible token
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setErc20(?string $erc20) {
        return $this->_set("erc20", $erc20);
    }

    /**
     * Get provenance
     *
     * @return bool|null
     */
    public function getProvenance(): ?bool {
        return $this->_data["provenance"];
    }

    /**
     * Set provenance
     * 
     * @param bool|null $provenance Set to \"true\" if the NFT smart contract is of the <a href=\"#operation/NftDeployErc721\">provenance type</a>; otherwise, set to \"false\".
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setProvenance(?bool $provenance) {
        return $this->_set("provenance", $provenance);
    }

    /**
     * Get author_addresses
     *
     * @return string[]|null
     */
    public function getAuthorAddresses(): ?array {
        return $this->_data["author_addresses"];
    }

    /**
     * Set author_addresses
     * 
     * @param string[]|null $author_addresses The blockchain addresses where the royalties will be sent every time the minted NFT is transferred; the royalties are paid in the native blockchain currency, CELO
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAuthorAddresses(?array $author_addresses) {
        return $this->_set("author_addresses", $author_addresses);
    }

    /**
     * Get cashback_values
     *
     * @return string[]|null
     */
    public function getCashbackValues(): ?array {
        return $this->_data["cashback_values"];
    }

    /**
     * Set cashback_values
     * 
     * @param string[]|null $cashback_values The amounts of the royalties that will be paid to the authors of the minted NFT every time the NFT is transferred; the amount is defined as a fixed amount of the native blockchain currency for <a href=\"#operation/NftDeployErc721\">cashback smart contracts</a> or as a percentage of the NFT price for <a href=\"#operation/NftDeployErc721\">provenance smart contracts</a>
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCashbackValues(?array $cashback_values) {
        return $this->_set("cashback_values", $cashback_values);
    }

    /**
     * Get fixed_values
     *
     * @return string[]|null
     */
    public function getFixedValues(): ?array {
        return $this->_data["fixed_values"];
    }

    /**
     * Set fixed_values
     * 
     * @param string[]|null $fixed_values The fixed amounts of the native blockchain currency to which the cashback royalty amounts will be compared to; if the fixed amount specified in this parameter is greater than the amount of the cashback royalties, this fixed amount will be sent to the NFT authors instead of the cashback royalties
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFixedValues(?array $fixed_values) {
        return $this->_set("fixed_values", $fixed_values);
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
