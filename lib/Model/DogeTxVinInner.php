<?php

/**
 * DogeTx_vin_inner Model
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
 * DogeTx_vin_inner Model
 */
class DogeTxVinInner extends AbstractModel {

    public const _D = null;
    protected static $_name = "DogeTx_vin_inner";
    protected static $_definition = [
        "txid" => ["txid", "string", null, "getTxid", "setTxid", null, ["r" => 0]], 
        "vout" => ["vout", "float", null, "getVout", "setVout", null, ["r" => 0]], 
        "script_sig" => ["scriptSig", "\Tatum\Model\DogeTxVinInnerScriptSig", null, "getScriptSig", "setScriptSig", null, ["r" => 0]], 
        "sequence" => ["sequence", "float", null, "getSequence", "setSequence", null, ["r" => 0]]
    ];

    /**
     * DogeTxVinInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get txid
     *
     * @return string|null
     */
    public function getTxid(): ?string {
        return $this->_data["txid"];
    }

    /**
     * Set txid
     * 
     * @param string|null $txid Transaction hash of the input.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxid(?string $txid) {
        return $this->_set("txid", $txid);
    }

    /**
     * Get vout
     *
     * @return float|null
     */
    public function getVout(): ?float {
        return $this->_data["vout"];
    }

    /**
     * Set vout
     * 
     * @param float|null $vout Transaction index of the input.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setVout(?float $vout) {
        return $this->_set("vout", $vout);
    }

    /**
     * Get script_sig
     *
     * @return \Tatum\Model\DogeTxVinInnerScriptSig|null
     */
    public function getScriptSig(): ?\Tatum\Model\DogeTxVinInnerScriptSig {
        return $this->_data["script_sig"];
    }

    /**
     * Set script_sig
     * 
     * @param \Tatum\Model\DogeTxVinInnerScriptSig|null $script_sig script_sig
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setScriptSig(?\Tatum\Model\DogeTxVinInnerScriptSig $script_sig) {
        return $this->_set("script_sig", $script_sig);
    }

    /**
     * Get sequence
     *
     * @return float|null
     */
    public function getSequence(): ?float {
        return $this->_data["sequence"];
    }

    /**
     * Set sequence
     * 
     * @param float|null $sequence sequence
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSequence(?float $sequence) {
        return $this->_set("sequence", $sequence);
    }
}
