<?php
/*
 * This file is part of the PHPASN1 library.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tatum\Cryptography\FG\ASN1\Universal;

use Tatum\Cryptography\FG\ASN1\AbstractString;
use Tatum\Cryptography\FG\ASN1\Identifier;

class GeneralString extends AbstractString {
    /**
     * Creates a new ASN.1 GeneralString.
     * TODO The encodable characters of this type are not yet checked.
     *
     * @param string $string
     */
    public function __construct($string) {
        $this->value = $string;
        $this->allowAll();
    }

    public function getType() {
        return Identifier::GENERAL_STRING;
    }
}
