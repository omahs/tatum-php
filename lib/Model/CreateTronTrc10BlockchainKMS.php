<?php

/**
 * CreateTronTrc10BlockchainKMS Model
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
 * CreateTronTrc10BlockchainKMS Model
 */
class CreateTronTrc10BlockchainKMS extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "CreateTronTrc10BlockchainKMS";
    protected static $_definition = [
        "from" => ["from", "string", null, "getFrom", "setFrom"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"], 
        "index" => ["index", "float", null, "getIndex", "setIndex"], 
        "recipient" => ["recipient", "string", null, "getRecipient", "setRecipient"], 
        "name" => ["name", "string", null, "getName", "setName"], 
        "abbreviation" => ["abbreviation", "string", null, "getAbbreviation", "setAbbreviation"], 
        "description" => ["description", "string", null, "getDescription", "setDescription"], 
        "url" => ["url", "string", null, "getUrl", "setUrl"], 
        "total_supply" => ["totalSupply", "float", null, "getTotalSupply", "setTotalSupply"], 
        "decimals" => ["decimals", "float", null, "getDecimals", "setDecimals"]
    ];

    /**
     * CreateTronTrc10BlockchainKMS
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["from"=>null, "signature_id"=>null, "index"=>null, "recipient"=>null, "name"=>null, "abbreviation"=>null, "description"=>null, "url"=>null, "total_supply"=>null, "decimals"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['from'])) {
            $ip[] = "'from' can't be null";
        }
        if ((mb_strlen($this->_data['from']) > 34)) {
            $ip[] = "'from' length must be <= 34";
        }
        if ((mb_strlen($this->_data['from']) < 34)) {
            $ip[] = "'from' length must be >= 34";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        if (!is_null($this->_data['index']) && ($this->_data['index'] < 0)) {
            $ip[] = "'index' must be >= 0";
        }
        if (is_null($this->_data['recipient'])) {
            $ip[] = "'recipient' can't be null";
        }
        if ((mb_strlen($this->_data['recipient']) > 34)) {
            $ip[] = "'recipient' length must be <= 34";
        }
        if ((mb_strlen($this->_data['recipient']) < 34)) {
            $ip[] = "'recipient' length must be >= 34";
        }
        if (is_null($this->_data['name'])) {
            $ip[] = "'name' can't be null";
        }
        if ((mb_strlen($this->_data['name']) > 100)) {
            $ip[] = "'name' length must be <= 100";
        }
        if ((mb_strlen($this->_data['name']) < 1)) {
            $ip[] = "'name' length must be >= 1";
        }
        if (is_null($this->_data['abbreviation'])) {
            $ip[] = "'abbreviation' can't be null";
        }
        if ((mb_strlen($this->_data['abbreviation']) > 100)) {
            $ip[] = "'abbreviation' length must be <= 100";
        }
        if ((mb_strlen($this->_data['abbreviation']) < 1)) {
            $ip[] = "'abbreviation' length must be >= 1";
        }
        if (is_null($this->_data['description'])) {
            $ip[] = "'description' can't be null";
        }
        if ((mb_strlen($this->_data['description']) > 100)) {
            $ip[] = "'description' length must be <= 100";
        }
        if ((mb_strlen($this->_data['description']) < 1)) {
            $ip[] = "'description' length must be >= 1";
        }
        if (is_null($this->_data['url'])) {
            $ip[] = "'url' can't be null";
        }
        if ((mb_strlen($this->_data['url']) > 100)) {
            $ip[] = "'url' length must be <= 100";
        }
        if ((mb_strlen($this->_data['url']) < 1)) {
            $ip[] = "'url' length must be >= 1";
        }
        if (is_null($this->_data['total_supply'])) {
            $ip[] = "'total_supply' can't be null";
        }
        if (($this->_data['total_supply'] < 0)) {
            $ip[] = "'total_supply' must be >= 0";
        }
        if (is_null($this->_data['decimals'])) {
            $ip[] = "'decimals' can't be null";
        }
        if (($this->_data['decimals'] > 5)) {
            $ip[] = "'decimals' must be <= 5";
        }
        if (($this->_data['decimals'] < 0)) {
            $ip[] = "'decimals' must be >= 0";
        }
        
        return $ip;
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
     * @param string $from Sender address of TRON account in Base58 format.
     * @return $this
     */
    public function setFrom(string $from) {
        if ((mb_strlen($from) > 34)) {
            throw new IAE('CreateTronTrc10BlockchainKMS.setFrom: $from length must be <= 34');
        }
        if ((mb_strlen($from) < 34)) {
            throw new IAE('CreateTronTrc10BlockchainKMS.setFrom: $from length must be >= 34');
        }
        $this->_data['from'] = $from;

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
     * @param string $signature_id Identifier of the private key associated in signing application. Private key, or signature Id must be present.
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
            throw new IAE('CreateTronTrc10BlockchainKMS.setIndex: $index must be >=0');
        }
        $this->_data['index'] = $index;

        return $this;
    }

    /**
     * Get recipient
     *
     * @return string
     */
    public function getRecipient(): string {
        return $this->_data["recipient"];
    }

    /**
     * Set recipient
     * 
     * @param string $recipient Recipient address of created TRC 10 tokens.
     * @return $this
     */
    public function setRecipient(string $recipient) {
        if ((mb_strlen($recipient) > 34)) {
            throw new IAE('CreateTronTrc10BlockchainKMS.setRecipient: $recipient length must be <= 34');
        }
        if ((mb_strlen($recipient) < 34)) {
            throw new IAE('CreateTronTrc10BlockchainKMS.setRecipient: $recipient length must be >= 34');
        }
        $this->_data['recipient'] = $recipient;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName(): string {
        return $this->_data["name"];
    }

    /**
     * Set name
     * 
     * @param string $name Name of the token.
     * @return $this
     */
    public function setName(string $name) {
        if ((mb_strlen($name) > 100)) {
            throw new IAE('CreateTronTrc10BlockchainKMS.setName: $name length must be <= 100');
        }
        if ((mb_strlen($name) < 1)) {
            throw new IAE('CreateTronTrc10BlockchainKMS.setName: $name length must be >= 1');
        }
        $this->_data['name'] = $name;

        return $this;
    }

    /**
     * Get abbreviation
     *
     * @return string
     */
    public function getAbbreviation(): string {
        return $this->_data["abbreviation"];
    }

    /**
     * Set abbreviation
     * 
     * @param string $abbreviation Abbreviation of the token.
     * @return $this
     */
    public function setAbbreviation(string $abbreviation) {
        if ((mb_strlen($abbreviation) > 100)) {
            throw new IAE('CreateTronTrc10BlockchainKMS.setAbbreviation: $abbreviation length must be <= 100');
        }
        if ((mb_strlen($abbreviation) < 1)) {
            throw new IAE('CreateTronTrc10BlockchainKMS.setAbbreviation: $abbreviation length must be >= 1');
        }
        $this->_data['abbreviation'] = $abbreviation;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription(): string {
        return $this->_data["description"];
    }

    /**
     * Set description
     * 
     * @param string $description Description of the token.
     * @return $this
     */
    public function setDescription(string $description) {
        if ((mb_strlen($description) > 100)) {
            throw new IAE('CreateTronTrc10BlockchainKMS.setDescription: $description length must be <= 100');
        }
        if ((mb_strlen($description) < 1)) {
            throw new IAE('CreateTronTrc10BlockchainKMS.setDescription: $description length must be >= 1');
        }
        $this->_data['description'] = $description;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl(): string {
        return $this->_data["url"];
    }

    /**
     * Set url
     * 
     * @param string $url URL of the token.
     * @return $this
     */
    public function setUrl(string $url) {
        if ((mb_strlen($url) > 100)) {
            throw new IAE('CreateTronTrc10BlockchainKMS.setUrl: $url length must be <= 100');
        }
        if ((mb_strlen($url) < 1)) {
            throw new IAE('CreateTronTrc10BlockchainKMS.setUrl: $url length must be >= 1');
        }
        $this->_data['url'] = $url;

        return $this;
    }

    /**
     * Get total_supply
     *
     * @return float
     */
    public function getTotalSupply(): float {
        return $this->_data["total_supply"];
    }

    /**
     * Set total_supply
     * 
     * @param float $total_supply Total supply of the tokens.
     * @return $this
     */
    public function setTotalSupply(float $total_supply) {
        if (($total_supply < 0)) {
            throw new IAE('CreateTronTrc10BlockchainKMS.setTotalSupply: $total_supply must be >=0');
        }
        $this->_data['total_supply'] = $total_supply;

        return $this;
    }

    /**
     * Get decimals
     *
     * @return float
     */
    public function getDecimals(): float {
        return $this->_data["decimals"];
    }

    /**
     * Set decimals
     * 
     * @param float $decimals Number of decimal places of the token.
     * @return $this
     */
    public function setDecimals(float $decimals) {
        if (($decimals > 5)) {
            throw new IAE('CreateTronTrc10BlockchainKMS.setDecimals: $decimals must be <=5');
        }
        if (($decimals < 0)) {
            throw new IAE('CreateTronTrc10BlockchainKMS.setDecimals: $decimals must be >=0');
        }
        $this->_data['decimals'] = $decimals;

        return $this;
    }
}