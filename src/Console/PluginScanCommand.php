<?php

declare(strict_types=1);

namespace Tavaan\Engine\Plugin\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * plugin:scan command.
 */
final class PluginScanCommand implements CommandInterface
{
    public function name(): string
    {
        return 'plugin:scan';
    }

    public function description(): string
    {
        return 'Run plugin:scan (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
