<?php

/**
 * TransferManagedAddress_walletIds_inner Model
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
 * TransferManagedAddress_walletIds_inner Model
 */
class TransferManagedAddressWalletIdsInner extends AbstractModel {

    public const _D = null;
    public const TYPE_MANAGED = 'MANAGED';
    public const TYPE_RAW = 'RAW';
    protected static $_name = "TransferManagedAddress_walletIds_inner";
    protected static $_definition = [
        "key" => ["key", "string", null, "getKey", "setKey", null, ["r" => 1]], 
        "type" => ["type", "string", null, "getType", "setType", null, ["r" => 1, "e" => 1]]
    ];

    /**
     * TransferManagedAddressWalletIdsInner
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
    public function getTypeAllowableValues(): array {
        return [
            self::TYPE_MANAGED,
            self::TYPE_RAW,
        ];
    }

    /**
     * Get key
     *
     * @return string
     */
    public function getKey(): string {
        return $this->_data["key"];
    }

    /**
     * Set key
     * 
     * @param string $key Wallet ID of wallet, which should be used for signing. In case of RAW type of the wallet, this represents the private key which will be used for signatures.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setKey(string $key) {
        return $this->_set("key", $key);
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
     * @param string $type Type of the wallet to be used - RAW represents native private key, MANAGED represents ID of the managed wallet.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setType(string $type) {
        return $this->_set("type", $type);
    }
}
