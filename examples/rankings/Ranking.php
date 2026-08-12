<?php

declare(strict_types=1);

namespace Claraus\Example\Rankings;

final class Ranking
{
    public function __construct(
        public readonly string $title,
        public readonly string $category,
        public readonly array $entries,
    ) {
    }
}
