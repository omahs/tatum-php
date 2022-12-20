<?php

/**
 * SolanaTxMessage Model
 *
 * @version   3.17.1
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
 * SolanaTxMessage Model
 */
class SolanaTxMessage extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "SolanaTxMessage";
    protected static $_definition = [
        "header" => ["header", "\Tatum\Model\SolanaTxMessageHeader", null, "getHeader", "setHeader"], 
        "account_keys" => ["accountKeys", "string[]", null, "getAccountKeys", "setAccountKeys"], 
        "recent_blockhash" => ["recentBlockhash", "string", null, "getRecentBlockhash", "setRecentBlockhash"], 
        "instructions" => ["instructions", "\Tatum\Model\SolanaTxMessageInstruction[]", null, "getInstructions", "setInstructions"], 
        "index_to_program_ids" => ["indexToProgramIds", "object", null, "getIndexToProgramIds", "setIndexToProgramIds"]
    ];

    /**
     * SolanaTxMessage
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["header"=>null, "account_keys"=>null, "recent_blockhash"=>null, "instructions"=>null, "index_to_program_ids"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        
        return $ip;
    }

    /**
     * Get header
     *
     * @return \Tatum\Model\SolanaTxMessageHeader|null
     */
    public function getHeader(): ?\Tatum\Model\SolanaTxMessageHeader {
        return $this->_data["header"];
    }

    /**
     * Set header
     * 
     * @param \Tatum\Model\SolanaTxMessageHeader|null $header header
     * @return $this
     */
    public function setHeader(?\Tatum\Model\SolanaTxMessageHeader $header) {
        $this->_data['header'] = $header;

        return $this;
    }

    /**
     * Get account_keys
     *
     * @return string[]|null
     */
    public function getAccountKeys(): ?array {
        return $this->_data["account_keys"];
    }

    /**
     * Set account_keys
     * 
     * @param string[]|null $account_keys account_keys
     * @return $this
     */
    public function setAccountKeys(?array $account_keys) {
        $this->_data['account_keys'] = $account_keys;

        return $this;
    }

    /**
     * Get recent_blockhash
     *
     * @return string|null
     */
    public function getRecentBlockhash(): ?string {
        return $this->_data["recent_blockhash"];
    }

    /**
     * Set recent_blockhash
     * 
     * @param string|null $recent_blockhash recent_blockhash
     * @return $this
     */
    public function setRecentBlockhash(?string $recent_blockhash) {
        $this->_data['recent_blockhash'] = $recent_blockhash;

        return $this;
    }

    /**
     * Get instructions
     *
     * @return \Tatum\Model\SolanaTxMessageInstruction[]|null
     */
    public function getInstructions(): ?array {
        return $this->_data["instructions"];
    }

    /**
     * Set instructions
     * 
     * @param \Tatum\Model\SolanaTxMessageInstruction[]|null $instructions instructions
     * @return $this
     */
    public function setInstructions(?array $instructions) {
        $this->_data['instructions'] = $instructions;

        return $this;
    }

    /**
     * Get index_to_program_ids
     *
     * @return object|null
     */
    public function getIndexToProgramIds(): ?object {
        return $this->_data["index_to_program_ids"];
    }

    /**
     * Set index_to_program_ids
     * 
     * @param object|null $index_to_program_ids index_to_program_ids
     * @return $this
     */
    public function setIndexToProgramIds(?object $index_to_program_ids) {
        $this->_data['index_to_program_ids'] = $index_to_program_ids;

        return $this;
    }
}