<?php

declare(strict_types=1);

namespace Tavaan\Engine\Plugin;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * Hook — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Plugin\Contracts\HookInterface
 */
final class Hook implements Contracts\HookInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function listen(/* ... */): mixed
    {
        // TODO: پیاده‌سازی listen مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function fire(/* ... */): mixed
    {
        // TODO: پیاده‌سازی fire مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function has(/* ... */): mixed
    {
        // TODO: پیاده‌سازی has مطابق مستندات (سند §3 API).
        return null;
    }
}