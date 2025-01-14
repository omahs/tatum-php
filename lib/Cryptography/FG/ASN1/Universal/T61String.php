<?php
/*
 * This file is part of the PHPASN1 library.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tatum\Cryptography\FG\ASN1\Universal;

use Tatum\Cryptography\FG\ASN1\AbstractString;
use Tatum\Cryptography\FG\ASN1\Identifier;

class T61String extends AbstractString {
    /**
     * Creates a new ASN.1 T61 String.
     * TODO The encodable characters of this type are not yet checked.
     *
     * @see http://en.wikipedia.org/wiki/ITU_T.61
     *
     * @param string $string
     */
    public function __construct($string) {
        $this->value = $string;
        $this->allowAll();
    }

    public function getType() {
        return Identifier::T61_STRING;
    }
}
