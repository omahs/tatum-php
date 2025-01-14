<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Buffertools\Types;

class Uint128 extends AbstractUint {
    /**
     * {@inheritdoc}
     * @see \Tatum\Cryptography\Buffertools\Types\TypeInterface::getBitSize()
     */
    public function getBitSize(): int {
        return 128;
    }
}
