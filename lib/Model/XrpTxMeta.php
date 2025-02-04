<?php

/**
 * XrpTx_meta Model
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
 * XrpTx_meta Model
 */
class XrpTxMeta extends AbstractModel {

    public const _D = null;
    protected static $_name = "XrpTx_meta";
    protected static $_definition = [
        "affected_nodes" => ["AffectedNodes", "\Tatum\Model\XrpTxMetaAffectedNodesInner[]", null, "getAffectedNodes", "setAffectedNodes", null, ["r" => 0, "c" => 1]], 
        "transaction_index" => ["TransactionIndex", "float", null, "getTransactionIndex", "setTransactionIndex", null, ["r" => 0]], 
        "transaction_result" => ["TransactionResult", "string", null, "getTransactionResult", "setTransactionResult", null, ["r" => 0]], 
        "delivered_amount" => ["delivered_amount", "string", null, "getDeliveredAmount", "setDeliveredAmount", null, ["r" => 0]]
    ];

    /**
     * XrpTxMeta
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get affected_nodes
     *
     * @return \Tatum\Model\XrpTxMetaAffectedNodesInner[]|null
     */
    public function getAffectedNodes(): ?array {
        return $this->_data["affected_nodes"];
    }

    /**
     * Set affected_nodes
     * 
     * @param \Tatum\Model\XrpTxMetaAffectedNodesInner[]|null $affected_nodes affected_nodes
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAffectedNodes(?array $affected_nodes) {
        return $this->_set("affected_nodes", $affected_nodes);
    }

    /**
     * Get transaction_index
     *
     * @return float|null
     */
    public function getTransactionIndex(): ?float {
        return $this->_data["transaction_index"];
    }

    /**
     * Set transaction_index
     * 
     * @param float|null $transaction_index transaction_index
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTransactionIndex(?float $transaction_index) {
        return $this->_set("transaction_index", $transaction_index);
    }

    /**
     * Get transaction_result
     *
     * @return string|null
     */
    public function getTransactionResult(): ?string {
        return $this->_data["transaction_result"];
    }

    /**
     * Set transaction_result
     * 
     * @param string|null $transaction_result transaction_result
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTransactionResult(?string $transaction_result) {
        return $this->_set("transaction_result", $transaction_result);
    }

    /**
     * Get delivered_amount
     *
     * @return string|null
     */
    public function getDeliveredAmount(): ?string {
        return $this->_data["delivered_amount"];
    }

    /**
     * Set delivered_amount
     * 
     * @param string|null $delivered_amount delivered_amount
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDeliveredAmount(?string $delivered_amount) {
        return $this->_set("delivered_amount", $delivered_amount);
    }
}
