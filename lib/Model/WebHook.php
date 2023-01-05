<?php

/**
 * WebHook Model
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
 * WebHook Model
 */
class WebHook extends AbstractModel {

    public const _D = null;
    public const TYPE_INCOMING_BLOCKCHAIN_HOOK = 'INCOMING_BLOCKCHAIN_HOOK';
    public const TYPE_ADDRESS_TRANSACTION = 'ADDRESS_TRANSACTION';
    public const TYPE_CONTRACT_LOG_EVENT = 'CONTRACT_LOG_EVENT';
    public const TYPE_TRADE_MATCH = 'TRADE_MATCH';
    public const TYPE_TRADE_PARTIAL_FILL = 'TRADE_PARTIAL_FILL';
    public const TYPE_PENDING_BLOCKCHAIN_HOOK = 'PENDING_BLOCKCHAIN_HOOK';
    public const TYPE_TRANSACTION_IN_THE_BLOCK = 'TRANSACTION_IN_THE_BLOCK';
    public const TYPE_KMS_FAILED_TX = 'KMS_FAILED_TX';
    public const TYPE_KMS_COMPLETED_TX = 'KMS_COMPLETED_TX';
    protected static $_name = "WebHook";
    protected static $_definition = [
        "type" => ["type", "string", null, "getType", "setType", null, ["r" => 1, "e" => 1]], 
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 1]], 
        "subscription_id" => ["subscriptionId", "string", null, "getSubscriptionId", "setSubscriptionId", null, ["r" => 1]], 
        "url" => ["url", "string", null, "getUrl", "setUrl", null, ["r" => 1]], 
        "data" => ["data", "object", null, "getData", "setData", null, ["r" => 1]], 
        "next_time" => ["nextTime", "float", null, "getNextTime", "setNextTime", null, ["r" => 0]], 
        "timestamp" => ["timestamp", "float", null, "getTimestamp", "setTimestamp", null, ["r" => 0]], 
        "retry_count" => ["retryCount", "float", null, "getRetryCount", "setRetryCount", null, ["r" => 0]], 
        "failed" => ["failed", "bool", null, "getFailed", "setFailed", null, ["r" => 1]], 
        "response" => ["response", "\Tatum\Model\WebHookResponse", null, "getResponse", "setResponse", null, ["r" => 1]]
    ];

    /**
     * WebHook
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
            self::TYPE_INCOMING_BLOCKCHAIN_HOOK,
            self::TYPE_ADDRESS_TRANSACTION,
            self::TYPE_CONTRACT_LOG_EVENT,
            self::TYPE_TRADE_MATCH,
            self::TYPE_TRADE_PARTIAL_FILL,
            self::TYPE_PENDING_BLOCKCHAIN_HOOK,
            self::TYPE_TRANSACTION_IN_THE_BLOCK,
            self::TYPE_KMS_FAILED_TX,
            self::TYPE_KMS_COMPLETED_TX,
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
     * Get id
     *
     * @return string
     */
    public function getId(): string {
        return $this->_data["id"];
    }

    /**
     * Set id
     * 
     * @param string $id ID of the WebHook
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId(string $id) {
        return $this->_set("id", $id);
    }

    /**
     * Get subscription_id
     *
     * @return string
     */
    public function getSubscriptionId(): string {
        return $this->_data["subscription_id"];
    }

    /**
     * Set subscription_id
     * 
     * @param string $subscription_id ID of the subscription
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSubscriptionId(string $subscription_id) {
        return $this->_set("subscription_id", $subscription_id);
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
     * @param string $url ID of the subscription
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUrl(string $url) {
        return $this->_set("url", $url);
    }

    /**
     * Get data
     *
     * @return object
     */
    public function getData(): object {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param object $data Data of webhook
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setData(object $data) {
        return $this->_set("data", $data);
    }

    /**
     * Get next_time
     *
     * @return float|null
     */
    public function getNextTime(): ?float {
        return $this->_data["next_time"];
    }

    /**
     * Set next_time
     * 
     * @param float|null $next_time Next webhook execution try time
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNextTime(?float $next_time) {
        return $this->_set("next_time", $next_time);
    }

    /**
     * Get timestamp
     *
     * @return float|null
     */
    public function getTimestamp(): ?float {
        return $this->_data["timestamp"];
    }

    /**
     * Set timestamp
     * 
     * @param float|null $timestamp Webhook execution time
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTimestamp(?float $timestamp) {
        return $this->_set("timestamp", $timestamp);
    }

    /**
     * Get retry_count
     *
     * @return float|null
     */
    public function getRetryCount(): ?float {
        return $this->_data["retry_count"];
    }

    /**
     * Set retry_count
     * 
     * @param float|null $retry_count Number
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRetryCount(?float $retry_count) {
        return $this->_set("retry_count", $retry_count);
    }

    /**
     * Get failed
     *
     * @return bool
     */
    public function getFailed(): bool {
        return $this->_data["failed"];
    }

    /**
     * Set failed
     * 
     * @param bool $failed Flag indicating whether this webhook was successful or not
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFailed(bool $failed) {
        return $this->_set("failed", $failed);
    }

    /**
     * Get response
     *
     * @return \Tatum\Model\WebHookResponse
     */
    public function getResponse(): \Tatum\Model\WebHookResponse {
        return $this->_data["response"];
    }

    /**
     * Set response
     * 
     * @param \Tatum\Model\WebHookResponse $response response
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setResponse(\Tatum\Model\WebHookResponse $response) {
        return $this->_set("response", $response);
    }
}
