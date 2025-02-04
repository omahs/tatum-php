<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Crypto\EcAdapter\Signature;

use Tatum\Cryptography\SerializableInterface;

interface SignatureInterface extends SerializableInterface {
    /**
     * @param SignatureInterface $signature
     * @return bool
     */
    public function equals(SignatureInterface $signature): bool;
}
