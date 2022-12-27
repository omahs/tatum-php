<?php

/**
 * Implementation of NFTERC721OrCompatible API
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

namespace Tatum\Api;

use InvalidArgumentException as IAE;
use Tatum\Sdk\ApiException as APIE;
use Tatum\Sdk\Serializer as S;

/**
 * NFTERC721OrCompatible API
 */
class NFTERC721OrCompatibleApi extends AbstractApi {
    /**
     * Add an NFT minter to an NFT smart contract
     *
     * @param \Tatum\Model\NftAddMinterRequest $nft_add_minter_request 
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BtcTransferBlockchain200Response
     */
    public function nftAddMinter(\Tatum\Model\NftAddMinterRequest $nft_add_minter_request, string $x_testnet_type = 'ethereum-sepolia') {
        $rPath = "/v3/nft/mint/add";
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        return $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, [], $rHeaders, [], $nft_add_minter_request
            ), 
            "\Tatum\Model\BtcTransferBlockchain200Response"
        );
    }
    
    /**
     * Burn an NFT
     *
     * @param \Tatum\Model\NftBurnErc721Request $nft_burn_erc721_request 
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BtcTransferBlockchain200Response
     */
    public function nftBurnErc721(\Tatum\Model\NftBurnErc721Request $nft_burn_erc721_request, string $x_testnet_type = 'ethereum-sepolia') {
        $rPath = "/v3/nft/burn";
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        return $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, [], $rHeaders, [], $nft_burn_erc721_request
            ), 
            "\Tatum\Model\BtcTransferBlockchain200Response"
        );
    }
    
    /**
     * Deploy an NFT smart contract
     *
     * @param \Tatum\Model\NftDeployErc721Request $nft_deploy_erc721_request 
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BtcTransferBlockchain200Response
     */
    public function nftDeployErc721(\Tatum\Model\NftDeployErc721Request $nft_deploy_erc721_request, string $x_testnet_type = 'ethereum-sepolia') {
        $rPath = "/v3/nft/deploy";
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        return $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, [], $rHeaders, [], $nft_deploy_erc721_request
            ), 
            "\Tatum\Model\BtcTransferBlockchain200Response"
        );
    }
    
    /**
     * Get the NFTs from a specific smart contract that a blockchain address holds
     *
     * @param string $chain The blockchain to work with
     * @param string $address The blockchain address that you want to get the token balance of
     * @param string $contract_address The address of the NFT smart contract
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\NftGetBalanceErc721200Response
     */
    public function nftGetBalanceErc721(string $chain, string $address, string $contract_address, string $x_testnet_type = 'ethereum-sepolia') {
        $rPath = "/v3/nft/balance/{chain}/{contractAddress}/{address}";
        $rPath = str_replace("{"."chain"."}", S::toPathValue($chain), $rPath);
        $rPath = str_replace("{"."address"."}", S::toPathValue($address), $rPath);
        $rPath = str_replace("{"."contractAddress"."}", S::toPathValue($contract_address), $rPath);
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        return $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\NftGetBalanceErc721200Response"
        );
    }
    
    /**
     * Get the address of an NFT smart contract by its transaction hash
     *
     * @param string $chain The blockchain to work with
     * @param string $hash Transaction hash
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\NftGetContractAddress200Response
     */
    public function nftGetContractAddress(string $chain, string $hash, string $x_testnet_type = 'ethereum-sepolia') {
        $rPath = "/v3/nft/address/{chain}/{hash}";
        $rPath = str_replace("{"."chain"."}", S::toPathValue($chain), $rPath);
        $rPath = str_replace("{"."hash"."}", S::toPathValue($hash), $rPath);
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        return $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\NftGetContractAddress200Response"
        );
    }
    
    /**
     * Get NFT metadata
     *
     * @param string $chain The blockchain to work with
     * @param string $contract_address The blockchain address of the NFT to get metadata for
     * @param string $token_id The ID of the NFT to get metadata for&lt;br/&gt;Do &lt;b&gt;not&lt;/b&gt; use this parameter if you are getting metadata for an NFT on Solana, this parameter is irrelevant on Solana.
     * @param string|null $account (Flow only) The account that holds the NFT
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\NftMetadataErc721
     */
    public function nftGetMetadataErc721(string $chain, string $contract_address, string $token_id, string $account = null, string $x_testnet_type = 'ethereum-sepolia') {
        if (strlen($token_id) > 78) {
            throw new IAE('Invalid length for "$token_id" when calling NFTERC721OrCompatibleApi.nftGetMetadataErc721, must be smaller than or equal to 78');
        }

        $rPath = "/v3/nft/metadata/{chain}/{contractAddress}/{tokenId}";
        $rPath = str_replace("{"."chain"."}", S::toPathValue($chain), $rPath);
        $rPath = str_replace("{"."contractAddress"."}", S::toPathValue($contract_address), $rPath);
        $rPath = str_replace("{"."tokenId"."}", S::toPathValue($token_id), $rPath);
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        return $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", $rPath, [
                    "account" => isset($account) ? S::toQueryValue($account) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\NftMetadataErc721"
        );
    }
    
    /**
     * Get NFT provenance information
     *
     * @param string $chain The blockchain to work with
     * @param string $contract_address The blockchain address of the NFT to get provenance information for
     * @param string $token_id The ID of the NFT to get provenance information for
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\NftProvenanceDataErc721[]
     */
    public function nftGetProvenanceDataErc721(string $chain, string $contract_address, string $token_id, string $x_testnet_type = 'ethereum-sepolia') {
        if (strlen($token_id) > 78) {
            throw new IAE('Invalid length for "$token_id" when calling NFTERC721OrCompatibleApi.nftGetProvenanceDataErc721, must be smaller than or equal to 78');
        }

        $rPath = "/v3/nft/provenance/{chain}/{contractAddress}/{tokenId}";
        $rPath = str_replace("{"."chain"."}", S::toPathValue($chain), $rPath);
        $rPath = str_replace("{"."contractAddress"."}", S::toPathValue($contract_address), $rPath);
        $rPath = str_replace("{"."tokenId"."}", S::toPathValue($token_id), $rPath);
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        return $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\NftProvenanceDataErc721[]"
        );
    }
    
    /**
     * Get NFT royalty information
     *
     * @param string $chain The blockchain to work with
     * @param string $contract_address The blockchain address of the NFT to get royalty information for
     * @param string $token_id The ID of the NFT to get royalty information for&lt;br/&gt;Do &lt;b&gt;not&lt;/b&gt; use this parameter if you are getting metadata for an NFT on Solana, this parameter is irrelevant on Solana.
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\NftRoyaltyErc721
     */
    public function nftGetRoyaltyErc721(string $chain, string $contract_address, string $token_id, string $x_testnet_type = 'ethereum-sepolia') {
        if (strlen($token_id) > 78) {
            throw new IAE('Invalid length for "$token_id" when calling NFTERC721OrCompatibleApi.nftGetRoyaltyErc721, must be smaller than or equal to 78');
        }

        $rPath = "/v3/nft/royalty/{chain}/{contractAddress}/{tokenId}";
        $rPath = str_replace("{"."chain"."}", S::toPathValue($chain), $rPath);
        $rPath = str_replace("{"."contractAddress"."}", S::toPathValue($contract_address), $rPath);
        $rPath = str_replace("{"."tokenId"."}", S::toPathValue($token_id), $rPath);
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        return $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\NftRoyaltyErc721"
        );
    }
    
    /**
     * Get all NFTs that a blockchain address holds
     *
     * @param string $chain The blockchain to work with
     * @param string $address The blockchain address that you want to get the token balance of
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\NftTokenByAddressErc721[]
     */
    public function nftGetTokensByAddressErc721(string $chain, string $address) {
        $rPath = "/v3/nft/address/balance/{chain}/{address}";
        $rPath = str_replace("{"."chain"."}", S::toPathValue($chain), $rPath);
        $rPath = str_replace("{"."address"."}", S::toPathValue($address), $rPath);
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        return $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\NftTokenByAddressErc721[]"
        );
    }
    
    /**
     * Get all NFTs from a collection
     *
     * @param string $chain The blockchain to work with
     * @param float $page_size Max number of items per page is 50.
     * @param string $address The blockchain address of the collection
     * @param float|null $offset Offset to obtain next page of the data.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\NftTokenByCollectionErc721[]
     */
    public function nftGetTokensByCollectionErc721(string $chain, float $page_size, string $address, float $offset = null) {
        if ($page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling NFTERC721OrCompatibleApi.nftGetTokensByCollectionErc721, must be smaller than or equal to 50');
        }

        if ($page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling NFTERC721OrCompatibleApi.nftGetTokensByCollectionErc721, must be bigger than or equal to 1.');
        }

        $rPath = "/v3/nft/collection/{chain}/{address}";
        $rPath = str_replace("{"."chain"."}", S::toPathValue($chain), $rPath);
        $rPath = str_replace("{"."address"."}", S::toPathValue($address), $rPath);
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        return $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", $rPath, [
                    "pageSize" => S::toQueryValue($page_size),
                
                    "offset" => isset($offset) ? S::toQueryValue($offset) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\NftTokenByCollectionErc721[]"
        );
    }
    
    /**
     * Get an NFT transaction by its hash
     *
     * @param string $chain The blockchain to work with
     * @param string $hash The hash (ID) of the NFT transaction
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\NftGetTransactErc721200Response
     */
    public function nftGetTransactErc721(string $chain, string $hash, string $x_testnet_type = 'ethereum-sepolia') {
        $rPath = "/v3/nft/transaction/{chain}/{hash}";
        $rPath = str_replace("{"."chain"."}", S::toPathValue($chain), $rPath);
        $rPath = str_replace("{"."hash"."}", S::toPathValue($hash), $rPath);
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        return $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", $rPath, [], $rHeaders, []
            ), 
            "\Tatum\Model\NftGetTransactErc721200Response"
        );
    }
    
    /**
     * Get NFT transactions on a blockchain address
     *
     * @param string $chain The blockchain to work with
     * @param string $address Account address you want to get balance of
     * @param string $token_address Address of the token smart contract
     * @param float $page_size Max number of items per page is 50.
     * @param float|null $offset Offset to obtain next page of the data.
     * @param float|null $from Transactions from this block onwards will be included.
     * @param float|null $to Transactions up to this block will be included.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\NftTx[]
     */
    public function nftGetTransactionByAddress(string $chain, string $address, string $token_address, float $page_size, float $offset = null, float $from = null, float $to = null) {
        if ($page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling NFTERC721OrCompatibleApi.nftGetTransactionByAddress, must be smaller than or equal to 50');
        }

        if ($page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling NFTERC721OrCompatibleApi.nftGetTransactionByAddress, must be bigger than or equal to 1.');
        }

        if (isset($from) && $from < 0) {
            throw new IAE('Invalid value for "$from" when calling NFTERC721OrCompatibleApi.nftGetTransactionByAddress, must be bigger than or equal to 0.');
        }

        if (isset($to) && $to < 0) {
            throw new IAE('Invalid value for "$to" when calling NFTERC721OrCompatibleApi.nftGetTransactionByAddress, must be bigger than or equal to 0.');
        }

        $rPath = "/v3/nft/transaction/{chain}/{address}/{tokenAddress}";
        $rPath = str_replace("{"."chain"."}", S::toPathValue($chain), $rPath);
        $rPath = str_replace("{"."address"."}", S::toPathValue($address), $rPath);
        $rPath = str_replace("{"."tokenAddress"."}", S::toPathValue($token_address), $rPath);
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        return $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", $rPath, [
                    "pageSize" => S::toQueryValue($page_size),
                
                    "offset" => isset($offset) ? S::toQueryValue($offset) : null,
                
                    "from" => isset($from) ? S::toQueryValue($from) : null,
                
                    "to" => isset($to) ? S::toQueryValue($to) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\NftTx[]"
        );
    }
    
    /**
     * Get NFT transactions for an NFT
     *
     * @param string $chain The blockchain to work with
     * @param string $token_id NFT Token ID.
     * @param string $token_address Address of the token smart contract
     * @param float $page_size Max number of items per page is 50.
     * @param float|null $offset Offset to obtain next page of the data.
     * @param float|null $from Transactions from this block onwards will be included.
     * @param float|null $to Transactions up to this block will be included.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\NftTx[]
     */
    public function nftGetTransactionByToken(string $chain, string $token_id, string $token_address, float $page_size, float $offset = null, float $from = null, float $to = null) {
        if (strlen($token_id) > 78) {
            throw new IAE('Invalid length for "$token_id" when calling NFTERC721OrCompatibleApi.nftGetTransactionByToken, must be smaller than or equal to 78');
        }

        if ($page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling NFTERC721OrCompatibleApi.nftGetTransactionByToken, must be smaller than or equal to 50');
        }

        if ($page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling NFTERC721OrCompatibleApi.nftGetTransactionByToken, must be bigger than or equal to 1.');
        }

        if (isset($from) && $from < 0) {
            throw new IAE('Invalid value for "$from" when calling NFTERC721OrCompatibleApi.nftGetTransactionByToken, must be bigger than or equal to 0.');
        }

        if (isset($to) && $to < 0) {
            throw new IAE('Invalid value for "$to" when calling NFTERC721OrCompatibleApi.nftGetTransactionByToken, must be bigger than or equal to 0.');
        }

        $rPath = "/v3/nft/transaction/tokenId/{chain}/{tokenAddress}/{tokenId}";
        $rPath = str_replace("{"."chain"."}", S::toPathValue($chain), $rPath);
        $rPath = str_replace("{"."tokenId"."}", S::toPathValue($token_id), $rPath);
        $rPath = str_replace("{"."tokenAddress"."}", S::toPathValue($token_address), $rPath);
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        return $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", $rPath, [
                    "pageSize" => S::toQueryValue($page_size),
                
                    "offset" => isset($offset) ? S::toQueryValue($offset) : null,
                
                    "from" => isset($from) ? S::toQueryValue($from) : null,
                
                    "to" => isset($to) ? S::toQueryValue($to) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\NftTx[]"
        );
    }
    
    /**
     * Mint an NFT
     *
     * @param \Tatum\Model\NftMintErc721Request $nft_mint_erc721_request 
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\NftMintErc721200Response
     */
    public function nftMintErc721(\Tatum\Model\NftMintErc721Request $nft_mint_erc721_request, string $x_testnet_type = 'ethereum-sepolia') {
        $rPath = "/v3/nft/mint";
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        return $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, [], $rHeaders, [], $nft_mint_erc721_request
            ), 
            "\Tatum\Model\NftMintErc721200Response"
        );
    }
    
    /**
     * Mint multiple NFTs
     *
     * @param \Tatum\Model\NftMintMultipleErc721Request $nft_mint_multiple_erc721_request 
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\NftMintMultipleErc721200Response
     */
    public function nftMintMultipleErc721(\Tatum\Model\NftMintMultipleErc721Request $nft_mint_multiple_erc721_request, string $x_testnet_type = 'ethereum-sepolia') {
        $rPath = "/v3/nft/mint/batch";
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        return $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, [], $rHeaders, [], $nft_mint_multiple_erc721_request
            ), 
            "\Tatum\Model\NftMintMultipleErc721200Response"
        );
    }
    
    /**
     * Transfer an NFT
     *
     * @param \Tatum\Model\NftTransferErc721Request $nft_transfer_erc721_request 
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BtcTransferBlockchain200Response
     */
    public function nftTransferErc721(\Tatum\Model\NftTransferErc721Request $nft_transfer_erc721_request, string $x_testnet_type = 'ethereum-sepolia') {
        $rPath = "/v3/nft/transaction";
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        return $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, [], $rHeaders, [], $nft_transfer_erc721_request
            ), 
            "\Tatum\Model\BtcTransferBlockchain200Response"
        );
    }
    
    /**
     * Update NFT royalty information
     *
     * @param \Tatum\Model\NftUpdateCashbackErc721Request $nft_update_cashback_erc721_request 
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BtcTransferBlockchain200Response
     */
    public function nftUpdateCashbackErc721(\Tatum\Model\NftUpdateCashbackErc721Request $nft_update_cashback_erc721_request, string $x_testnet_type = 'ethereum-sepolia') {
        $rPath = "/v3/nft/royalty";
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        return $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", $rPath, [], $rHeaders, [], $nft_update_cashback_erc721_request
            ), 
            "\Tatum\Model\BtcTransferBlockchain200Response"
        );
    }
    
    /**
     * Verify an NFT in an NFT collection on Solana
     *
     * @param \Tatum\Model\NftVerifyInCollectionRequest $nft_verify_in_collection_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BtcTransferBlockchain200Response
     */
    public function nftVerifyInCollection(\Tatum\Model\NftVerifyInCollectionRequest $nft_verify_in_collection_request) {
        $rPath = "/v3/nft/verify";
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        return $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", $rPath, [], $rHeaders, [], $nft_verify_in_collection_request
            ), 
            "\Tatum\Model\BtcTransferBlockchain200Response"
        );
    }
    
}
