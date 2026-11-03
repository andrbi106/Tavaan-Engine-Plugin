<?php

declare(strict_types=1);

namespace Tavaan\Engine\Plugin\Contracts;

/**
 * قرارداد Hook.
 *
 * @see \Tavaan\Engine\Plugin\Hook
 * @api 1.0
 */
interface HookInterface
{
    /**
     * متد listen.
     *
     * @return mixed
     */
    public function listen(/* ... */): mixed;

    /**
     * متد fire.
     *
     * @return mixed
     */
    public function fire(/* ... */): mixed;

    /**
     * متد has.
     *
     * @return mixed
     */
    public function has(/* ... */): mixed;
}