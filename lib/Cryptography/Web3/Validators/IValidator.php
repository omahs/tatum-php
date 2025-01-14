<?php

/**
 * This file is part of web3.php package.
 * @author Peter Lai
 * @license MIT
 */

namespace Tatum\Cryptography\Web3\Validators;

interface IValidator {
    /**
     * validate
     *
     * @param mixed $value
     * @return bool
     */
    public static function validate($value);
}
