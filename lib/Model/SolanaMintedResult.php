<?php

/**
 * SolanaMintedResult Model
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
 * SolanaMintedResult Model
 */
class SolanaMintedResult extends AbstractModel {

    public const _D = null;
    protected static $_name = "SolanaMintedResult";
    protected static $_definition = [
        "tx_id" => ["txId", "string", null, "getTxId", "setTxId", null, ["r" => 0]], 
        "nft_address" => ["nftAddress", "string", null, "getNftAddress", "setNftAddress", null, ["r" => 0]], 
        "nft_account_address" => ["nftAccountAddress", "string", null, "getNftAccountAddress", "setNftAccountAddress", null, ["r" => 0]]
    ];

    /**
     * SolanaMintedResult
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get tx_id
     *
     * @return string|null
     */
    public function getTxId(): ?string {
        return $this->_data["tx_id"];
    }

    /**
     * Set tx_id
     * 
     * @param string|null $tx_id The ID of the transaction
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxId(?string $tx_id) {
        return $this->_set("tx_id", $tx_id);
    }

    /**
     * Get nft_address
     *
     * @return string|null
     */
    public function getNftAddress(): ?string {
        return $this->_data["nft_address"];
    }

    /**
     * Set nft_address
     * 
     * @param string|null $nft_address The blockchain address of the minted NFT
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNftAddress(?string $nft_address) {
        return $this->_set("nft_address", $nft_address);
    }

    /**
     * Get nft_account_address
     *
     * @return string|null
     */
    public function getNftAccountAddress(): ?string {
        return $this->_data["nft_account_address"];
    }

    /**
     * Set nft_account_address
     * 
     * @param string|null $nft_account_address The blockchain address that received the minted NFT; this address was created under the recipient's account address (the one in the <code>to</code> parameter of the request body), is owned by the recipient's address, and has the same private key
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNftAccountAddress(?string $nft_account_address) {
        return $this->_set("nft_account_address", $nft_account_address);
    }
}
