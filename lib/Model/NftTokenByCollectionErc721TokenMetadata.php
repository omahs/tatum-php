<?php

/**
 * NftTokenByCollectionErc721TokenMetadata Model
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
 * NftTokenByCollectionErc721TokenMetadata Model
 */
class NftTokenByCollectionErc721TokenMetadata extends AbstractModel {

    public const _D = null;
    protected static $_name = "NftTokenByCollectionErc721TokenMetadata";
    protected static $_definition = [
        "token_id" => ["tokenId", "string", 'uint256', "getTokenId", "setTokenId", null, ["r" => 0, "xl" => 78]], 
        "url" => ["url", "string", null, "getUrl", "setUrl", null, ["r" => 0]], 
        "metadata" => ["metadata", "object", null, "getMetadata", "setMetadata", null, ["r" => 0]]
    ];

    /**
     * NftTokenByCollectionErc721TokenMetadata
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
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
     * @param string|null $token_id TokenID of the NFT token owned by this address.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTokenId(?string $token_id) {
        return $this->_set("token_id", $token_id);
    }

    /**
     * Get url
     *
     * @return string|null
     */
    public function getUrl(): ?string {
        return $this->_data["url"];
    }

    /**
     * Set url
     * 
     * @param string|null $url Metadata URL of the TokenID. This data don't have to be present, safest way (if not present) is to obtain them from the NFT Contract.tokenURI() method call.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUrl(?string $url) {
        return $this->_set("url", $url);
    }

    /**
     * Get metadata
     *
     * @return object|null
     */
    public function getMetadata(): ?object {
        return $this->_data["metadata"];
    }

    /**
     * Set metadata
     * 
     * @param object|null $metadata Metadata scheme obtained from the url. This data don't have to be present, safest way (if not present) is to obtain them from the NFT Contract.tokenURI() method call.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMetadata(?object $metadata) {
        return $this->_set("metadata", $metadata);
    }
}
