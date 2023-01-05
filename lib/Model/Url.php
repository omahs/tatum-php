<?php

/**
 * Url Model
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
 * Url Model
 */
class Url extends AbstractModel {

    public const _D = null;
    protected static $_name = "Url";
    protected static $_definition = [
        "url" => ["url", "string", null, "getUrl", "setUrl", null, ["r" => 0]]
    ];

    /**
     * Url
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get url
     *
     * @return string|null
     */
    public function getUrl(): ?string {
        return $this->_data["url"];
    }

    /**
     * Set url
     * 
     * @param string|null $url QR Code as data URL
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUrl(?string $url) {
        return $this->_set("url", $url);
    }
}
