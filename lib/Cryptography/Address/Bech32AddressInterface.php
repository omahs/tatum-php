<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Address;

use Tatum\Cryptography\Network\NetworkInterface;

interface Bech32AddressInterface extends AddressInterface {
    /**
     * @param NetworkInterface $network
     * @return string
     */
    public function getHRP(NetworkInterface $network = null): string;
}
