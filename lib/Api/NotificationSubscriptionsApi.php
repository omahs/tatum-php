<?php

/**
 * Implementation of NotificationSubscriptions API
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

namespace Tatum\Api;

use InvalidArgumentException;
use Tatum\Sdk\ApiException;
use Tatum\Sdk\ObjectSerializer;

/**
 * NotificationSubscriptions API
 */
class NotificationSubscriptionsApi extends AbstractApi {
    /**
     * Create a subscription
     *
     * @param \Tatum\Model\CreateSubscriptionRequest $create_subscription_request 
     * @param string|'ethereum-sepolia' $testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\Id
     */
    public function createSubscription(\Tatum\Model\CreateSubscriptionRequest $create_subscription_request, string $testnet_type = 'ethereum-sepolia') { 
        // Resource path
        $resourcePath = "/v3/subscription";

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], ["application/json"])
        );

        // Prepare the query parameters
        $queryParams = [
                "testnetType" => ObjectSerializer::toQueryValue($testnet_type),
            ];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\Id $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "POST",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    $create_subscription_request
                ),
                "\Tatum\Model\Id"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\Id",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Cancel existing subscription
     *
     * @param string $id Subscription ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return void
     */
    public function deleteSubscription(string $id) { 
        // Resource path
        $resourcePath = "/v3/subscription/{id}";
        $resourcePath = str_replace("{" . "id" . "}", ObjectSerializer::toPathValue($id), $resourcePath);

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], [])
        );

        // Prepare the query parameters
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "DELETE",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                ""
            );
        } catch (ApiException $e) {
            throw $e;
        }
        
    }
    
    /**
     * Disable HMAC webhook digest
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return void
     */
    public function disableWebHookHmac() { 
        // Resource path
        $resourcePath = "/v3/subscription";

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], [])
        );

        // Prepare the query parameters
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "DELETE",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                ""
            );
        } catch (ApiException $e) {
            throw $e;
        }
        
    }
    
    /**
     * Enable HMAC webhook digest
     *
     * @param \Tatum\Model\HmacWebHook $hmac_web_hook 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return void
     */
    public function enableWebHookHmac(\Tatum\Model\HmacWebHook $hmac_web_hook) { 
        // Resource path
        $resourcePath = "/v3/subscription";

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], ["application/json"])
        );

        // Prepare the query parameters
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "PUT",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    $hmac_web_hook
                ),
                ""
            );
        } catch (ApiException $e) {
            throw $e;
        }
        
    }
    
    /**
     * List all executed webhooks
     *
     * @param float $page_size Max number of items per page is 50.
     * @param float|null $offset Offset to obtain the next page of data.
     * @param string|null $direction Direction of sorting
     * @param bool|null $failed Flag indicating whether the webhook was successful or not
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\WebHook[]
     */
    public function getAllWebhooks(float $page_size, float $offset = null, string $direction = null, bool $failed = null) { 
        if ($page_size > 50) {
            throw new InvalidArgumentException('Invalid value for "$page_size" when calling NotificationSubscriptionsApi.getAllWebhooks, must be smaller than or equal to 50');
        }
        if ($page_size < 1) {
            throw new InvalidArgumentException('Invalid value for "$page_size" when calling NotificationSubscriptionsApi.getAllWebhooks, must be bigger than or equal to 1.');
        }

        // Resource path
        $resourcePath = "/v3/subscription/webhook";

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], [])
        );

        // Prepare the query parameters
        $queryParams = [
                "pageSize" => ObjectSerializer::toQueryValue($page_size),
            
                "offset" => isset($offset) ? ObjectSerializer::toQueryValue($offset) : null,
            
                "direction" => isset($direction) ? ObjectSerializer::toQueryValue($direction) : null,
            
                "failed" => isset($failed) ? ObjectSerializer::toQueryValue($failed) : null,
            ];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\WebHook[] $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "GET",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                "\Tatum\Model\WebHook[]"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\WebHook[]",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Count of found entities for get webhook request
     *
     * @param float $page_size Max number of items per page is 50.
     * @param float|null $offset Offset to obtain the next page of data.
     * @param string|null $direction Direction of sorting
     * @param bool|null $failed Flag indicating whether the webhook was successful or not
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\EntitiesCount
     */
    public function getAllWebhooksCount(float $page_size, float $offset = null, string $direction = null, bool $failed = null) { 
        if ($page_size > 50) {
            throw new InvalidArgumentException('Invalid value for "$page_size" when calling NotificationSubscriptionsApi.getAllWebhooksCount, must be smaller than or equal to 50');
        }
        if ($page_size < 1) {
            throw new InvalidArgumentException('Invalid value for "$page_size" when calling NotificationSubscriptionsApi.getAllWebhooksCount, must be bigger than or equal to 1.');
        }

        // Resource path
        $resourcePath = "/v3/subscription/webhook/count";

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], [])
        );

        // Prepare the query parameters
        $queryParams = [
                "pageSize" => ObjectSerializer::toQueryValue($page_size),
            
                "offset" => isset($offset) ? ObjectSerializer::toQueryValue($offset) : null,
            
                "direction" => isset($direction) ? ObjectSerializer::toQueryValue($direction) : null,
            
                "failed" => isset($failed) ? ObjectSerializer::toQueryValue($failed) : null,
            ];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\EntitiesCount $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "GET",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                "\Tatum\Model\EntitiesCount"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\EntitiesCount",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Obtain report for subscription
     *
     * @param string $id Subscription ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\GetSubscriptionReport200Response
     */
    public function getSubscriptionReport(string $id) { 
        // Resource path
        $resourcePath = "/v3/subscription/report/{id}";
        $resourcePath = str_replace("{" . "id" . "}", ObjectSerializer::toPathValue($id), $resourcePath);

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], [])
        );

        // Prepare the query parameters
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\GetSubscriptionReport200Response $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "GET",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                "\Tatum\Model\GetSubscriptionReport200Response"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\GetSubscriptionReport200Response",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * List all active subscriptions
     *
     * @param float $page_size Max number of items per page is 50.
     * @param float|null $offset Offset to obtain next page of the data.
     * @param string|null $address Value for filtering by address
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\Subscription[]
     */
    public function getSubscriptions(float $page_size, float $offset = null, string $address = null) { 
        if ($page_size > 50) {
            throw new InvalidArgumentException('Invalid value for "$page_size" when calling NotificationSubscriptionsApi.getSubscriptions, must be smaller than or equal to 50');
        }
        if ($page_size < 1) {
            throw new InvalidArgumentException('Invalid value for "$page_size" when calling NotificationSubscriptionsApi.getSubscriptions, must be bigger than or equal to 1.');
        }

        // Resource path
        $resourcePath = "/v3/subscription";

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], [])
        );

        // Prepare the query parameters
        $queryParams = [
                "pageSize" => ObjectSerializer::toQueryValue($page_size),
            
                "offset" => isset($offset) ? ObjectSerializer::toQueryValue($offset) : null,
            
                "address" => isset($address) ? ObjectSerializer::toQueryValue($address) : null,
            ];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\Subscription[] $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "GET",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                "\Tatum\Model\Subscription[]"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\Subscription[]",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Count of found entities for get webhook request
     *
     * @param float $page_size Max number of items per page is 50.
     * @param float|null $offset Offset to obtain next page of the data.
     * @param string|null $address Value for filtering by address
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\EntitiesCount
     */
    public function getSubscriptionsCount(float $page_size, float $offset = null, string $address = null) { 
        if ($page_size > 50) {
            throw new InvalidArgumentException('Invalid value for "$page_size" when calling NotificationSubscriptionsApi.getSubscriptionsCount, must be smaller than or equal to 50');
        }
        if ($page_size < 1) {
            throw new InvalidArgumentException('Invalid value for "$page_size" when calling NotificationSubscriptionsApi.getSubscriptionsCount, must be bigger than or equal to 1.');
        }

        // Resource path
        $resourcePath = "/v3/subscription/count";

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], [])
        );

        // Prepare the query parameters
        $queryParams = [
                "pageSize" => ObjectSerializer::toQueryValue($page_size),
            
                "offset" => isset($offset) ? ObjectSerializer::toQueryValue($offset) : null,
            
                "address" => isset($address) ? ObjectSerializer::toQueryValue($address) : null,
            ];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\EntitiesCount $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "GET",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                "\Tatum\Model\EntitiesCount"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\EntitiesCount",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
}