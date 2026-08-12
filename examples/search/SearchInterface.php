<?php

declare(strict_types=1);

namespace Claraus\Example\Search;

interface SearchInterface
{
    /**
     * Search the Claraus content index.
     *
     * @return array<int, array<string, mixed>>
     */
    public function search(string $keyword, int $limit = 10): array;
}
