<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Buffertools;

class ByteOrder {
    /**
     * Little endian means bytes must be flipped
     */
    const LE = 0;

    /**
     * Assuming machine byte order?
     */
    const BE = 1;
}
