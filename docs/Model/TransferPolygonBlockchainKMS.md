# TransferPolygonBlockchainKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data** | **string** | Additional data, that can be passed to blockchain transaction as data property. Only for MATIC transactions. | [optional]
**nonce** | **float** | Nonce to be set to Polygon transaction. If not present, last known nonce will be used. | [optional]
**to** | **string** | Blockchain address to send assets |
**currency** | **string** | Currency to transfer from Polygon Blockchain Account. ERC20 tokens BETH, BBTC, BADA, WMATIC, BDOT, BXRP, BLTC, BBCH are available only for mainnet use. |
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]
**amount** | **string** | Amount to be sent. |
**index** | **float** | If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic. | [optional]
**signature_id** | **string** | Identifier of the private key associated in signing application. Private key, or signature Id must be present. |

[[Back to API list]](../../README.md#api-endpoints)