<?php

/**
 * GetAuctionFeeRecipient_200_response Model
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
 * GetAuctionFeeRecipient_200_response Model
 */
class GetAuctionFeeRecipient200Response extends AbstractModel {

    public const _D = null;
    protected static $_name = "GetAuctionFeeRecipient_200_response";
    protected static $_definition = [
        "address" => ["address", "string", null, "getAddress", "setAddress", null, ["r" => 0]]
    ];

    /**
     * GetAuctionFeeRecipient200Response
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get address
     *
     * @return string|null
     */
    public function getAddress(): ?string {
        return $this->_data["address"];
    }

    /**
     * Set address
     * 
     * @param string|null $address Address of the auction fee recipient.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAddress(?string $address) {
        return $this->_set("address", $address);
    }
}
