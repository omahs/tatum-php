<?php

/**
 * This file is part of web3.php package.
 * @author Peter Lai
 * @license MIT
 */

namespace Tatum\Cryptography\Web3\Methods\Shh;

use InvalidArgumentException;
use Tatum\Cryptography\Web3\Methods\EthMethod;
use Tatum\Cryptography\Web3\Formatters\PostFormatter;
use Tatum\Cryptography\Web3\Validators\PostValidator;

class Post extends EthMethod {
    /**
     * validators
     *
     * @var array
     */
    protected $validators = [PostValidator::class];

    /**
     * inputFormatters
     *
     * @var array
     */
    protected $inputFormatters = [PostFormatter::class];

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