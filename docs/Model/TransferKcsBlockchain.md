# TransferKcsBlockchain

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data** | **string** | Additional data, that can be passed to blockchain transaction as data property. Only for KCS transactions. | [optional]
**nonce** | **float** | Nonce to be set to Kcs transaction. If not present, last known nonce will be used. | [optional]
**to** | **string** | Blockchain address to send assets |
**currency** | **string** | Currency to transfer from Kcs Blockchain Account. ERC20 tokens USDC and USDT are available only for mainnet use. |
**fee** | [**\Tatum\Model\DeployErc20Fee**](DeployErc20Fee.md) |  | [optional]
**amount** | **string** | Amount to be sent. |
**from_private_key** | **string** | Private key of sender address. Private key, or signature Id must be present. |

[[Back to API list]](../../README.md#api-endpoints)