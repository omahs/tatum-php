<?php

/**
 * KmsSignatureIds Model
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
 * KmsSignatureIds Model
 */
class KmsSignatureIds extends AbstractModel {

    public const _D = null;
    protected static $_name = "KmsSignatureIds";
    protected static $_definition = [
        "signature_ids" => ["signatureIds", "string[]", 'uuid', "getSignatureIds", "setSignatureIds", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * KmsSignatureIds
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get signature_ids
     *
     * @return string[]|null
     */
    public function getSignatureIds(): ?array {
        return $this->_data["signature_ids"];
    }

    /**
     * Set signature_ids
     * 
     * @param string[]|null $signature_ids List of the signature Ids to be used to sign transactions.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSignatureIds(?array $signature_ids) {
        return $this->_set("signature_ids", $signature_ids);
    }
}
