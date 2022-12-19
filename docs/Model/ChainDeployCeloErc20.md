# ChainDeployCeloErc20

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The blockchain to work with |
**symbol** | **string** | Symbol of the ERC20 token |
**name** | **string** | Name of the ERC20 token |
**total_cap** | **string** | Max supply of ERC20 token. | [optional]
**supply** | **string** | Max supply of ERC20 token. |
**digits** | **float** | Number of decimal points |
**address** | **string** | Address on Ethereum blockchain, where all created ERC20 tokens will be transferred. |
**from_private_key** | **string** | Private key of Ethereum account address, from which the fee for the deployment of ERC20 will be paid. Private key, or signature Id must be present. |
**nonce** | **float** | The nonce to be set to the transaction; if not present, the last known nonce will be used | [optional]
**fee_currency** | **string** | The currency in which the transaction fee will be paid |

[[Back to API list]](../../README.md#api-endpoints)