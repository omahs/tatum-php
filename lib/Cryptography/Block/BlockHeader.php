<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Block;

use Tatum\Cryptography\Crypto\Hash;
use Tatum\Cryptography\Exceptions\InvalidHashLengthException;
use Tatum\Cryptography\Serializable;
use Tatum\Cryptography\Serializer\Block\BlockHeaderSerializer;
use Tatum\Cryptography\Buffertools\BufferInterface;

class BlockHeader extends Serializable implements BlockHeaderInterface {
    /**
     * @var int
     */
    private $version;

    /**
     * @var BufferInterface
     */
    private $prevBlock;

    /**
     * @var BufferInterface
     */
    private $merkleRoot;

    /**
     * @var int
     */
    private $timestamp;

    /**
     * @var int
     */
    private $bits;

    /**
     * @var int
     */
    private $nonce;

    const BIP9_PREFIX = 1 << 29;

    /**
     * @param int $version
     * @param BufferInterface $prevBlock
     * @param BufferInterface $merkleRoot
     * @param int $timestamp
     * @param int $bits
     * @param int $nonce
     */
    public function __construct(
        int $version,
        BufferInterface $prevBlock,
        BufferInterface $merkleRoot,
        int $timestamp,
        int $bits,
        int $nonce
    ) {
        if ($prevBlock->getSize() !== 32) {
            throw new InvalidHashLengthException("BlockHeader prevBlock must be a 32-byte Buffer");
        }

        if ($merkleRoot->getSize() !== 32) {
            throw new InvalidHashLengthException("BlockHeader merkleRoot must be a 32-byte Buffer");
        }

        $this->version = $version;
        $this->prevBlock = $prevBlock;
        $this->merkleRoot = $merkleRoot;
        $this->timestamp = $timestamp;
        $this->bits = $bits;
        $this->nonce = $nonce;
    }

    /**
     * @return BufferInterface
     */
    public function getHash(): BufferInterface {
        return Hash::sha256d($this->getBuffer())->flip();
    }

    /**
     * Get the version for this block
     *
     * {@inheritdoc}
     * @see \Tatum\Cryptography\Block\BlockHeaderInterface::getVersion()
     */
    public function getVersion(): int {
        return $this->version;
    }

    /**
     * @return bool
     */
    public function hasBip9Prefix(): bool {
        return ($this->version & self::BIP9_PREFIX) != 0;
    }

    /**
     * {@inheritdoc}
     * @see \Tatum\Cryptography\Block\BlockHeaderInterface::getPrevBlock()
     */
    public function getPrevBlock(): BufferInterface {
        return $this->prevBlock;
    }

    /**
     * {@inheritdoc}
     * @see \Tatum\Cryptography\Block\BlockHeaderInterface::getMerkleRoot()
     */
    public function getMerkleRoot(): BufferInterface {
        return $this->merkleRoot;
    }

    /**
     * {@inheritdoc}
     * @see \Tatum\Cryptography\Block\BlockHeaderInterface::getBits()
     */
    public function getBits(): int {
        return $this->bits;
    }

    /**
     * {@inheritdoc}
     * @see \Tatum\Cryptography\Block\BlockHeaderInterface::getNonce()
     */
    public function getNonce(): int {
        return $this->nonce;
    }

    /**
     * Get the timestamp for this block
     *
     * {@inheritdoc}
     * @see \Tatum\Cryptography\Block\BlockHeaderInterface::getTimestamp()
     */
    public function getTimestamp(): int {
        return $this->timestamp;
    }

    /**
     * @param BlockHeaderInterface $other
     * @return bool
     */
    public function equals(BlockHeaderInterface $other): bool {
        return $this->version === $other->getVersion() &&
            $this->prevBlock->equals($other->getPrevBlock()) &&
            $this->merkleRoot->equals($other->getMerkleRoot()) &&
            $this->timestamp === $other->getTimestamp() &&
            $this->bits === $other->getBits() &&
            $this->nonce === $other->getNonce();
    }

    /**
     * {@inheritdoc}
     * @see \Tatum\Cryptography\Buffertools\SerializableInterface::getBuffer()
     */
    public function getBuffer(): BufferInterface {
        return (new BlockHeaderSerializer())->serialize($this);
    }
}
