<?php

declare(strict_types=1);

namespace Tavaan\Engine\Plugin\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * plugin:enable command.
 */
final class PluginEnableCommand implements CommandInterface
{
    public function name(): string
    {
        return 'plugin:enable';
    }

    public function description(): string
    {
        return 'Run plugin:enable (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
