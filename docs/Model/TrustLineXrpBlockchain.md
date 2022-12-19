# TrustLineXrpBlockchain

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from_account** | **string** | XRP account address. Must be the one used for generating deposit tags. |
**issuer_account** | **string** | Blockchain address of the issuer of the assets to create trust line for. |
**limit** | **string** | Amount of the assets to be permitted to send over this trust line. 0 means deletion of the trust line. |
**token** | **string** | Asset name. Must be 160bit HEX string, e.g. SHA1. |
**from_secret** | **string** | Secret for account. Secret, or signature Id must be present. |
**fee** | **string** | Fee to be paid, in XRP. If omitted, current fee will be calculated. | [optional]

[[Back to API list]](../../README.md#api-endpoints)