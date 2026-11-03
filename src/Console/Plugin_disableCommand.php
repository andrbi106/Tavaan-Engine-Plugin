<?php

declare(strict_types=1);

namespace Tavaan\Engine\Plugin\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * plugin:disable command.
 */
final class Plugin_disableCommand implements CommandInterface
{
    public function name(): string
    {
        return 'plugin:disable';
    }

    public function description(): string
    {
        return 'Run plugin:disable (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
