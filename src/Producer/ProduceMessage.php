<?php

declare(strict_types=1);

namespace longlang\phpkafka\Producer;

class ProduceMessage
{
    /**
     * @var string
     */
    protected $topic;

    /**
     * @var string|null
     */
    protected $value;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var array
     */
    protected $headers;

    /**
     * @var int|null
     */
    protected $partitionIndex;

    public function __construct(string $topic, ?string $value, ?string $key = null, array $headers = [], ?int $partitionIndex = null)
    {
        $this->topic = $topic;
        $this->value = $value;
        $this->key = $key;
        $this->headers = $headers;
        $this->partitionIndex = $partitionIndex;
    }

    public function getTopic(): string
    {
        return $this->topic;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getPartitionIndex(): ?int
    {
        return $this->partitionIndex;
    }
}
