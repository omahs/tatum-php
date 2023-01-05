<?php

/**
 * FlowCustomTransactionPK Model
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
 * FlowCustomTransactionPK Model
 */
class FlowCustomTransactionPK extends AbstractModel {

    public const _D = null;
    protected static $_name = "FlowCustomTransactionPK";
    protected static $_definition = [
        "account" => ["account", "string", null, "getAccount", "setAccount", null, ["r" => 1, "nl" => 18, "xl" => 18]], 
        "transaction" => ["transaction", "string", null, "getTransaction", "setTransaction", null, ["r" => 1, "nl" => 1, "xl" => 500000]], 
        "args" => ["args", "\Tatum\Model\FlowCustomTransactionPKArgsInner[]", null, "getArgs", "setArgs", null, ["r" => 1, "c" => 1]], 
        "private_key" => ["privateKey", "string", null, "getPrivateKey", "setPrivateKey", null, ["r" => 1, "nl" => 64, "xl" => 64]]
    ];

    /**
     * FlowCustomTransactionPK
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAccount(string $account) {
        return $this->_set("account", $account);
    }

    /**
     * Get transaction
     *
     * @return string
     */
    public function getTransaction(): string {
        return $this->_data["transaction"];
    }

    /**
     * Set transaction
     * 
     * @param string $transaction Transaction string to send to the chain.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTransaction(string $transaction) {
        return $this->_set("transaction", $transaction);
    }

    /**
     * Get args
     *
     * @return \Tatum\Model\FlowCustomTransactionPKArgsInner[]
     */
    public function getArgs(): array {
        return $this->_data["args"];
    }

    /**
     * Set args
     * 
     * @param \Tatum\Model\FlowCustomTransactionPKArgsInner[] $args args
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setArgs(array $args) {
        return $this->_set("args", $args);
    }

    /**
     * Get private_key
     *
     * @return string
     */
    public function getPrivateKey(): string {
        return $this->_data["private_key"];
    }

    /**
     * Set private_key
     * 
     * @param string $private_key Secret for account. Secret, or signature Id must be present.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPrivateKey(string $private_key) {
        return $this->_set("private_key", $private_key);
    }
}
