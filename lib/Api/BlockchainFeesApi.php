<?php

/**
 * Implementation of BlockchainFees API
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @see       https://apidoc.tatum.io/tag/BlockchainFees
 *
 * NOTE: This class is auto generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Api;

use InvalidArgumentException as IAE;
use Tatum\Sdk\Serializer as S;

/**
 * BlockchainFees API
 */
class BlockchainFeesApi extends AbstractApi {
    /**
     * Estimate the fee for a transaction
     *
     * @param \Tatum\Model\EstimateFee $estimate_fee 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BlockchainEstimateFee200Response
     */
    public function blockchainEstimateFee(\Tatum\Model\EstimateFee $estimate_fee) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\BlockchainEstimateFee200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/blockchain/estimate#postEstimateFee", [], $rHeaders, [], $estimate_fee
            ), 
            "\Tatum\Model\BlockchainEstimateFee200Response"
        );
            
        return $result;
    }
    
    /**
     * Estimate the fee for a transaction
     *
     * @param \Tatum\Model\EstimateFeeBatchMintNft $estimate_fee_batch_mint_nft 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BlockchainEstimateFee200Response
     */
    public function blockchainEstimateFeeBatchMintNft(\Tatum\Model\EstimateFeeBatchMintNft $estimate_fee_batch_mint_nft) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\BlockchainEstimateFee200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/blockchain/estimate#postEstimateFeeBatchMintNft", [], $rHeaders, [], $estimate_fee_batch_mint_nft
            ), 
            "\Tatum\Model\BlockchainEstimateFee200Response"
        );
            
        return $result;
    }
    
    /**
     * Estimate the fee for a transaction
     *
     * @param \Tatum\Model\EstimateFeeDeployCustodialWallet $estimate_fee_deploy_custodial_wallet 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BlockchainEstimateFee200Response
     */
    public function blockchainEstimateFeeDeployCustodialWallet(\Tatum\Model\EstimateFeeDeployCustodialWallet $estimate_fee_deploy_custodial_wallet) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\BlockchainEstimateFee200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/blockchain/estimate#postEstimateFeeDeployCustodialWallet", [], $rHeaders, [], $estimate_fee_deploy_custodial_wallet
            ), 
            "\Tatum\Model\BlockchainEstimateFee200Response"
        );
            
        return $result;
    }
    
    /**
     * Estimate the fee for a transaction
     *
     * @param \Tatum\Model\EstimateFeeFromAddress $estimate_fee_from_address 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BlockchainEstimateFee200Response
     */
    public function blockchainEstimateFeeFromAddress(\Tatum\Model\EstimateFeeFromAddress $estimate_fee_from_address) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\BlockchainEstimateFee200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/blockchain/estimate#postEstimateFeeFromAddress", [], $rHeaders, [], $estimate_fee_from_address
            ), 
            "\Tatum\Model\BlockchainEstimateFee200Response"
        );
            
        return $result;
    }
    
    /**
     * Estimate the fee for a transaction
     *
     * @param \Tatum\Model\EstimateFeeFromUTXO $estimate_fee_from_utxo 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BlockchainEstimateFee200Response
     */
    public function blockchainEstimateFeeFromUTXO(\Tatum\Model\EstimateFeeFromUTXO $estimate_fee_from_utxo) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\BlockchainEstimateFee200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/blockchain/estimate#postEstimateFeeFromUTXO", [], $rHeaders, [], $estimate_fee_from_utxo
            ), 
            "\Tatum\Model\BlockchainEstimateFee200Response"
        );
            
        return $result;
    }
    
    /**
     * Estimate the fee for a transaction
     *
     * @param \Tatum\Model\EstimateFeeTransferFromCustodial $estimate_fee_transfer_from_custodial 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BlockchainEstimateFee200Response
     */
    public function blockchainEstimateFeeTransferFromCustodial(\Tatum\Model\EstimateFeeTransferFromCustodial $estimate_fee_transfer_from_custodial) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\BlockchainEstimateFee200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/blockchain/estimate#postEstimateFeeTransferFromCustodial", [], $rHeaders, [], $estimate_fee_transfer_from_custodial
            ), 
            "\Tatum\Model\BlockchainEstimateFee200Response"
        );
            
        return $result;
    }
    
    /**
     * Estimate BNB Smart Chain transaction fees
     *
     * @param \Tatum\Model\BscEstimateGas $bsc_estimate_gas 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\PolygonEstimateGas200Response
     */
    public function bscEstimateGas(\Tatum\Model\BscEstimateGas $bsc_estimate_gas) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\PolygonEstimateGas200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/bsc/gas", [], $rHeaders, [], $bsc_estimate_gas
            ), 
            "\Tatum\Model\PolygonEstimateGas200Response"
        );
            
        return $result;
    }
    
    /**
     * Estimate Celo Chain transaction fees
     *
     * @param \Tatum\Model\CeloEstimateGas $celo_estimate_gas 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\CeloEstimateGas200Response
     */
    public function celoEstimateGas(\Tatum\Model\CeloEstimateGas $celo_estimate_gas) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\CeloEstimateGas200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/celo/gas", [], $rHeaders, [], $celo_estimate_gas
            ), 
            "\Tatum\Model\CeloEstimateGas200Response"
        );
            
        return $result;
    }
    
    /**
     * Estimate EGLD transaction fees
     *
     * @param \Tatum\Model\TransactionFeeEgldBlockchain $transaction_fee_egld_blockchain 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EgldEstimateGas200Response
     */
    public function egldEstimateGas(\Tatum\Model\TransactionFeeEgldBlockchain $transaction_fee_egld_blockchain) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\EgldEstimateGas200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/egld/gas", [], $rHeaders, [], $transaction_fee_egld_blockchain
            ), 
            "\Tatum\Model\EgldEstimateGas200Response"
        );
            
        return $result;
    }
    
    /**
     * Estimate Ethereum transaction fees
     *
     * @param \Tatum\Model\EthEstimateGas $eth_estimate_gas 
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EthGasEstimation
     */
    public function ethEstimateGas(\Tatum\Model\EthEstimateGas $eth_estimate_gas, string $x_testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        /** @var \Tatum\Model\EthGasEstimation $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/ethereum/gas", [], $rHeaders, [], $eth_estimate_gas
            ), 
            "\Tatum\Model\EthGasEstimation"
        );
            
        return $result;
    }
    
    /**
     * Estimate multiple Ethereum transaction fees
     *
     * @param \Tatum\Model\EthEstimateGasArray $eth_estimate_gas_array 
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EthGasEstimationBatch
     */
    public function ethEstimateGasBatch(\Tatum\Model\EthEstimateGasArray $eth_estimate_gas_array, string $x_testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        /** @var \Tatum\Model\EthGasEstimationBatch $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/ethereum/gas/batch", [], $rHeaders, [], $eth_estimate_gas_array
            ), 
            "\Tatum\Model\EthGasEstimationBatch"
        );
            
        return $result;
    }
    
    /**
     * Get recommended blockchain fee / gas price
     *
     * @param string $chain Chain
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BlockchainFee
     */
    public function getBlockchainFee(string $chain) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\BlockchainFee $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/blockchain/fee/{chain}", ["chain" => $chain]), [], $rHeaders, []
            ), 
            "\Tatum\Model\BlockchainFee"
        );
            
        return $result;
    }
    
    /**
     * Estimate KuCoin Community Chain transaction fees
     *
     * @param \Tatum\Model\KcsEstimateGas $kcs_estimate_gas 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\PolygonEstimateGas200Response
     */
    public function kcsEstimateGas(\Tatum\Model\KcsEstimateGas $kcs_estimate_gas) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\PolygonEstimateGas200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/kcs/gas", [], $rHeaders, [], $kcs_estimate_gas
            ), 
            "\Tatum\Model\PolygonEstimateGas200Response"
        );
            
        return $result;
    }
    
    /**
     * Estimate Klaytn transaction fees
     *
     * @param \Tatum\Model\KlaytnEstimateGas $klaytn_estimate_gas 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\KlaytnEstimateGas200Response
     */
    public function klaytnEstimateGas(\Tatum\Model\KlaytnEstimateGas $klaytn_estimate_gas) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\KlaytnEstimateGas200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/klaytn/gas", [], $rHeaders, [], $klaytn_estimate_gas
            ), 
            "\Tatum\Model\KlaytnEstimateGas200Response"
        );
            
        return $result;
    }
    
    /**
     * Estimate Polygon transaction fees
     *
     * @param \Tatum\Model\PolygonEstimateGas $polygon_estimate_gas 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\PolygonEstimateGas200Response
     */
    public function polygonEstimateGas(\Tatum\Model\PolygonEstimateGas $polygon_estimate_gas) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\PolygonEstimateGas200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/polygon/gas", [], $rHeaders, [], $polygon_estimate_gas
            ), 
            "\Tatum\Model\PolygonEstimateGas200Response"
        );
            
        return $result;
    }
    
    /**
     * Estimate VeChain Gas for transaction
     *
     * @param \Tatum\Model\VetEstimateGas $vet_estimate_gas 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return float
     */
    public function vetEstimateGas(\Tatum\Model\VetEstimateGas $vet_estimate_gas) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var float $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/vet/transaction/gas", [], $rHeaders, [], $vet_estimate_gas
            ), 
            "float"
        );
            
        return $result;
    }
    
    /**
     * Estimate XinFin transaction fees
     *
     * @param \Tatum\Model\XdcEstimateGas $xdc_estimate_gas 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\XdcEstimateGas200Response
     */
    public function xdcEstimateGas(\Tatum\Model\XdcEstimateGas $xdc_estimate_gas) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\XdcEstimateGas200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/xdc/gas", [], $rHeaders, [], $xdc_estimate_gas
            ), 
            "\Tatum\Model\XdcEstimateGas200Response"
        );
            
        return $result;
    }
    
}
