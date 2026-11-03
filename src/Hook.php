<?php

declare(strict_types=1);

namespace Tavaan\Engine\Plugin;

final class Hook
{
    public function listen()
    {
        return null;
    }
    public function fire()
    {
        return null;
    }
    public function has(string $key): bool
    {
        return false;
    }
}
