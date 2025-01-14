# Tatum/Api/NodeRPCApi

All URIs are relative to https://api.tatum.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**nodeJsonPostRpcDriver()**](#nodejsonpostrpcdriver) | **POST** [/v3/blockchain/node/{chain}/{xApiKey}/{rpcPath}](https://apidoc.tatum.io/tag/Node-RPC/#operation/NodeJsonPostRpcDriver) | Connect to the blockchain node through an RPC driver
[**nodeJsonRpcGetDriver()**](#nodejsonrpcgetdriver) | **GET** [/v3/blockchain/node/{chain}/{xApiKey}/{rpcPath}](https://apidoc.tatum.io/tag/Node-RPC/#operation/NodeJsonRpcGetDriver) | Connect to the blockchain node through an RPC driver
[**nodeJsonRpcPutDriver()**](#nodejsonrpcputdriver) | **PUT** [/v3/blockchain/node/{chain}/{xApiKey}/{rpcPath}](https://apidoc.tatum.io/tag/Node-RPC/#operation/NodeJsonRpcPutDriver) | Connect to the blockchain node through an RPC driver


## `nodeJsonPostRpcDriver()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nodeRPC()->nodeJsonPostRpcDriver(
    string $chain,
    object $body,
    [ string $x_api_key, ]
    [ string $node_type, ]
    [ string $testnet_type = 'ethereum-sepolia', ]
    [ string $chain_type = 'avax-c', ]
    [ string $rpc_path ]
): object
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to communicate with. |
 **$body** | **object**  |  |
 **$x_api_key** | **string**  | Tatum X-API-Key used for authorization. You can omit this path parameter and either use the X-Api-Key header, or the API key tied to your IP address without any header. | [optional]
 **$node_type** | **string**  | Type of the node to access for Algorand. | [optional]
 **$testnet_type** | **string**  | Type of Ethereum testnet. Defaults to ethereum-sepolia. | [optional] [default to &#39;ethereum-sepolia&#39;]
 **$chain_type** | **string**  | Type of Avalanche network. Defaults to Avalanche C-Chain. | [optional] [default to &#39;avax-c&#39;]
 **$rpc_path** | **string**  | Optional path of rpc call for non EVM nodes, e.g. Algorand or Stellar. | [optional]

### Return type

**object**

### Description

Connect to the blockchain node through an RPC driver

<p><b>The number of credits consumed depends on the number of methods submitted in an API call:<br/> * 50 credits per debug*_/trace* method (for EVM-based blockchains)<br/> * 50 credits per EOS <a href="https://developers.eos.io/manuals/eos/v2.0/nodeos/plugins/trace_api_plugin/api-reference/index" target="_blank">Trace API</a> methods <br/> * 5 credits per eth_call method (for EVM-based blockchains)<br/> * 2 credits per any other RPC method</b></p> <p>Connect directly to the blockchain node provided by Tatum.</p> <p>The <code>POST</code> method is used. The API endpoint URL acts as an HTTP-based RPC driver.</p> <p>In the request body, provide valid Web3 RPC method content, for example:</p> <pre> {   "jsonrpc": "2.0",   "id": 1,   "method": "method_name",   "params": [] } </pre> <p>For the blockchains using the JSON-RPC 2.0 specification, you can submit multiple RPC methods in one API call:</p> <pre> [   {     "jsonrpc": "2.0",     "id": 1,     "method": "method_1_name",     "params": []   },   {     "jsonrpc": "2.0",     "id": 2,     "method": "method_2_name",     "params": []   },   ... ] </pre> <p>This API is supported for the following blockchains:</p> <ul>   <li><a href="https://developer.algorand.org/docs/rest-apis/restendpoints/" target="_blank">Algorand</a></li>   <li><a href="https://ethereum.org/en/developers/docs/apis/json-rpc/" target="_blank">Arbitrum</a></li>   <li><a href="https://doc.aurora.dev/compat/rpc/" target="_blank">Aurora</a></li>   <li><a href="https://docs.avax.network/apis/avalanchego/apis/c-chain" target="_blank">Avalanche C-Chain</a></li>   <li><a href="https://docs.avax.network/apis/avalanchego/apis/p-chain" target="_blank">Avalanche P-Chain</a></li>   <li><a href="https://docs.avax.network/apis/avalanchego/apis/x-chain" target="_blank">Avalanche X-Chain</a></li>   <li><a href="https://developer.bitcoin.org/reference/rpc/index.html" target="_blank">Bitcoin</a></li>   <li><a href="https://docs.bitcoincashnode.org/doc/json-rpc/" target="_blank">Bitcoin Cash</a></li>   <li><a href="https://docs.bnbchain.org/docs/beaconchain/develop/api-reference/node-rpc#5-rpc-endpoint-list" target="_blank">BNB Beacon Chain</a></li>   <li><a href="https://docs.bnbchain.org/docs/rpc" target="_blank">BNB Smart Chain</a></li>   <li><a href="https://docs.cardano.org/cardano-components/cardano-rosetta" target="_blank">Cardano</a></li>   <li><a href="https://explorer.celo.org/api-docs" target="_blank">Celo</a></li>   <li><a href="https://cronos.org/docs/resources/chain-integration.html" target="_blank">Cronos</a></li>   <li><a href="https://dogecoin.com/" target="_blank">Dogecoin</a></li>   <li><a href="https://docs.elrond.com/sdk-and-tools/rest-api/nodes/" target="_blank">Elrond</a></li>   <li><a href="https://developers.eos.io/welcome/latest/reference/nodeos-rpc-api-reference" target="_blank">EOSIO</a></li>   <li><a href="https://ethereum.org/en/developers/docs/apis/json-rpc/" target="_blank">Ethereum</a></li>   <li><a href="https://docs.fantom.foundation/api/public-api-endpoints" target="_blank">Fantom</a></li>   <li><a href="https://developers.flow.com/http-api" target="_blank">Flow</a></li>   <li><a href="https://developers.gnosischain.com/for-developers/developer-resources" target="_blank">Gnosis</a></li>   <li><a href="https://docs.harmony.one/home/developers/api" target="_blank">Harmony</a></li>   <li><a href="https://docs.klaytn.foundation/dapp/json-rpc" target="_blank">Klaytn</a></li>   <li><a href="https://docs.kcc.io/" target="_blank">KuCoin Community Chain</a></li>   <li><a href="https://guide.kusama.network/docs/build-node-interaction/" target="_blank">Kusama</a></li>   <li><a href="https://lisk.com/documentation/lisk-service/references/api.html" target="_blank">Lisk</a></li>   <li><a href="https://litecoin.org/" target="_blank">Litecoin</a></li>   <li><a href="https://docs.near.org/api/rpc/introduction" target="_blank">NEAR</a></li>   <li><a href="https://docs.neo.org/docs/en-us/reference/rpc/latest-version/api.html" target="_blank">Neo</a></li>   <li><a href="https://docs.oasis.dev/oasis-core/oasis-node/rpc/" target="_blank">Oasis Network</a></li>   <li><a href="https://community.optimism.io/docs/developers/build/json-rpc/" target="_blank">Optimism</a></li>   <li><a href="https://docs.palm.io/Get-Started/Connect/Overview/" target="_blank">Palm</a></li>   <li><a href="https://wiki.polkadot.network/docs/build-node-interaction" target="_blank">Polkadot</a></li>   <li><a href="https://polygon.technology/developers" target="_blank">Polygon</a></li>   <li><a href="https://developers.rsk.co/rsk/node/architecture/json-rpc/" target="_blank">RSK</a></li>   <li><a href="https://docs.solana.com/developing/clients/jsonrpc-api" target="_blank">Solana</a></li>   <li><a href="https://developers.stellar.org/api" target="_blank">Stellar</a></li>   <li><a href="https://opentezos.com/tezos-basics/cli-and-rpc/" target="_blank">Tezos</a></li>   <li><a href="https://developers.tron.network/reference/full-node-api-overview" target="_blank">TRON</a></li>   <li><a href="https://www.vechain.org/" target="_blank">VeChain</a></li>   <li><a href="https://apidocs.xinfin.network/docs/" target="_blank">XinFin</a></li>   <li><a href="https://xrpl.org/public-api-methods.html" target="_blank">XRP</a></li>   <li><a href="https://zcash-rpc.github.io/" target="_blank">ZCash</a></li>   <li><a href="https://dev.zilliqa.com/docs/apis/api-introduction" target="_blank">Zilliqa</a></li> </ul>

### Example

[✨ View "nodeJsonPostRpcDriver.php"](../../examples/Api/NodeRPCApi/nodeJsonPostRpcDriver.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nodeJsonRpcGetDriver()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nodeRPC()->nodeJsonRpcGetDriver(
    string $chain,
    [ string $x_api_key, ]
    [ string $node_type, ]
    [ string $rpc_path ]
): object
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to communicate with. |
 **$x_api_key** | **string**  | Tatum X-API-Key used for authorization. You can omit this path parameter and either use the X-Api-Key header, or the API key tied to your IP address without any header. | [optional]
 **$node_type** | **string**  | Type of the node to access for Algorand. | [optional]
 **$rpc_path** | **string**  | Optional path of rpc call for non EVM nodes, e.g. Algorand or Stellar. | [optional]

### Return type

**object**

### Description

Connect to the blockchain node through an RPC driver

<p><b>2 credits per RPC method in an API call</b></p> <p>Connect directly to the blockchain node provided by Tatum.</p> <p>The <code>GET</code> method is used. The API endpoint URL acts as an HTTP-based RPC driver.</p> <p>This API is supported for the following blockchains:</p> <ul>   <li><a href="https://developer.algorand.org/docs/rest-apis/restendpoints/" target="_blank">Algorand</a></li>   <li><a href="https://docs.bnbchain.org/docs/beaconchain/develop/api-reference/node-rpc#5-rpc-endpoint-list" target="_blank">BNB Beacon Chain</a></li>   <li><a href="https://docs.elrond.com/sdk-and-tools/rest-api/nodes/" target="_blank">Elrond</a></li>   <li><a href="https://developers.flow.com/http-api" target="_blank">Flow</a></li>   <li><a href="https://lisk.com/documentation/lisk-service/references/api.html" target="_blank">Lisk</a></li>   <li><a href="https://developers.stellar.org/api" target="_blank">Stellar</a></li>   <li><a href="https://opentezos.com/tezos-basics/cli-and-rpc/" target="_blank">Tezos</a></li>   <li><a href="https://developers.tron.network/reference/full-node-api-overview" target="_blank">TRON</a></li> </ul>

### Example

[✨ View "nodeJsonRpcGetDriver.php"](../../examples/Api/NodeRPCApi/nodeJsonRpcGetDriver.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)

## `nodeJsonRpcPutDriver()`

### Type signature

```php
$sdk->{mainnet/testnet}()->api()->nodeRPC()->nodeJsonRpcPutDriver(
    string $chain,
    object $body,
    [ string $x_api_key, ]
    [ string $node_type, ]
    [ string $rpc_path ]
): object
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **$chain** | **string**  | Blockchain to communicate with. |
 **$body** | **object**  |  |
 **$x_api_key** | **string**  | Tatum X-API-Key used for authorization. You can omit this path parameter and either use the X-Api-Key header, or the API key tied to your IP address without any header. | [optional]
 **$node_type** | **string**  | Type of the node to access for Algorand. | [optional]
 **$rpc_path** | **string**  | Optional path of rpc call for non EVM nodes, e.g. Algorand or Stellar. | [optional]

### Return type

**object**

### Description

Connect to the blockchain node through an RPC driver

<p><b>2 credits per RPC method in an API call</b></p> <p>Connect directly to the blockchain node provided by Tatum.</p> <p>The <code>PUT</code> method is used. The API endpoint URL acts as an HTTP-based RPC driver.</p> <p>In the request body, provide valid Web3 RPC method content, for example:</p> <pre> {   "jsonrpc": "2.0",   "id": 1,   "method": "method_name",   "params": [] } </pre> <p>For the blockchains using the JSON-RPC 2.0 specification, you can submit multiple RPC methods in one API call:</p> <pre> [   {     "jsonrpc": "2.0",     "id": 1,     "method": "method_1_name",     "params": []   },   {     "jsonrpc": "2.0",     "id": 2,     "method": "method_2_name",     "params": []   },   ... ] </pre> <p>This API is supported for the following blockchains:</p> <ul>   <li><a href="https://developer.algorand.org/docs/rest-apis/restendpoints/" target="_blank">Algorand</a></li>   <li><a href="https://docs.bnbchain.org/docs/beaconchain/develop/api-reference/node-rpc#5-rpc-endpoint-list" target="_blank">BNB Beacon Chain</a></li>   <li><a href="https://docs.elrond.com/sdk-and-tools/rest-api/nodes/" target="_blank">Elrond</a></li>   <li><a href="https://developers.stellar.org/api" target="_blank">Stellar</a></li> </ul>

### Example

[✨ View "nodeJsonRpcPutDriver.php"](../../examples/Api/NodeRPCApi/nodeJsonRpcPutDriver.php)

[[Back to top]](#) | [[Back to API Endpoints]](../index.md#api-endpoints)
