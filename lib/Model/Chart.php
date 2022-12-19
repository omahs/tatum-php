<?php

/**
 * Chart Model
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
 * Chart Model
 * 
 * @description 1 point in the chart. This point represents the tick in the grapch based on the specified time frame.
 */
class Chart extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "Chart";
    protected static $_definition = [
        "timestamp" => ["timestamp", "float", null, "getTimestamp", "setTimestamp"], 
        "high" => ["high", "string", null, "getHigh", "setHigh"], 
        "low" => ["low", "string", null, "getLow", "setLow"], 
        "open" => ["open", "string", null, "getOpen", "setOpen"], 
        "close" => ["close", "string", null, "getClose", "setClose"], 
        "volume" => ["volume", "string", null, "getVolume", "setVolume"]
    ];

    /**
     * Chart
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["timestamp"=>null, "high"=>null, "low"=>null, "open"=>null, "close"=>null, "volume"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['timestamp'])) {
            $ip[] = "'timestamp' can't be null";
        }
        if (is_null($this->_data['high'])) {
            $ip[] = "'high' can't be null";
        }
        if (is_null($this->_data['low'])) {
            $ip[] = "'low' can't be null";
        }
        if (is_null($this->_data['open'])) {
            $ip[] = "'open' can't be null";
        }
        if (is_null($this->_data['close'])) {
            $ip[] = "'close' can't be null";
        }
        if (is_null($this->_data['volume'])) {
            $ip[] = "'volume' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get timestamp
     *
     * @return float
     */
    public function getTimestamp(): float {
        return $this->_data["timestamp"];
    }

    /**
     * Set timestamp
     * 
     * @param float $timestamp Milliseconds in UTC of the time interval.
     * @return $this
     */
    public function setTimestamp(float $timestamp) {
        $this->_data['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Get high
     *
     * @return string
     */
    public function getHigh(): string {
        return $this->_data["high"];
    }

    /**
     * Set high
     * 
     * @param string $high Highest trade value in the current interval.
     * @return $this
     */
    public function setHigh(string $high) {
        $this->_data['high'] = $high;

        return $this;
    }

    /**
     * Get low
     *
     * @return string
     */
    public function getLow(): string {
        return $this->_data["low"];
    }

    /**
     * Set low
     * 
     * @param string $low Lowest trade value in the current interval.
     * @return $this
     */
    public function setLow(string $low) {
        $this->_data['low'] = $low;

        return $this;
    }

    /**
     * Get open
     *
     * @return string
     */
    public function getOpen(): string {
        return $this->_data["open"];
    }

    /**
     * Set open
     * 
     * @param string $open Open trade value in the current interval.
     * @return $this
     */
    public function setOpen(string $open) {
        $this->_data['open'] = $open;

        return $this;
    }

    /**
     * Get close
     *
     * @return string
     */
    public function getClose(): string {
        return $this->_data["close"];
    }

    /**
     * Set close
     * 
     * @param string $close Close trade value in the current interval.
     * @return $this
     */
    public function setClose(string $close) {
        $this->_data['close'] = $close;

        return $this;
    }

    /**
     * Get volume
     *
     * @return string
     */
    public function getVolume(): string {
        return $this->_data["volume"];
    }

    /**
     * Set volume
     * 
     * @param string $volume Total volume of assets traded in the current interval. Volume is in currency1 asset.
     * @return $this
     */
    public function setVolume(string $volume) {
        $this->_data['volume'] = $volume;

        return $this;
    }
}