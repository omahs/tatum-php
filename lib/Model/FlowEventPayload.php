<?php

/**
 * FlowEvent_payload Model
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
 * FlowEvent_payload Model
 */
class FlowEventPayload extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const TYPE_EVENT = 'Event';
    protected static $_name = "FlowEvent_payload";
    protected static $_definition = [
        "type" => ["type", "string", null, "getType", "setType"], 
        "value" => ["value", "\Tatum\Model\FlowEventPayloadValue", null, "getValue", "setValue"]
    ];

    /**
     * FlowEventPayload
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["type"=>null, "value"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        $allowed = $this->getTypeAllowableValues();
        $value = $this->_data['type'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'type' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        
        return $ip;
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getTypeAllowableValues(): array {
        return [
            self::TYPE_EVENT,
        ];
    }

    /**
     * Get type
     *
     * @return string|null
     */
    public function getType(): ?string {
        return $this->_data["type"];
    }

    /**
     * Set type
     * 
     * @param string|null $type Type of payload.
     * @return $this
     */
    public function setType(?string $type) {
        $allowed = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowed, true)) {
            throw new IAE(sprintf("FlowEventPayload.setType: type invalid value '%s', must be one of '%s'", $type, implode("', '", $allowed)));
        }
        $this->_data['type'] = $type;

        return $this;
    }

    /**
     * Get value
     *
     * @return \Tatum\Model\FlowEventPayloadValue|null
     */
    public function getValue(): ?\Tatum\Model\FlowEventPayloadValue {
        return $this->_data["value"];
    }

    /**
     * Set value
     * 
     * @param \Tatum\Model\FlowEventPayloadValue|null $value value
     * @return $this
     */
    public function setValue(?\Tatum\Model\FlowEventPayloadValue $value) {
        $this->_data['value'] = $value;

        return $this;
    }
}