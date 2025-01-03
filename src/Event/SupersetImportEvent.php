<?php

namespace Hydra\SupersetBundle\Event;

use Symfony\Contracts\EventDispatcher\Event;

final class SupersetImportEvent extends Event
{
    public function __construct(
        private readonly array $data,
        private readonly string $tableName,
    ) {}

    public function getData(): array
    {
        return $this->data;
    }

    public function getTableName(): string
    {
        return strtoupper($this->tableName);
    }
}
