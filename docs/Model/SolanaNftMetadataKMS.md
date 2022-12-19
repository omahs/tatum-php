# SolanaNftMetadataKMS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the NFT |
**symbol** | **string** | The symbol or abbreviated name of the NFT |
**seller_fee_basis_points** | **float** | The basis points of the seller fee |
**uri** | **string** | The URL pointing to the NFT metadata; for more information, see &lt;a href&#x3D;\&quot;https://eips.ethereum.org/EIPS/eip-721#specification\&quot; target&#x3D;\&quot;_blank\&quot;&gt;EIP-721&lt;/a&gt; |
**collection** | **string** | The blockchain address of the NFT collection where the NFT will be minted in. The minted NFT will get verified in the collection on behalf of the blockchain address specified in the &lt;code&gt;from&lt;/code&gt; parameter. To know more about Solana collections and verification, refer to the &lt;a href&#x3D;\&quot;https://docs.metaplex.com/programs/token-metadata/certified-collections\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Solana user documentation&lt;/a&gt; and &lt;a href&#x3D;\&quot;https://apidoc.tatum.io/tag/NFT-(ERC-721-or-compatible)#operation/NftVerifyInCollection\&quot; target&#x3D;\&quot;_blank\&quot;&gt;NFT verification API&lt;/a&gt;. | [optional]
**mutable** | **bool** | Specifies whether the NFT metadata is mutable (\&quot;true\&quot;) or immutable (\&quot;false\&quot;); if not set, defaults to \&quot;true\&quot; | [optional] [default to true]
**creators** | [**\Tatum\Model\SolanaNftMetadataCreator[]**](SolanaNftMetadataCreator.md) | The blockchain addresses where the royalties will be sent every time the minted NFT is transferred | [optional]

[[Back to API list]](../../README.md#api-endpoints)