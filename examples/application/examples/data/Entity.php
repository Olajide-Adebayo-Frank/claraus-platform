<?php

declare(strict_types=1);

namespace Claraus\Example\Data;

final class Entity
{
    public function __construct(
        public readonly int $id,
        public readonly string $type,
        public readonly string $title,
    ) {
    }
}
