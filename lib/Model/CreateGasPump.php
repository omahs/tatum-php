<?php

/**
 * CreateGasPump Model
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
 * CreateGasPump Model
 */
class CreateGasPump extends AbstractModel {

    public const _D = null;
    public const CHAIN_BSC = 'BSC';
    public const CHAIN_CELO = 'CELO';
    public const CHAIN_ETH = 'ETH';
    public const CHAIN_MATIC = 'MATIC';
    public const CHAIN_KLAY = 'KLAY';
    public const CHAIN_ONE = 'ONE';
    public const CHAIN_TRON = 'TRON';
    protected static $_name = "CreateGasPump";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "owner" => ["owner", "string", null, "getOwner", "setOwner", null, ["r" => 1]], 
        "from" => ["from", "int", null, "getFrom", "setFrom", null, ["r" => 1, "n" => [0]]], 
        "to" => ["to", "int", null, "getTo", "setTo", null, ["r" => 1, "n" => [0]]]
    ];

    /**
     * CreateGasPump
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
            self::CHAIN_BSC,
            self::CHAIN_CELO,
            self::CHAIN_ETH,
            self::CHAIN_MATIC,
            self::CHAIN_KLAY,
            self::CHAIN_ONE,
            self::CHAIN_TRON,
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
     * @param string $chain The blockchain to work with
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(string $chain) {
        return $this->_set("chain", $chain);
    }

    /**
     * Get owner
     *
     * @return string
     */
    public function getOwner(): string {
        return $this->_data["owner"];
    }

    /**
     * Set owner
     * 
     * @param string $owner The blockchain address that will own the precalculated gas pump addresses and will be used to pay gas fees for operations made on the gas pump addresses; can be referred to as \"master address\"
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOwner(string $owner) {
        return $this->_set("owner", $owner);
    }

    /**
     * Get from
     *
     * @return int
     */
    public function getFrom(): int {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param int $from The start index of the range of gas pump addresses to precalculate
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFrom(int $from) {
        return $this->_set("from", $from);
    }

    /**
     * Get to
     *
     * @return int
     */
    public function getTo(): int {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param int $to The end index of the range of gas pump addresses to precalculate; must be greater than or equal to the value in the <code>from</code> parameter
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTo(int $to) {
        return $this->_set("to", $to);
    }
}
