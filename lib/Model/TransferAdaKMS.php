<?php

/**
 * TransferAdaKMS Model
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
 * TransferAdaKMS Model
 */
class TransferAdaKMS extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "TransferAdaKMS";
    protected static $_definition = [
        "address" => ["address", "string", null, "getAddress", "setAddress"], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount"], 
        "compliant" => ["compliant", "bool", null, "getCompliant", "setCompliant"], 
        "fee" => ["fee", "string", null, "getFee", "setFee"], 
        "from" => ["from", "string", null, "getFrom", "setFrom"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"], 
        "xpub" => ["xpub", "string", null, "getXpub", "setXpub"], 
        "attr" => ["attr", "string", null, "getAttr", "setAttr"], 
        "index" => ["index", "int", null, "getIndex", "setIndex"], 
        "payment_id" => ["paymentId", "string", null, "getPaymentId", "setPaymentId"], 
        "sender_account_id" => ["senderAccountId", "string", null, "getSenderAccountId", "setSenderAccountId"], 
        "sender_note" => ["senderNote", "string", null, "getSenderNote", "setSenderNote"]
    ];

    /**
     * TransferAdaKMS
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["address"=>null, "amount"=>null, "compliant"=>null, "fee"=>null, "from"=>null, "signature_id"=>null, "xpub"=>null, "attr"=>null, "index"=>null, "payment_id"=>null, "sender_account_id"=>null, "sender_note"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['address'])) {
            $ip[] = "'address' can't be null";
        }
        if ((mb_strlen($this->_data['address']) > 90)) {
            $ip[] = "'address' length must be <= 90";
        }
        if ((mb_strlen($this->_data['address']) < 110)) {
            $ip[] = "'address' length must be >= 110";
        }
        if (is_null($this->_data['amount'])) {
            $ip[] = "'amount' can't be null";
        }
        if ((mb_strlen($this->_data['amount']) > 38)) {
            $ip[] = "'amount' length must be <= 38";
        }
        if (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['amount'])) {
            $ip[] = "'amount' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (!is_null($this->_data['fee']) && !preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['fee'])) {
            $ip[] = "'fee' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (is_null($this->_data['from'])) {
            $ip[] = "'from' can't be null";
        }
        if ((mb_strlen($this->_data['from']) > 90)) {
            $ip[] = "'from' length must be <= 90";
        }
        if ((mb_strlen($this->_data['from']) < 110)) {
            $ip[] = "'from' length must be >= 110";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        if (!is_null($this->_data['xpub']) && (mb_strlen($this->_data['xpub']) > 192)) {
            $ip[] = "'xpub' length must be <= 192";
        }
        if (!is_null($this->_data['xpub']) && (mb_strlen($this->_data['xpub']) < 1)) {
            $ip[] = "'xpub' length must be >= 1";
        }
        if (!is_null($this->_data['attr']) && (mb_strlen($this->_data['attr']) > 256)) {
            $ip[] = "'attr' length must be <= 256";
        }
        if (!is_null($this->_data['attr']) && (mb_strlen($this->_data['attr']) < 1)) {
            $ip[] = "'attr' length must be >= 1";
        }
        if (!is_null($this->_data['index']) && ($this->_data['index'] > 2147483647)) {
            $ip[] = "'index' must be <= 2147483647";
        }
        if (!is_null($this->_data['payment_id']) && (mb_strlen($this->_data['payment_id']) > 100)) {
            $ip[] = "'payment_id' length must be <= 100";
        }
        if (!is_null($this->_data['payment_id']) && (mb_strlen($this->_data['payment_id']) < 1)) {
            $ip[] = "'payment_id' length must be >= 1";
        }
        if (is_null($this->_data['sender_account_id'])) {
            $ip[] = "'sender_account_id' can't be null";
        }
        if ((mb_strlen($this->_data['sender_account_id']) > 24)) {
            $ip[] = "'sender_account_id' length must be <= 24";
        }
        if ((mb_strlen($this->_data['sender_account_id']) < 24)) {
            $ip[] = "'sender_account_id' length must be >= 24";
        }
        if (!is_null($this->_data['sender_note']) && (mb_strlen($this->_data['sender_note']) > 500)) {
            $ip[] = "'sender_note' length must be <= 500";
        }
        if (!is_null($this->_data['sender_note']) && (mb_strlen($this->_data['sender_note']) < 1)) {
            $ip[] = "'sender_note' length must be >= 1";
        }
        
        return $ip;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress(): string {
        return $this->_data["address"];
    }

    /**
     * Set address
     * 
     * @param string $address Blockchain address to send assets to
     * @return $this
     */
    public function setAddress(string $address) {
        if ((mb_strlen($address) > 90)) {
            throw new IAE('TransferAdaKMS.setAddress: $address length must be <= 90');
        }
        if ((mb_strlen($address) < 110)) {
            throw new IAE('TransferAdaKMS.setAddress: $address length must be >= 110');
        }
        $this->_data['address'] = $address;

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
     * @param string $amount Amount to be sent in ADA.
     * @return $this
     */
    public function setAmount(string $amount) {
        if ((mb_strlen($amount) > 38)) {
            throw new IAE('TransferAdaKMS.setAmount: $amount length must be <= 38');
        }
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $amount))) {
            throw new IAE('TransferAdaKMS.setAmount: $amount must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($amount, true) . ' given');
        }
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get compliant
     *
     * @return bool|null
     */
    public function getCompliant(): ?bool {
        return $this->_data["compliant"];
    }

    /**
     * Set compliant
     * 
     * @param bool|null $compliant Compliance check, if withdrawal is not compliant, it will not be processed.
     * @return $this
     */
    public function setCompliant(?bool $compliant) {
        $this->_data['compliant'] = $compliant;

        return $this;
    }

    /**
     * Get fee
     *
     * @return string|null
     */
    public function getFee(): ?string {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param string|null $fee Fee to be submitted as a transaction fee to blockchain. If none is set, default value of 1 ADA is used.
     * @return $this
     */
    public function setFee(?string $fee) {
        if (!is_null($fee) && (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $fee))) {
            throw new IAE('TransferAdaKMS.setFee: $fee must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($fee, true) . ' given');
        }
        $this->_data['fee'] = $fee;

        return $this;
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
     * @param string $from Blockchain address to send assets from
     * @return $this
     */
    public function setFrom(string $from) {
        if ((mb_strlen($from) > 90)) {
            throw new IAE('TransferAdaKMS.setFrom: $from length must be <= 90');
        }
        if ((mb_strlen($from) < 110)) {
            throw new IAE('TransferAdaKMS.setFrom: $from length must be >= 110');
        }
        $this->_data['from'] = $from;

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
     * @param string $signature_id Identifier of the mnemonic / private key associated in signing application. When hash identifies mnemonic, index must be present to represent specific account to pay from. Private key, mnemonic or signature Id must be present.
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

        return $this;
    }

    /**
     * Get xpub
     *
     * @return string|null
     */
    public function getXpub(): ?string {
        return $this->_data["xpub"];
    }

    /**
     * Set xpub
     * 
     * @param string|null $xpub Extended public key (xpub) of the wallet associated with the accounts. XPub or attr must be used with signatureId.
     * @return $this
     */
    public function setXpub(?string $xpub) {
        if (!is_null($xpub) && (mb_strlen($xpub) > 192)) {
            throw new IAE('TransferAdaKMS.setXpub: $xpub length must be <= 192');
        }
        if (!is_null($xpub) && (mb_strlen($xpub) < 1)) {
            throw new IAE('TransferAdaKMS.setXpub: $xpub length must be >= 1');
        }
        $this->_data['xpub'] = $xpub;

        return $this;
    }

    /**
     * Get attr
     *
     * @return string|null
     */
    public function getAttr(): ?string {
        return $this->_data["attr"];
    }

    /**
     * Set attr
     * 
     * @param string|null $attr Used to parametrize withdrawal as a change address for left coins from transaction. XPub or attr must be used with signatureId.
     * @return $this
     */
    public function setAttr(?string $attr) {
        if (!is_null($attr) && (mb_strlen($attr) > 256)) {
            throw new IAE('TransferAdaKMS.setAttr: $attr length must be <= 256');
        }
        if (!is_null($attr) && (mb_strlen($attr) < 1)) {
            throw new IAE('TransferAdaKMS.setAttr: $attr length must be >= 1');
        }
        $this->_data['attr'] = $attr;

        return $this;
    }

    /**
     * Get index
     *
     * @return int|null
     */
    public function getIndex(): ?int {
        return $this->_data["index"];
    }

    /**
     * Set index
     * 
     * @param int|null $index Derivation index of sender address.
     * @return $this
     */
    public function setIndex(?int $index) {
        if (!is_null($index) && ($index > 2147483647)) {
            throw new IAE('TransferAdaKMS.setIndex: $index must be <=2147483647');
        }
        $this->_data['index'] = $index;

        return $this;
    }

    /**
     * Get payment_id
     *
     * @return string|null
     */
    public function getPaymentId(): ?string {
        return $this->_data["payment_id"];
    }

    /**
     * Set payment_id
     * 
     * @param string|null $payment_id Identifier of the payment, shown for created Transaction within Tatum sender account.
     * @return $this
     */
    public function setPaymentId(?string $payment_id) {
        if (!is_null($payment_id) && (mb_strlen($payment_id) > 100)) {
            throw new IAE('TransferAdaKMS.setPaymentId: $payment_id length must be <= 100');
        }
        if (!is_null($payment_id) && (mb_strlen($payment_id) < 1)) {
            throw new IAE('TransferAdaKMS.setPaymentId: $payment_id length must be >= 1');
        }
        $this->_data['payment_id'] = $payment_id;

        return $this;
    }

    /**
     * Get sender_account_id
     *
     * @return string
     */
    public function getSenderAccountId(): string {
        return $this->_data["sender_account_id"];
    }

    /**
     * Set sender_account_id
     * 
     * @param string $sender_account_id Sender account ID
     * @return $this
     */
    public function setSenderAccountId(string $sender_account_id) {
        if ((mb_strlen($sender_account_id) > 24)) {
            throw new IAE('TransferAdaKMS.setSenderAccountId: $sender_account_id length must be <= 24');
        }
        if ((mb_strlen($sender_account_id) < 24)) {
            throw new IAE('TransferAdaKMS.setSenderAccountId: $sender_account_id length must be >= 24');
        }
        $this->_data['sender_account_id'] = $sender_account_id;

        return $this;
    }

    /**
     * Get sender_note
     *
     * @return string|null
     */
    public function getSenderNote(): ?string {
        return $this->_data["sender_note"];
    }

    /**
     * Set sender_note
     * 
     * @param string|null $sender_note Note visible to owner of withdrawing account
     * @return $this
     */
    public function setSenderNote(?string $sender_note) {
        if (!is_null($sender_note) && (mb_strlen($sender_note) > 500)) {
            throw new IAE('TransferAdaKMS.setSenderNote: $sender_note length must be <= 500');
        }
        if (!is_null($sender_note) && (mb_strlen($sender_note) < 1)) {
            throw new IAE('TransferAdaKMS.setSenderNote: $sender_note length must be >= 1');
        }
        $this->_data['sender_note'] = $sender_note;

        return $this;
    }
}