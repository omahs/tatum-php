<?php

/**
 * AccountSettingsXrpBlockchainKMS Model
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
 * AccountSettingsXrpBlockchainKMS Model
 */
class AccountSettingsXrpBlockchainKMS extends AbstractModel {

    public const _D = null;
    protected static $_name = "AccountSettingsXrpBlockchainKMS";
    protected static $_definition = [
        "from_account" => ["fromAccount", "string", null, "getFromAccount", "setFromAccount", null, ["r" => 1, "nl" => 33, "xl" => 34]], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null, ["r" => 1]], 
        "fee" => ["fee", "string", null, "getFee", "setFee", null, ["r" => 0, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/"]], 
        "rippling" => ["rippling", "bool", null, "getRippling", "setRippling", null, ["r" => 0]], 
        "require_destination_tag" => ["requireDestinationTag", "bool", null, "getRequireDestinationTag", "setRequireDestinationTag", null, ["r" => 0]]
    ];

    /**
     * AccountSettingsXrpBlockchainKMS
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get from_account
     *
     * @return string
     */
    public function getFromAccount(): string {
        return $this->_data["from_account"];
    }

    /**
     * Set from_account
     * 
     * @param string $from_account XRP account address. Must be the one used for generating deposit tags.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromAccount(string $from_account) {
        return $this->_set("from_account", $from_account);
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
     * @param string $signature_id Identifier of the private key associated in signing application. Secret or signature Id must be present.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        return $this->_set("signature_id", $signature_id);
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
     * @param string|null $fee Fee to be paid, in XRP. If omitted, current fee will be calculated.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFee(?string $fee) {
        return $this->_set("fee", $fee);
    }

    /**
     * Get rippling
     *
     * @return bool|null
     */
    public function getRippling(): ?bool {
        return $this->_data["rippling"];
    }

    /**
     * Set rippling
     * 
     * @param bool|null $rippling Should be true, if an account is the issuer of assets.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRippling(?bool $rippling) {
        return $this->_set("rippling", $rippling);
    }

    /**
     * Get require_destination_tag
     *
     * @return bool|null
     */
    public function getRequireDestinationTag(): ?bool {
        return $this->_data["require_destination_tag"];
    }

    /**
     * Set require_destination_tag
     * 
     * @param bool|null $require_destination_tag Should be true, if an account should support off-chain processing.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRequireDestinationTag(?bool $require_destination_tag) {
        return $this->_set("require_destination_tag", $require_destination_tag);
    }
}
