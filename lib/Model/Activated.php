<?php

/**
 * Activated Model
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
 * Activated Model
 */
class Activated extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "Activated";
    protected static $_definition = [
        "activated" => ["activated", "bool", null, "getActivated", "setActivated"]
    ];

    /**
     * Activated
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["activated"=>null] as $k => $v) {
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
     * Get activated
     *
     * @return bool|null
     */
    public function getActivated(): ?bool {
        return $this->_data["activated"];
    }

    /**
     * Set activated
     * 
     * @param bool|null $activated If set to \"true\", the gas pump address has been activated
     * @return $this
     */
    public function setActivated(?bool $activated) {
        $this->_data['activated'] = $activated;

        return $this;
    }
}