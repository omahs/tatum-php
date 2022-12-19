<?php

/**
 * AlgoTransactionHashKMS Model
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
 * AlgoTransactionHashKMS Model
 */
class AlgoTransactionHashKMS extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "AlgoTransactionHashKMS";
    protected static $_definition = [
        "tx_id" => ["txId", "string", null, "getTxId", "setTxId"], 
        "asset_index" => ["assetIndex", "float", null, "getAssetIndex", "setAssetIndex"], 
        "confirmed" => ["confirmed", "bool", null, "getConfirmed", "setConfirmed"], 
        "failed" => ["failed", "bool", null, "getFailed", "setFailed"]
    ];

    /**
     * AlgoTransactionHashKMS
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["tx_id"=>null, "asset_index"=>null, "confirmed"=>false, "failed"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['tx_id'])) {
            $ip[] = "'tx_id' can't be null";
        }
        
        return $ip;
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
     * @param string $tx_id TX hash of transaction.
     * @return $this
     */
    public function setTxId(string $tx_id) {
        $this->_data['tx_id'] = $tx_id;

        return $this;
    }

    /**
     * Get asset_index
     *
     * @return float|null
     */
    public function getAssetIndex(): ?float {
        return $this->_data["asset_index"];
    }

    /**
     * Set asset_index
     * 
     * @param float|null $asset_index If transaction created new ASA asset, this value is the index of the asset on the network.
     * @return $this
     */
    public function setAssetIndex(?float $asset_index) {
        $this->_data['asset_index'] = $asset_index;

        return $this;
    }

    /**
     * Get confirmed
     *
     * @return bool|null
     */
    public function getConfirmed(): ?bool {
        return $this->_data["confirmed"];
    }

    /**
     * Set confirmed
     * 
     * @param bool|null $confirmed If transaction was not confirmed within 5 rounds, result is false.
     * @return $this
     */
    public function setConfirmed(?bool $confirmed) {
        $this->_data['confirmed'] = $confirmed;

        return $this;
    }

    /**
     * Get failed
     *
     * @return bool|null
     */
    public function getFailed(): ?bool {
        return $this->_data["failed"];
    }

    /**
     * Set failed
     * 
     * @param bool|null $failed In case of the transaction was broadcast to the blockchain, but it was not possible to complete Tatum KMS signature, reponse is marked as failed and must be marked manually.
     * @return $this
     */
    public function setFailed(?bool $failed) {
        $this->_data['failed'] = $failed;

        return $this;
    }
}