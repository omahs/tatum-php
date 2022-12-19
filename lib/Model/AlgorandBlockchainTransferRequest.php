<?php

/**
 * AlgorandBlockchainTransfer_request Model
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
 * AlgorandBlockchainTransfer_request Model
 */
class AlgorandBlockchainTransferRequest extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "AlgorandBlockchainTransfer_request";
    protected static $_definition = [
        "from" => ["from", "string", null, "getFrom", "setFrom"], 
        "to" => ["to", "string", null, "getTo", "setTo"], 
        "fee" => ["fee", "string", null, "getFee", "setFee"], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount"], 
        "note" => ["note", "string", null, "getNote", "setNote"], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey"], 
        "index" => ["index", "float", null, "getIndex", "setIndex"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"]
    ];

    /**
     * AlgorandBlockchainTransferRequest
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["from"=>null, "to"=>null, "fee"=>null, "amount"=>null, "note"=>null, "from_private_key"=>null, "index"=>null, "signature_id"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['from'])) {
            $ip[] = "'from' can't be null";
        }
        if (is_null($this->_data['to'])) {
            $ip[] = "'to' can't be null";
        }
        if (is_null($this->_data['fee'])) {
            $ip[] = "'fee' can't be null";
        }
        if (is_null($this->_data['amount'])) {
            $ip[] = "'amount' can't be null";
        }
        if (is_null($this->_data['from_private_key'])) {
            $ip[] = "'from_private_key' can't be null";
        }
        if (!is_null($this->_data['index']) && ($this->_data['index'] < 0)) {
            $ip[] = "'index' must be >= 0";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get from
     *
     * @return string
     */
    public function getFrom(): string {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param string $from The blockchain address of the sender
     * @return $this
     */
    public function setFrom(string $from) {
        $this->_data['from'] = $from;

        return $this;
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
     * @param string $to The blockchain address of the recipient
     * @return $this
     */
    public function setTo(string $to) {
        $this->_data['to'] = $to;

        return $this;
    }

    /**
     * Get fee
     *
     * @return string
     */
    public function getFee(): string {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param string $fee The transaction fee in Algos
     * @return $this
     */
    public function setFee(string $fee) {
        $this->_data['fee'] = $fee;

        return $this;
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
     * @param string $amount The amount to send in Algos
     * @return $this
     */
    public function setAmount(string $amount) {
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get note
     *
     * @return string|null
     */
    public function getNote(): ?string {
        return $this->_data["note"];
    }

    /**
     * Set note
     * 
     * @param string|null $note The note for the recipient; must not contain spaces
     * @return $this
     */
    public function setNote(?string $note) {
        $this->_data['note'] = $note;

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
        $this->_data['from_private_key'] = $from_private_key;

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
            throw new IAE('AlgorandBlockchainTransferRequest.setIndex: $index must be >=0');
        }
        $this->_data['index'] = $index;

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
}