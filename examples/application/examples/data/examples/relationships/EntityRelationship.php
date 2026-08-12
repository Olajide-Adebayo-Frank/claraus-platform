<?php

declare(strict_types=1);

namespace Claraus\Example\Relationships;

final class EntityRelationship
{
    public function __construct(
        public readonly int $sourceId,
        public readonly string $sourceType,
        public readonly int $targetId,
        public readonly string $targetType,
        public readonly string $relationship,
    ) {
    }
}
