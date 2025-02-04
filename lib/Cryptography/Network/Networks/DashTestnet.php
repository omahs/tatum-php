<?php

namespace Tatum\Cryptography\Network\Networks;

use Tatum\Cryptography\Network\Network;
use Tatum\Cryptography\Script\ScriptType;

class DashTestnet extends Network {
    /**
     * {@inheritdoc}
     * @see Network::$base58PrefixMap
     */
    protected $base58PrefixMap = [
        self::BASE58_ADDRESS_P2PKH => "8b",
        self::BASE58_ADDRESS_P2SH => "13",
        self::BASE58_WIF => "ef"
    ];

    /**
     * {@inheritdoc}
     * @see Network::$bip32PrefixMap
     */
    protected $bip32PrefixMap = [
        self::BIP32_PREFIX_XPUB => "043587cf",
        self::BIP32_PREFIX_XPRV => "04358394"
    ];

    /**
     * {@inheritdoc}
     * @see Network::$bip32ScriptTypeMap
     */
    protected $bip32ScriptTypeMap = [
        self::BIP32_PREFIX_XPUB => ScriptType::P2PKH,
        self::BIP32_PREFIX_XPRV => ScriptType::P2PKH
    ];

    /**
     * {@inheritdoc}
     * @see Network::$signedMessagePrefix
     */
    protected $signedMessagePrefix = "DarkCoin Signed Message";

    /**
     * {@inheritdoc}
     * @see Network::$p2pMagic
     */
    protected $p2pMagic = "ffcae2ce";
}
