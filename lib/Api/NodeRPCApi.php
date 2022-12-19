<?php

/**
 * Implementation of NodeRPC API
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
 * NodeRPC API
 */
class NodeRPCApi extends AbstractApi {
    /**
     * Connect to the blockchain node through an RPC driver
     *
     * @param string $chain Blockchain to communicate with.
     * @param object $body 
     * @param string|null $x_api_key Tatum X-API-Key used for authorization. You can omit this path parameter and either use the X-Api-Key header, or the API key tied to your IP address without any header.
     * @param string|null $node_type Type of the node to access for Algorand.
     * @param string|'ethereum-sepolia' $testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @param string|'avax-c' $chain_type Type of Avalanche network. Defaults to Avalanche C-Chain.
     * @param string|null $rpc_path Optional path of rpc call for non EVM nodes, e.g. Algorand or Stellar.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return object
     */
    public function nodeJsonPostRpcDriver(string $chain, object $body, string $x_api_key = null, string $node_type = null, string $testnet_type = 'ethereum-sepolia', string $chain_type = 'avax-c', string $rpc_path = null) { 
        // Resource path
        $resourcePath = "/v3/blockchain/node/{chain}/{xApiKey}/{rpcPath}";
        $resourcePath = str_replace("{" . "xApiKey" . "}", ObjectSerializer::toPathValue($x_api_key), $resourcePath);
        $resourcePath = str_replace("{" . "chain" . "}", ObjectSerializer::toPathValue($chain), $resourcePath);
        $resourcePath = str_replace("{" . "rpcPath" . "}", ObjectSerializer::toPathValue($rpc_path), $resourcePath);

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
                "nodeType" => isset($node_type) ? ObjectSerializer::toQueryValue($node_type) : null,
            
                "testnetType" => ObjectSerializer::toQueryValue($testnet_type),
            
                "chainType" => ObjectSerializer::toQueryValue($chain_type),
            ];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var object $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "POST",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    $body
                ),
                "object"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "object",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Connect to the blockchain node through an RPC driver
     *
     * @param string $chain Blockchain to communicate with.
     * @param string|null $x_api_key Tatum X-API-Key used for authorization. You can omit this path parameter and either use the X-Api-Key header, or the API key tied to your IP address without any header.
     * @param string|null $node_type Type of the node to access for Algorand.
     * @param string|null $rpc_path Optional path of rpc call for non EVM nodes, e.g. Algorand or Stellar.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return object
     */
    public function nodeJsonRpcGetDriver(string $chain, string $x_api_key = null, string $node_type = null, string $rpc_path = null) { 
        // Resource path
        $resourcePath = "/v3/blockchain/node/{chain}/{xApiKey}/{rpcPath}";
        $resourcePath = str_replace("{" . "xApiKey" . "}", ObjectSerializer::toPathValue($x_api_key), $resourcePath);
        $resourcePath = str_replace("{" . "chain" . "}", ObjectSerializer::toPathValue($chain), $resourcePath);
        $resourcePath = str_replace("{" . "rpcPath" . "}", ObjectSerializer::toPathValue($rpc_path), $resourcePath);

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
                "nodeType" => isset($node_type) ? ObjectSerializer::toQueryValue($node_type) : null,
            ];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var object $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "GET",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                "object"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "object",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Connect to the blockchain node through an RPC driver
     *
     * @param string $chain Blockchain to communicate with.
     * @param object $body 
     * @param string|null $x_api_key Tatum X-API-Key used for authorization. You can omit this path parameter and either use the X-Api-Key header, or the API key tied to your IP address without any header.
     * @param string|null $node_type Type of the node to access for Algorand.
     * @param string|null $rpc_path Optional path of rpc call for non EVM nodes, e.g. Algorand or Stellar.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return object
     */
    public function nodeJsonRpcPutDriver(string $chain, object $body, string $x_api_key = null, string $node_type = null, string $rpc_path = null) { 
        // Resource path
        $resourcePath = "/v3/blockchain/node/{chain}/{xApiKey}/{rpcPath}";
        $resourcePath = str_replace("{" . "xApiKey" . "}", ObjectSerializer::toPathValue($x_api_key), $resourcePath);
        $resourcePath = str_replace("{" . "chain" . "}", ObjectSerializer::toPathValue($chain), $resourcePath);
        $resourcePath = str_replace("{" . "rpcPath" . "}", ObjectSerializer::toPathValue($rpc_path), $resourcePath);

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
                "nodeType" => isset($node_type) ? ObjectSerializer::toQueryValue($node_type) : null,
            ];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var object $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "PUT",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    $body
                ),
                "object"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "object",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
}