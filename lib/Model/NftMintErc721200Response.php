<?php

/**
 * NftMintErc721_200_response Model
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
 * NftMintErc721_200_response Model
 */
class NftMintErc721200Response extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "NftMintErc721_200_response";
    protected static $_definition = [
        "tx_id" => ["txId", "string", null, "getTxId", "setTxId"], 
        "token_id" => ["tokenId", "string", 'uint256', "getTokenId", "setTokenId"], 
        "nft_address" => ["nftAddress", "string", null, "getNftAddress", "setNftAddress"], 
        "nft_account_address" => ["nftAccountAddress", "string", null, "getNftAccountAddress", "setNftAccountAddress"], 
        "asset_index" => ["assetIndex", "float", null, "getAssetIndex", "setAssetIndex"], 
        "confirmed" => ["confirmed", "bool", null, "getConfirmed", "setConfirmed"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"]
    ];

    /**
     * NftMintErc721200Response
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["tx_id"=>null, "token_id"=>null, "nft_address"=>null, "nft_account_address"=>null, "asset_index"=>null, "confirmed"=>null, "signature_id"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['tx_id'])) {
            $ip[] = "'tx_id' can't be null";
        }
        if (!is_null($this->_data['token_id']) && (mb_strlen($this->_data['token_id']) > 78)) {
            $ip[] = "'token_id' length must be <= 78";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get tx_id
     *
     * @return string
     */
    public function getTxId(): string {
        return $this->_data["tx_id"];
    }

    /**
     * Set tx_id
     * 
     * @param string $tx_id The ID of the transaction
     * @return $this
     */
    public function setTxId(string $tx_id) {
        $this->_data['tx_id'] = $tx_id;

        return $this;
    }

    /**
     * Get token_id
     *
     * @return string|null
     */
    public function getTokenId(): ?string {
        return $this->_data["token_id"];
    }

    /**
     * Set token_id
     * 
     * @param string|null $token_id ID of the token.
     * @return $this
     */
    public function setTokenId(?string $token_id) {
        if (!is_null($token_id) && (mb_strlen($token_id) > 78)) {
            throw new IAE('NftMintErc721200Response.setTokenId: $token_id length must be <= 78');
        }
        $this->_data['token_id'] = $token_id;

        return $this;
    }

    /**
     * Get nft_address
     *
     * @return string|null
     */
    public function getNftAddress(): ?string {
        return $this->_data["nft_address"];
    }

    /**
     * Set nft_address
     * 
     * @param string|null $nft_address The blockchain address of the minted NFT
     * @return $this
     */
    public function setNftAddress(?string $nft_address) {
        $this->_data['nft_address'] = $nft_address;

        return $this;
    }

    /**
     * Get nft_account_address
     *
     * @return string|null
     */
    public function getNftAccountAddress(): ?string {
        return $this->_data["nft_account_address"];
    }

    /**
     * Set nft_account_address
     * 
     * @param string|null $nft_account_address The blockchain address that received the minted NFT; this address was created under the recipient's account address (the one in the <code>to</code> parameter of the request body), is owned by the recipient's address, and has the same private key
     * @return $this
     */
    public function setNftAccountAddress(?string $nft_account_address) {
        $this->_data['nft_account_address'] = $nft_account_address;

        return $this;
    }

    /**
     * Get asset_index
     *
     * @return float|null
     */
    public function getAssetIndex(): ?float {
        return $this->_data["asset_index"];
    }

    /**
     * Set asset_index
     * 
     * @param float|null $asset_index The ID of the minted NFT
     * @return $this
     */
    public function setAssetIndex(?float $asset_index) {
        $this->_data['asset_index'] = $asset_index;

        return $this;
    }

    /**
     * Get confirmed
     *
     * @return bool|null
     */
    public function getConfirmed(): ?bool {
        return $this->_data["confirmed"];
    }

    /**
     * Set confirmed
     * 
     * @param bool|null $confirmed If set to \"true\", the transaction was included in the block within five rounds; otherwise, returned set to \"false\". \"false\" does not mean that the transaction was not included in the block; the Tatum API just does not wait for that much time to return the response.
     * @return $this
     */
    public function setConfirmed(?bool $confirmed) {
        $this->_data['confirmed'] = $confirmed;

        return $this;
    }

    /**
     * Get signature_id
     *
     * @return string
     */
    public function getSignatureId(): string {
        return $this->_data["signature_id"];
    }

    /**
     * Set signature_id
     * 
     * @param string $signature_id The internal Tatum ID of the prepared transaction for Key Management Sysytem (KMS) to sign<br/>This is different from the <code>signatureId</code> parameter that you provided in the request body. The <code>signatureId</code> parameter in the request body specifies the signature ID associated with the private key in KMS.
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

        return $this;
    }
}