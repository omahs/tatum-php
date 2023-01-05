<?php

/**
 * CreateSubscriptionMultiTokenTransferEvent Model
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
 * CreateSubscriptionMultiTokenTransferEvent Model
 */
class CreateSubscriptionMultiTokenTransferEvent extends AbstractModel {

    public const _D = null;
    public const TYPE_CONTRACT_MULTITOKEN_TXS_PER_BLOCK = 'CONTRACT_MULTITOKEN_TXS_PER_BLOCK';
    protected static $_name = "CreateSubscriptionMultiTokenTransferEvent";
    protected static $_definition = [
        "type" => ["type", "string", null, "getType", "setType", null, ["r" => 1, "e" => 1]], 
        "attr" => ["attr", "\Tatum\Model\CreateSubscriptionMultiTokenTransferEventAttr", null, "getAttr", "setAttr", null, ["r" => 1]]
    ];

    /**
     * CreateSubscriptionMultiTokenTransferEvent
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }

    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getTypeAllowableValues(): array {
        return [
            self::TYPE_CONTRACT_MULTITOKEN_TXS_PER_BLOCK,
        ];
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType(): string {
        return $this->_data["type"];
    }

    /**
     * Set type
     * 
     * @param string $type Type of the subscription.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setType(string $type) {
        return $this->_set("type", $type);
    }

    /**
     * Get attr
     *
     * @return \Tatum\Model\CreateSubscriptionMultiTokenTransferEventAttr
     */
    public function getAttr(): \Tatum\Model\CreateSubscriptionMultiTokenTransferEventAttr {
        return $this->_data["attr"];
    }

    /**
     * Set attr
     * 
     * @param \Tatum\Model\CreateSubscriptionMultiTokenTransferEventAttr $attr attr
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAttr(\Tatum\Model\CreateSubscriptionMultiTokenTransferEventAttr $attr) {
        return $this->_set("attr", $attr);
    }
}
