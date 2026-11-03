<?php

declare(strict_types=1);

namespace Tavaan\Engine\Plugin\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * plugin:update command.
 */
final class Plugin_updateCommand implements CommandInterface
{
    public function name(): string
    {
        return 'plugin:update';
    }

    public function description(): string
    {
        return 'Run plugin:update (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
