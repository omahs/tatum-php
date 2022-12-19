<?php

/**
 * AdaAccountBalance_inner_currency Model
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
 * AdaAccountBalance_inner_currency Model
 */
class AdaAccountBalanceInnerCurrency extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "AdaAccountBalance_inner_currency";
    protected static $_definition = [
        "symbol" => ["symbol", "string", null, "getSymbol", "setSymbol"], 
        "decimals" => ["decimals", "float", null, "getDecimals", "setDecimals"]
    ];

    /**
     * AdaAccountBalanceInnerCurrency
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["symbol"=>null, "decimals"=>null] as $k => $v) {
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
     * Get symbol
     *
     * @return string|null
     */
    public function getSymbol(): ?string {
        return $this->_data["symbol"];
    }

    /**
     * Set symbol
     * 
     * @param string|null $symbol Name of the asset.
     * @return $this
     */
    public function setSymbol(?string $symbol) {
        $this->_data['symbol'] = $symbol;

        return $this;
    }

    /**
     * Get decimals
     *
     * @return float|null
     */
    public function getDecimals(): ?float {
        return $this->_data["decimals"];
    }

    /**
     * Set decimals
     * 
     * @param float|null $decimals Number of decimal places.
     * @return $this
     */
    public function setDecimals(?float $decimals) {
        $this->_data['decimals'] = $decimals;

        return $this;
    }
}