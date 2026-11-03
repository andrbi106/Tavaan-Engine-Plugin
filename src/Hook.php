<?php

declare(strict_types=1);

namespace Tavaan\Engine\Plugin;

final class Hook
{
    public function listen(/* ... */): mixed
    {
        return null;
    }
    public function fire(/* ... */): mixed
    {
        return null;
    }
    public function has(/* ... */): mixed
    {
        return $this;
    }
}
