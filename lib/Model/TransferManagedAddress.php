<?php

/**
 * TransferManagedAddress Model
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
 * TransferManagedAddress Model
 */
class TransferManagedAddress extends AbstractModel {

    public const _D = null;
    public const CHAIN_SOL = 'SOL';
    protected static $_name = "TransferManagedAddress";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "tx_data" => ["txData", "string", null, "getTxData", "setTxData", null, ["r" => 1, "nl" => 1, "xl" => 500000]], 
        "wallet_ids" => ["walletIds", "\Tatum\Model\TransferManagedAddressWalletIdsInner[]", null, "getWalletIds", "setWalletIds", null, ["r" => 1, "c" => 1]]
    ];

    /**
     * TransferManagedAddress
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
            self::CHAIN_SOL,
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
     * @param string $chain Blockchain to work on
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(string $chain) {
        return $this->_set("chain", $chain);
    }

    /**
     * Get tx_data
     *
     * @return string
     */
    public function getTxData(): string {
        return $this->_data["tx_data"];
    }

    /**
     * Set tx_data
     * 
     * @param string $tx_data Hex serialized data representing transaction, which should be signed using one of the managed wallets.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxData(string $tx_data) {
        return $this->_set("tx_data", $tx_data);
    }

    /**
     * Get wallet_ids
     *
     * @return \Tatum\Model\TransferManagedAddressWalletIdsInner[]
     */
    public function getWalletIds(): array {
        return $this->_data["wallet_ids"];
    }

    /**
     * Set wallet_ids
     * 
     * @param \Tatum\Model\TransferManagedAddressWalletIdsInner[] $wallet_ids wallet_ids
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setWalletIds(array $wallet_ids) {
        return $this->_set("wallet_ids", $wallet_ids);
    }
}
