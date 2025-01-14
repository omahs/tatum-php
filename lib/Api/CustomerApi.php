<?php

/**
 * Implementation of Customer API
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
 * Customer API
 */
class CustomerApi extends AbstractApi {
    /**
     * Activate customer
     *
     * @param string $id Customer internal ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function activateCustomer(string $id) {
        if (strlen($id) > 50) {
            throw new IAE('Invalid length for "$id" when calling CustomerApi.activateCustomer, must be smaller than or equal to 50');
        }

        if (strlen($id) < 10) {
            throw new IAE('Invalid length for "$id" when calling CustomerApi.activateCustomer, must be bigger than or equal to 10');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", S::parse("/v3/ledger/customer/{id}/activate", ["id" => $id]), [], $rHeaders, []
            )
        );
    }
    
    /**
     * Deactivate customer
     *
     * @param string $id Customer internal ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function deactivateCustomer(string $id) {
        if (strlen($id) > 50) {
            throw new IAE('Invalid length for "$id" when calling CustomerApi.deactivateCustomer, must be smaller than or equal to 50');
        }

        if (strlen($id) < 10) {
            throw new IAE('Invalid length for "$id" when calling CustomerApi.deactivateCustomer, must be bigger than or equal to 10');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", S::parse("/v3/ledger/customer/{id}/deactivate", ["id" => $id]), [], $rHeaders, []
            )
        );
    }
    
    /**
     * Disable customer
     *
     * @param string $id Customer internal ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function disableCustomer(string $id) {
        if (strlen($id) > 50) {
            throw new IAE('Invalid length for "$id" when calling CustomerApi.disableCustomer, must be smaller than or equal to 50');
        }

        if (strlen($id) < 10) {
            throw new IAE('Invalid length for "$id" when calling CustomerApi.disableCustomer, must be bigger than or equal to 10');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", S::parse("/v3/ledger/customer/{id}/disable", ["id" => $id]), [], $rHeaders, []
            )
        );
    }
    
    /**
     * Enable customer
     *
     * @param string $id Customer internal ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function enableCustomer(string $id) {
        if (strlen($id) > 50) {
            throw new IAE('Invalid length for "$id" when calling CustomerApi.enableCustomer, must be smaller than or equal to 50');
        }

        if (strlen($id) < 10) {
            throw new IAE('Invalid length for "$id" when calling CustomerApi.enableCustomer, must be bigger than or equal to 10');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", S::parse("/v3/ledger/customer/{id}/enable", ["id" => $id]), [], $rHeaders, []
            )
        );
    }
    
    /**
     * List all customers
     *
     * @param float $page_size Max number of items per page is 50.
     * @param float|null $offset Offset to obtain next page of the data.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Customer[]
     */
    public function findAllCustomers(float $page_size, float $offset = null) {
        if ($page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling CustomerApi.findAllCustomers, must be smaller than or equal to 50');
        }

        if ($page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling CustomerApi.findAllCustomers, must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\Customer[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/ledger/customer", [
                    "pageSize" => S::toQueryValue($page_size),
                    "offset" => isset($offset) ? S::toQueryValue($offset) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\Customer[]"
        );
            
        return $result;
    }
    
    /**
     * Get customer details
     *
     * @param string $id Customer external or internal ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Customer
     */
    public function getCustomerByExternalOrInternalId(string $id) {
        if (strlen($id) > 100) {
            throw new IAE('Invalid length for "$id" when calling CustomerApi.getCustomerByExternalOrInternalId, must be smaller than or equal to 100');
        }

        if (strlen($id) < 1) {
            throw new IAE('Invalid length for "$id" when calling CustomerApi.getCustomerByExternalOrInternalId, must be bigger than or equal to 1');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\Customer $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/ledger/customer/{id}", ["id" => $id]), [], $rHeaders, []
            ), 
            "\Tatum\Model\Customer"
        );
            
        return $result;
    }
    
    /**
     * Update customer
     *
     * @param string $id Customer internal ID
     * @param \Tatum\Model\CustomerUpdate $customer_update 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Customer
     */
    public function updateCustomer(string $id, \Tatum\Model\CustomerUpdate $customer_update) {
        if (strlen($id) > 50) {
            throw new IAE('Invalid length for "$id" when calling CustomerApi.updateCustomer, must be smaller than or equal to 50');
        }

        if (strlen($id) < 10) {
            throw new IAE('Invalid length for "$id" when calling CustomerApi.updateCustomer, must be bigger than or equal to 10');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\Customer $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", S::parse("/v3/ledger/customer/{id}", ["id" => $id]), [], $rHeaders, [], $customer_update
            ), 
            "\Tatum\Model\Customer"
        );
            
        return $result;
    }
    
}
