<?php

/**
 * UpdateFeeRecipientSolanaKMS Model
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
 * UpdateFeeRecipientSolanaKMS Model
 */
class UpdateFeeRecipientSolanaKMS extends AbstractModel {

    public const _D = null;
    public const CHAIN_SOL = 'SOL';
    protected static $_name = "UpdateFeeRecipientSolanaKMS";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null, ["r" => 1, "nl" => 44, "xl" => 44]], 
        "treasury_withdrawal_destination" => ["treasuryWithdrawalDestination", "string", null, "getTreasuryWithdrawalDestination", "setTreasuryWithdrawalDestination", null, ["r" => 1, "nl" => 44, "xl" => 44]], 
        "from" => ["from", "string", null, "getFrom", "setFrom", null, ["r" => 1, "nl" => 44, "xl" => 44]], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null, ["r" => 1]]
    ];

    /**
     * UpdateFeeRecipientSolanaKMS
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
     * @param string $chain Blockchain to work with.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(string $chain) {
        return $this->_set("chain", $chain);
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
     * @param string $contract_address Blockchain address of the smart contract
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        return $this->_set("contract_address", $contract_address);
    }

    /**
     * Get treasury_withdrawal_destination
     *
     * @return string
     */
    public function getTreasuryWithdrawalDestination(): string {
        return $this->_data["treasury_withdrawal_destination"];
    }

    /**
     * Set treasury_withdrawal_destination
     * 
     * @param string $treasury_withdrawal_destination The blockchain address of the new marketplace fee recipient
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTreasuryWithdrawalDestination(string $treasury_withdrawal_destination) {
        return $this->_set("treasury_withdrawal_destination", $treasury_withdrawal_destination);
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
     * @param string $from The blockchain address of the marketplace authority
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFrom(string $from) {
        return $this->_set("from", $from);
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
     * @param string $signature_id The KMS identifier of the private key of the marketspace authority
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        return $this->_set("signature_id", $signature_id);
    }
}
