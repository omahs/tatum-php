<?php

/**
 * Implementation of Algorand API
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @see       https://apidoc.tatum.io/tag/Algorand
 *
 * NOTE: This class is auto generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Api;

use InvalidArgumentException as IAE;
use Tatum\Sdk\Serializer as S;

/**
 * Algorand API
 */
class AlgorandApi extends AbstractApi {
    /**
     * Access Algorand Algod GET node endpoints
     *
     * @param string $x_api_key Tatum X-API-Key used for authorization.
     * @param string $algod_path &#x60;**&#x60; path of algod.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\AlgoBlock
     */
    public function algoNodeGetDriver(string $x_api_key, string $algod_path) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\AlgoBlock $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/algorand/node/algod/{xApiKey}/{algodPath}", ["xApiKey" => $x_api_key, "algodPath" => $algod_path]), [], $rHeaders, []
            ), 
            "\Tatum\Model\AlgoBlock"
        );
            
        return $result;
    }
    
    /**
     * Access Algorand Indexer GET node endpoints
     *
     * @param string $x_api_key Tatum X-API-Key used for authorization.
     * @param string $indexer_path &#x60;**&#x60; path of indexer.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\AlgoTx
     */
    public function algoNodeIndexerGetDriver(string $x_api_key, string $indexer_path) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\AlgoTx $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/algorand/node/indexer/{xApiKey}/{indexerPath}", ["xApiKey" => $x_api_key, "indexerPath" => $indexer_path]), [], $rHeaders, []
            ), 
            "\Tatum\Model\AlgoTx"
        );
            
        return $result;
    }
    
    /**
     * Access Algorand Algod POST node endpoints
     *
     * @param string $x_api_key Tatum X-API-Key used for authorization.
     * @param string $algod_path &#x60;**&#x60; path of algod.
     * @param \Tatum\Model\AlgoNodePostDriverRequest $algo_node_post_driver_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\AlgoNodePostDriver200Response
     */
    public function algoNodePostDriver(string $x_api_key, string $algod_path, \Tatum\Model\AlgoNodePostDriverRequest $algo_node_post_driver_request) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\AlgoNodePostDriver200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", S::parse("/v3/algorand/node/algod/{xApiKey}/{algodPath}", ["xApiKey" => $x_api_key, "algodPath" => $algod_path]), [], $rHeaders, [], $algo_node_post_driver_request
            ), 
            "\Tatum\Model\AlgoNodePostDriver200Response"
        );
            
        return $result;
    }
    
    /**
     * Broadcast signed Algorand transaction
     *
     * @param \Tatum\Model\BroadcastKMS $broadcast_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\AlgoTransactionHashKMS
     */
    public function algoandBroadcast(\Tatum\Model\BroadcastKMS $broadcast_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\AlgoTransactionHashKMS $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/algorand/broadcast", [], $rHeaders, [], $broadcast_kms
            ), 
            "\Tatum\Model\AlgoTransactionHashKMS"
        );
            
        return $result;
    }
    
    /**
     * Enable receiving asset on account
     *
     * @param \Tatum\Model\ReceiveAlgorandAsset $receive_algorand_asset 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
     */
    public function algorandAssetReceiveAlgorandAsset(\Tatum\Model\ReceiveAlgorandAsset $receive_algorand_asset) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/algorand/asset/receive#postReceiveAlgorandAsset", [], $rHeaders, [], $receive_algorand_asset
            ), 
            "\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response"
        );
            
        return $result;
    }
    
    /**
     * Enable receiving asset on account
     *
     * @param \Tatum\Model\ReceiveAlgorandAssetKMS $receive_algorand_asset_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
     */
    public function algorandAssetReceiveAlgorandAssetKMS(\Tatum\Model\ReceiveAlgorandAssetKMS $receive_algorand_asset_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/algorand/asset/receive#postReceiveAlgorandAssetKMS", [], $rHeaders, [], $receive_algorand_asset_kms
            ), 
            "\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response"
        );
            
        return $result;
    }
    
    /**
     * Generate Algorand account address from private key
     *
     * @param string $priv private key of wallet.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\AlgorandGenerateAddress200Response
     */
    public function algorandGenerateAddress(string $priv) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\AlgorandGenerateAddress200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/algorand/address/{priv}", ["priv" => $priv]), [], $rHeaders, []
            ), 
            "\Tatum\Model\AlgorandGenerateAddress200Response"
        );
            
        return $result;
    }
    
    /**
     * Generate Algorand wallet
     *
     * @param string|null $mnemonic Mnemonic to use for generation of extended public and private keys.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\AlgoWallet
     */
    public function algorandGenerateWallet(string $mnemonic = null) {
        if (isset($mnemonic) && strlen($mnemonic) > 500) {
            throw new IAE('Invalid length for "$mnemonic" when calling AlgorandApi.algorandGenerateWallet, must be smaller than or equal to 500');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\AlgoWallet $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/algorand/wallet", [
                    "mnemonic" => isset($mnemonic) ? S::toQueryValue($mnemonic) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\AlgoWallet"
        );
            
        return $result;
    }
    
    /**
     * Get Algorand Account balance
     *
     * @param string $address Account address you want to get balance of
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\AlgorandGetBalance200Response
     */
    public function algorandGetBalance(string $address) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\AlgorandGetBalance200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/algorand/account/balance/{address}", ["address" => $address]), [], $rHeaders, []
            ), 
            "\Tatum\Model\AlgorandGetBalance200Response"
        );
            
        return $result;
    }
    
    /**
     * Get Algorand block by block round number
     *
     * @param float $round_number Block round number
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\AlgoBlock
     */
    public function algorandGetBlock(float $round_number) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\AlgoBlock $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/algorand/block/{roundNumber}", ["roundNumber" => $round_number]), [], $rHeaders, []
            ), 
            "\Tatum\Model\AlgoBlock"
        );
            
        return $result;
    }
    
    /**
     * Get current block number
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return float
     */
    public function algorandGetCurrentBlock() {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var float $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/algorand/block/current", [], $rHeaders, []
            ), 
            "float"
        );
            
        return $result;
    }
    
    /**
     * Get Algorand Transactions between from and to
     *
     * @param string $from Start timestamp in specified period of time
     * @param string $to End timestamp in specified period of time
     * @param string|null $limit page size for pagination
     * @param string|null $next Algorand Next Token for getting the next page results
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\AlgoTxsWithPagination
     */
    public function algorandGetPayTransactionsByFromTo(string $from, string $to, string $limit = null, string $next = null) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\AlgoTxsWithPagination $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/algorand/transactions/{from}/{to}", ["from" => $from, "to" => $to]), [
                    "limit" => isset($limit) ? S::toQueryValue($limit) : null,
                    "next" => isset($next) ? S::toQueryValue($next) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\AlgoTxsWithPagination"
        );
            
        return $result;
    }
    
    /**
     * Get Algorand Transaction
     *
     * @param string $txid Transaction id
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\AlgoTx
     */
    public function algorandGetTransaction(string $txid) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\AlgoTx $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/algorand/transaction/{txid}", ["txid" => $txid]), [], $rHeaders, []
            ), 
            "\Tatum\Model\AlgoTx"
        );
            
        return $result;
    }
    
    /**
     * Send Algos to an Algorand account
     *
     * @param \Tatum\Model\TransferAlgorandBlockchain $transfer_algorand_blockchain 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
     */
    public function algorandTransactionTransferAlgorandBlockchain(\Tatum\Model\TransferAlgorandBlockchain $transfer_algorand_blockchain) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/algorand/transaction#postTransferAlgorandBlockchain", [], $rHeaders, [], $transfer_algorand_blockchain
            ), 
            "\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response"
        );
            
        return $result;
    }
    
    /**
     * Send Algos to an Algorand account
     *
     * @param \Tatum\Model\TransferAlgorandBlockchainKMS $transfer_algorand_blockchain_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
     */
    public function algorandTransactionTransferAlgorandBlockchainKMS(\Tatum\Model\TransferAlgorandBlockchainKMS $transfer_algorand_blockchain_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/algorand/transaction#postTransferAlgorandBlockchainKMS", [], $rHeaders, [], $transfer_algorand_blockchain_kms
            ), 
            "\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response"
        );
            
        return $result;
    }
    
}
