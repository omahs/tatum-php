<?php
/*
 * This file is part of the PHPASN1 library.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tatum\Cryptography\FG\ASN1\Universal;

use Tatum\Cryptography\FG\ASN1\ASNObject;
use Tatum\Cryptography\FG\ASN1\Parsable;
use Tatum\Cryptography\FG\ASN1\Identifier;
use Tatum\Cryptography\FG\ASN1\Exception\ParserException;

class NullObject extends ASNObject implements Parsable {
    public function getType() {
        return Identifier::NULL;
    }

    protected function calculateContentLength() {
        return 0;
    }

    protected function getEncodedValue() {
        return null;
    }

    public function getContent() {
        return "NULL";
    }

    public static function fromBinary(&$binaryData, &$offsetIndex = 0) {
        self::parseIdentifier($binaryData[$offsetIndex], Identifier::NULL, $offsetIndex++);
        $contentLength = self::parseContentLength($binaryData, $offsetIndex);

        if ($contentLength != 0) {
            throw new ParserException(
                "An ASN.1 Null should not have a length other than zero. Extracted length was {$contentLength}",
                $offsetIndex
            );
        }

        $parsedObject = new self();
        $parsedObject->setContentLength(0);

        return $parsedObject;
    }
}
