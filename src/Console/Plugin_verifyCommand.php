<?php

declare(strict_types=1);

namespace Tavaan\Engine\Plugin\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * plugin:verify command.
 */
final class Plugin_verifyCommand implements CommandInterface
{
    public function name(): string
    {
        return 'plugin:verify';
    }

    public function description(): string
    {
        return 'Run plugin:verify (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
