<?php

/**
 * This file is part of web3.php package.
 * @author Peter Lai
 * @license MIT
 */

namespace Tatum\Cryptography\Web3\Methods\Eth;

use InvalidArgumentException;
use Tatum\Cryptography\Web3\Methods\EthMethod;
use Tatum\Cryptography\Web3\Validators\QuantityValidator;
use Tatum\Cryptography\Web3\Formatters\OptionalQuantityFormatter;
use Tatum\Cryptography\Web3\Formatters\BigNumberFormatter;

class GetBlockTransactionCountByNumber extends EthMethod {
    /**
     * validators
     *
     * @var array
     */
    protected $validators = [QuantityValidator::class];

    /**
     * inputFormatters
     *
     * @var array
     */
    protected $inputFormatters = [OptionalQuantityFormatter::class];

    /**
     * outputFormatters
     *
     * @var array
     */
    protected $outputFormatters = [BigNumberFormatter::class];

    /**
     * defaultValues
     *
     * @var array
     */
    protected $defaultValues = ["latest"];

    /**
     * construct
     *
     * @param string $method
     * @param array $arguments
     * @return void
     */
    // public function __construct($method='', $arguments=[])
    // {
    //     parent::__construct($method, $arguments);
    // }
}
