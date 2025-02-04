<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Transaction;

use Tatum\Cryptography\Script\ScriptInterface;
use Tatum\Cryptography\Serializable;
use Tatum\Cryptography\Serializer\Transaction\TransactionOutputSerializer;
use Tatum\Cryptography\Buffertools\BufferInterface;

class TransactionOutput extends Serializable implements TransactionOutputInterface {
    /**
     * @var int
     */
    private $value;

    /**
     * @var ScriptInterface
     */
    private $script;

    /**
     * Initialize class
     *
     * @param int $value
     * @param ScriptInterface $script
     */
    public function __construct(int $value, ScriptInterface $script) {
        if ($value < 0) {
            throw new \RuntimeException("Transaction output value cannot be negative");
        }
        $this->value = $value;
        $this->script = $script;
    }

    /**
     * {@inheritdoc}
     * @see TransactionOutputInterface::getValue()
     */
    public function getValue(): int {
        return $this->value;
    }

    /**
     * {@inheritdoc}
     * @see TransactionOutputInterface::getScript()
     */
    public function getScript(): ScriptInterface {
        return $this->script;
    }

    /**
     * {@inheritdoc}
     * @see TransactionOutputInterface::equals()
     */
    public function equals(TransactionOutputInterface $output): bool {
        $script = $this->script->equals($output->getScript());
        if (!$script) {
            return false;
        }

        return gmp_cmp($this->value, $output->getValue()) === 0;
    }

    /**
     * {@inheritdoc}
     * @see \Tatum\Cryptography\SerializableInterface::getBuffer()
     */
    public function getBuffer(): BufferInterface {
        return (new TransactionOutputSerializer())->serialize($this);
    }
}
