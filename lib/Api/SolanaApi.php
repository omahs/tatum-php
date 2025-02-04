<?php

/**
 * Implementation of Solana API
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @see       https://apidoc.tatum.io
 *
 * NOTE: This class is auto generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Api;

use InvalidArgumentException as IAE;
use Tatum\Sdk\Serializer as S;

/**
 * Solana API
 */
class SolanaApi extends AbstractApi {
    /**
     * Broadcast and confirm signed Solana transaction
     *
     * @param \Tatum\Model\SolanaBroadcastConfirm $solana_broadcast_confirm 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\SolanaTransactionHashWithConfirm
     */
    public function solanaBroadcastConfirm(\Tatum\Model\SolanaBroadcastConfirm $solana_broadcast_confirm) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\SolanaTransactionHashWithConfirm $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/solana/broadcast/confirm", [], $rHeaders, [], $solana_broadcast_confirm
            ), 
            "\Tatum\Model\SolanaTransactionHashWithConfirm"
        );
            
        return $result;
    }
    
    /**
     * Generate Solana wallet
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\SolanaWallet
     */
    public function solanaGenerateWallet() {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\SolanaWallet $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/solana/wallet", [], $rHeaders, []
            ), 
            "\Tatum\Model\SolanaWallet"
        );
            
        return $result;
    }
    
    /**
     * Get Solana Account balance
     *
     * @param string $address Account address you want to get balance of
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\SolBalance
     */
    public function solanaGetBalance(string $address) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\SolBalance $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/solana/account/balance/{address}", ["address" => $address]), [], $rHeaders, []
            ), 
            "\Tatum\Model\SolBalance"
        );
            
        return $result;
    }
    
    /**
     * Get Solana block by number
     *
     * @param float $height Block number
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\SolanaBlock
     */
    public function solanaGetBlock(float $height) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\SolanaBlock $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/solana/block/{height}", ["height" => $height]), [], $rHeaders, []
            ), 
            "\Tatum\Model\SolanaBlock"
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
    public function solanaGetCurrentBlock() {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var float $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/solana/block/current", [], $rHeaders, []
            ), 
            "float"
        );
            
        return $result;
    }
    
    /**
     * Get Solana Transaction
     *
     * @param string $hash Transaction hash
     * @param string|null $commitment Commitment of the transaction. If not defined, all transactions are being scanned.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\SolanaTx
     */
    public function solanaGetTransaction(string $hash, string $commitment = null) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\SolanaTx $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/solana/transaction/{hash}", ["hash" => $hash]), [
                    "commitment" => isset($commitment) ? S::toQueryValue($commitment) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\SolanaTx"
        );
            
        return $result;
    }
    
    /**
     * Send SOL from account to account
     *
     * @param \Tatum\Model\TransferSolanaBlockchain $transfer_solana_blockchain 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
     */
    public function solanaTransactionTransferSolanaBlockchain(\Tatum\Model\TransferSolanaBlockchain $transfer_solana_blockchain) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/solana/transaction", [], $rHeaders, [], $transfer_solana_blockchain
            ), 
            "\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response"
        );
            
        return $result;
    }
    
    /**
     * Send SOL from account to account
     *
     * @param \Tatum\Model\TransferSolanaBlockchainKMS $transfer_solana_blockchain_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
     */
    public function solanaTransactionTransferSolanaBlockchainKMS(\Tatum\Model\TransferSolanaBlockchainKMS $transfer_solana_blockchain_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/solana/transaction", [], $rHeaders, [], $transfer_solana_blockchain_kms
            ), 
            "\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response"
        );
            
        return $result;
    }
    
    /**
     * JSON RPC HTTP driver
     *
     * @param string $x_api_key Tatum X-API-Key used for authorization.
     * @param object $body 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return object
     */
    public function solanaWeb3Driver(string $x_api_key, object $body) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var object $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", S::parse("/v3/solana/web3/{xApiKey}", ["xApiKey" => $x_api_key]), [], $rHeaders, [], $body
            ), 
            "object"
        );
            
        return $result;
    }
    
}
