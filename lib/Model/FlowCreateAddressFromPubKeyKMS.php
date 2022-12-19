<?php

/**
 * FlowCreateAddressFromPubKeyKMS Model
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
 * FlowCreateAddressFromPubKeyKMS Model
 */
class FlowCreateAddressFromPubKeyKMS extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "FlowCreateAddressFromPubKeyKMS";
    protected static $_definition = [
        "account" => ["account", "string", null, "getAccount", "setAccount"], 
        "public_key" => ["publicKey", "string", null, "getPublicKey", "setPublicKey"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"], 
        "index" => ["index", "float", null, "getIndex", "setIndex"]
    ];

    /**
     * FlowCreateAddressFromPubKeyKMS
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["account"=>null, "public_key"=>null, "signature_id"=>null, "index"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['account'])) {
            $ip[] = "'account' can't be null";
        }
        if ((mb_strlen($this->_data['account']) > 18)) {
            $ip[] = "'account' length must be <= 18";
        }
        if ((mb_strlen($this->_data['account']) < 18)) {
            $ip[] = "'account' length must be >= 18";
        }
        if (is_null($this->_data['public_key'])) {
            $ip[] = "'public_key' can't be null";
        }
        if ((mb_strlen($this->_data['public_key']) > 128)) {
            $ip[] = "'public_key' length must be <= 128";
        }
        if ((mb_strlen($this->_data['public_key']) < 128)) {
            $ip[] = "'public_key' length must be >= 128";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        if (!is_null($this->_data['index']) && ($this->_data['index'] < 0)) {
            $ip[] = "'index' must be >= 0";
        }
        
        return $ip;
    }

    /**
     * Get account
     *
     * @return string
     */
    public function getAccount(): string {
        return $this->_data["account"];
    }

    /**
     * Set account
     * 
     * @param string $account Blockchain account to send from
     * @return $this
     */
    public function setAccount(string $account) {
        if ((mb_strlen($account) > 18)) {
            throw new IAE('FlowCreateAddressFromPubKeyKMS.setAccount: $account length must be <= 18');
        }
        if ((mb_strlen($account) < 18)) {
            throw new IAE('FlowCreateAddressFromPubKeyKMS.setAccount: $account length must be >= 18');
        }
        $this->_data['account'] = $account;

        return $this;
    }

    /**
     * Get public_key
     *
     * @return string
     */
    public function getPublicKey(): string {
        return $this->_data["public_key"];
    }

    /**
     * Set public_key
     * 
     * @param string $public_key Public key to be used
     * @return $this
     */
    public function setPublicKey(string $public_key) {
        if ((mb_strlen($public_key) > 128)) {
            throw new IAE('FlowCreateAddressFromPubKeyKMS.setPublicKey: $public_key length must be <= 128');
        }
        if ((mb_strlen($public_key) < 128)) {
            throw new IAE('FlowCreateAddressFromPubKeyKMS.setPublicKey: $public_key length must be >= 128');
        }
        $this->_data['public_key'] = $public_key;

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
     * @param string $signature_id Identifier of the secret associated in signing application. Secret, or signature Id must be present.
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

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
            throw new IAE('FlowCreateAddressFromPubKeyKMS.setIndex: $index must be >=0');
        }
        $this->_data['index'] = $index;

        return $this;
    }
}