<?php

interface IChain
{
    public function addBlock(Block $block): static;
    public function getBlock(int $id): ?Block;
    public function getLastBlock(): ?Block;
    public function isValid(): bool;
}

class Block
{
    public function __construct(
        public int $id,
        public string $content,
        public string $hash = '',
        public string $prevHash = '',
        public int $timestamp = 0
    ) {
        $this->timestamp = time();
        $this->hash = $this->calculateHash();
    }

    public function calculateHash(): string
    {
        return hash('sha256', $this->id . $this->prevHash . $this->timestamp . $this->content);
    }
}

class Chain implements IChain
{
    private array $chain = [];

    public function addBlock(Block $block): static
    {
        $block->prevHash = $this->getLastBlock()->hash ?? '';
        $block->hash = $block->calculateHash();
        $this->chain[] = $block;
        return $this;
    }

    public function getLastBlock(): ?Block
    {
        return end($this->chain) ?: null;
    }

    public function isValid(): bool
    {
        foreach ($this->chain as $i => $block) {
            if ($i === 0) {
                continue;
            }
            $prevBlock = $this->chain[$i - 1];
            if ($block->prevHash !== $prevBlock->hash || $block->hash !== $block->calculateHash()) {
                return false;
            }
        }
        return true;
    }
}

?>