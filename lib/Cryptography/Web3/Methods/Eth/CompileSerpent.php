<?php

/**
 * This file is part of web3.php package.
 * @author Peter Lai
 * @license MIT
 */

namespace Tatum\Cryptography\Web3\Methods\Eth;

use InvalidArgumentException;
use Tatum\Cryptography\Web3\Methods\EthMethod;
use Tatum\Cryptography\Web3\Validators\StringValidator;
use Tatum\Cryptography\Web3\Formatters\StringFormatter;

class CompileSerpent extends EthMethod {
    /**
     * validators
     *
     * @var array
     */
    protected $validators = [StringValidator::class];

    /**
     * inputFormatters
     *
     * @var array
     */
    protected $inputFormatters = [StringFormatter::class];

    /**
     * outputFormatters
     *
     * @var array
     */
    protected $outputFormatters = [];

    /**
     * defaultValues
     *
     * @var array
     */
    protected $defaultValues = [];

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
