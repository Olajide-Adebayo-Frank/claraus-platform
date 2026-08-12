<?php

declare(strict_types=1);

namespace Claraus\Example;

final class Kernel
{
    public static function boot(): void
    {
        Loader::load();
    }
}
