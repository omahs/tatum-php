<?php

/**
 * TransferBscBlockchain Model
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
 * TransferBscBlockchain Model
 */
class TransferBscBlockchain extends AbstractModel {

    public const _D = null;
    public const CURRENCY_BSC = 'BSC';
    public const CURRENCY_BETH = 'BETH';
    public const CURRENCY_BBTC = 'BBTC';
    public const CURRENCY_RMD = 'RMD';
    public const CURRENCY_USDC_BSC = 'USDC_BSC';
    public const CURRENCY_B2_U_BSC = 'B2U_BSC';
    public const CURRENCY_BADA = 'BADA';
    public const CURRENCY_WBNB = 'WBNB';
    public const CURRENCY_GMC_BSC = 'GMC_BSC';
    public const CURRENCY_BDOT = 'BDOT';
    public const CURRENCY_BXRP = 'BXRP';
    public const CURRENCY_BLTC = 'BLTC';
    public const CURRENCY_BBCH = 'BBCH';
    public const CURRENCY_HAG = 'HAG';
    public const CURRENCY_CAKE = 'CAKE';
    public const CURRENCY_BUSD_BSC = 'BUSD_BSC';
    protected static $_name = "TransferBscBlockchain";
    protected static $_definition = [
        "data" => ["data", "string", null, "getData", "setData", null, ["r" => 0, "xl" => 50000]], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce", null, ["r" => 0, "n" => [0]]], 
        "to" => ["to", "string", null, "getTo", "setTo", null, ["r" => 1, "nl" => 42, "xl" => 42]], 
        "currency" => ["currency", "string", null, "getCurrency", "setCurrency", null, ["r" => 1, "e" => 1]], 
        "fee" => ["fee", "\Tatum\Model\CustomFee", null, "getFee", "setFee", null, ["r" => 0]], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null, ["r" => 1, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/"]], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey", null, ["r" => 1, "nl" => 66, "xl" => 66]]
    ];

    /**
     * TransferBscBlockchain
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
    public function getCurrencyAllowableValues(): array {
        return [
            self::CURRENCY_BSC,
            self::CURRENCY_BETH,
            self::CURRENCY_BBTC,
            self::CURRENCY_RMD,
            self::CURRENCY_USDC_BSC,
            self::CURRENCY_B2_U_BSC,
            self::CURRENCY_BADA,
            self::CURRENCY_WBNB,
            self::CURRENCY_GMC_BSC,
            self::CURRENCY_BDOT,
            self::CURRENCY_BXRP,
            self::CURRENCY_BLTC,
            self::CURRENCY_BBCH,
            self::CURRENCY_HAG,
            self::CURRENCY_CAKE,
            self::CURRENCY_BUSD_BSC,
        ];
    }

    /**
     * Get data
     *
     * @return string|null
     */
    public function getData(): ?string {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param string|null $data (Only for BSC transactions) Additional data that can be passed to a blockchain transaction as a data property; must be in the hexadecimal format
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setData(?string $data) {
        return $this->_set("data", $data);
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
     * @param float|null $nonce Nonce to be set to BSC transaction. If not present, last known nonce will be used.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNonce(?float $nonce) {
        return $this->_set("nonce", $nonce);
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
     * @param string $to Blockchain address to send assets
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTo(string $to) {
        return $this->_set("to", $to);
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency(): string {
        return $this->_data["currency"];
    }

    /**
     * Set currency
     * 
     * @param string $currency Currency to transfer from BSC Blockchain Account. BEP20 tokens BETH, BBTC, BADA, WBNB, BDOT, BXRP, BLTC, BBCH are available only for mainnet use.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCurrency(string $currency) {
        return $this->_set("currency", $currency);
    }

    /**
     * Get fee
     *
     * @return \Tatum\Model\CustomFee|null
     */
    public function getFee(): ?\Tatum\Model\CustomFee {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param \Tatum\Model\CustomFee|null $fee fee
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFee(?\Tatum\Model\CustomFee $fee) {
        return $this->_set("fee", $fee);
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount(): string {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param string $amount Amount to be sent.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(string $amount) {
        return $this->_set("amount", $amount);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        return $this->_set("from_private_key", $from_private_key);
    }
}
