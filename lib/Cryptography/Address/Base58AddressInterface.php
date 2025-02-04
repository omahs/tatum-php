<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Address;

use Tatum\Cryptography\Network\NetworkInterface;

interface Base58AddressInterface extends AddressInterface {
    /**
     * @param NetworkInterface $network
     * @return string
     */
    public function getPrefixByte(NetworkInterface $network = null): string;
}
