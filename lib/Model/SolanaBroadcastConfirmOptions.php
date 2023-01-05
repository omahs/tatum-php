<?php

/**
 * SolanaBroadcastConfirmOptions Model
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
 * SolanaBroadcastConfirmOptions Model
 * 
 * @description Options for sending and waiting for a transaction
 */
class SolanaBroadcastConfirmOptions extends AbstractModel {

    public const _D = null;
    public const COMMITMENT_CONFIRMED = 'confirmed';
    public const COMMITMENT_FINALIZED = 'finalized';
    public const PREFLIGHT_COMMITMENT_CONFIRMED = 'confirmed';
    public const PREFLIGHT_COMMITMENT_FINALIZED = 'finalized';
    public const PREFLIGHT_COMMITMENT_PROCESSED = 'processed';
    public const PREFLIGHT_COMMITMENT_RECENT = 'recent';
    public const PREFLIGHT_COMMITMENT_SINGLE = 'single';
    public const PREFLIGHT_COMMITMENT_SINGLE_GOSSIP = 'singleGossip';
    public const PREFLIGHT_COMMITMENT_MAX = 'max';
    protected static $_name = "SolanaBroadcastConfirmOptions";
    protected static $_definition = [
        "commitment" => ["commitment", "string", null, "getCommitment", "setCommitment", null, ["r" => 0, "e" => 1]], 
        "preflight_commitment" => ["preflightCommitment", "string", null, "getPreflightCommitment", "setPreflightCommitment", null, ["r" => 0, "e" => 1]]
    ];

    /**
     * SolanaBroadcastConfirmOptions
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
    public function getCommitmentAllowableValues(): array {
        return [
            self::COMMITMENT_CONFIRMED,
            self::COMMITMENT_FINALIZED,
        ];
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getPreflightCommitmentAllowableValues(): array {
        return [
            self::PREFLIGHT_COMMITMENT_CONFIRMED,
            self::PREFLIGHT_COMMITMENT_FINALIZED,
            self::PREFLIGHT_COMMITMENT_PROCESSED,
            self::PREFLIGHT_COMMITMENT_RECENT,
            self::PREFLIGHT_COMMITMENT_SINGLE,
            self::PREFLIGHT_COMMITMENT_SINGLE_GOSSIP,
            self::PREFLIGHT_COMMITMENT_MAX,
        ];
    }

    /**
     * Get commitment
     *
     * @return string|null
     */
    public function getCommitment(): ?string {
        return $this->_data["commitment"];
    }

    /**
     * Set commitment
     * 
     * @param string|null $commitment Commitment to waiting for transaction confirmation
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCommitment(?string $commitment) {
        return $this->_set("commitment", $commitment);
    }

    /**
     * Get preflight_commitment
     *
     * @return string|null
     */
    public function getPreflightCommitment(): ?string {
        return $this->_data["preflight_commitment"];
    }

    /**
     * Set preflight_commitment
     * 
     * @param string|null $preflight_commitment Preflight Commitment.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPreflightCommitment(?string $preflight_commitment) {
        return $this->_set("preflight_commitment", $preflight_commitment);
    }
}
