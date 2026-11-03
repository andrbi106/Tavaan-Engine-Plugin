<?php

declare(strict_types=1);

namespace Tavaan\Engine\Plugin\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * plugin:uninstall command.
 */
final class PluginUninstallCommand implements CommandInterface
{
    public function name(): string
    {
        return 'plugin:uninstall';
    }

    public function description(): string
    {
        return 'Run plugin:uninstall (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
