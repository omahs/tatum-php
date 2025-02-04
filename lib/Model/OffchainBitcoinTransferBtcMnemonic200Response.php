<?php

/**
 * offchainBitcoinTransferBtcMnemonic_200_response Model
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
 * offchainBitcoinTransferBtcMnemonic_200_response Model
 */
class OffchainBitcoinTransferBtcMnemonic200Response extends AbstractModel {

    public const _D = null;
    protected static $_name = "offchainBitcoinTransferBtcMnemonic_200_response";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 1]], 
        "tx_id" => ["txId", "string", null, "getTxId", "setTxId", null, ["r" => 1]], 
        "completed" => ["completed", "bool", null, "getCompleted", "setCompleted", null, ["r" => 1]], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null, ["r" => 1]]
    ];

    /**
     * OffchainBitcoinTransferBtcMnemonic200Response
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
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
     * @param string $id ID of withdrawal. If transaction is not valid in blockchain, use this id to cancel withdrawal.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId(string $id) {
        return $this->_set("id", $id);
    }

    /**
     * Get tx_id
     *
     * @return string
     */
    public function getTxId(): string {
        return $this->_data["tx_id"];
    }

    /**
     * Set tx_id
     * 
     * @param string $tx_id TX hash of successful transaction.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxId(string $tx_id) {
        return $this->_set("tx_id", $tx_id);
    }

    /**
     * Get completed
     *
     * @return bool
     */
    public function getCompleted(): bool {
        return $this->_data["completed"];
    }

    /**
     * Set completed
     * 
     * @param bool $completed If set to \"true\", the withdrawal has been completed in the virtual account; if set to \"false\", the withdrawal has not been completed and you have to <a href=\"https://apidoc.tatum.io/tag/Withdrawal#operation/completeWithdrawal\" target=\"_blank\">complete it manually</a>
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCompleted(bool $completed) {
        return $this->_set("completed", $completed);
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
     * @param string $signature_id ID of prepared payment template to sign. This is should be stored on a client side to retrieve ID of the blockchain transaction, when signing application signs the transaction and broadcasts it to the blockchain.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        return $this->_set("signature_id", $signature_id);
    }
}
