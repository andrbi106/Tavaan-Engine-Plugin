<?php

declare(strict_types=1);

namespace Tavaan\Engine\Plugin\Contracts;

/**
 * قرارداد PluginManager.
 *
 * @see \Tavaan\Engine\Plugin\PluginManager
 * @api 1.0
 */
interface PluginManagerInterface
{
    /**
     * متد install.
     *
     * @return mixed
     */
    public function install(/* ... */): mixed;

    /**
     * متد uninstall.
     *
     * @return mixed
     */
    public function uninstall(/* ... */): mixed;

    /**
     * متد enable.
     *
     * @return mixed
     */
    public function enable(/* ... */): mixed;

    /**
     * متد disable.
     *
     * @return mixed
     */
    public function disable(/* ... */): mixed;

    /**
     * متد update.
     *
     * @return mixed
     */
    public function update(/* ... */): mixed;

    /**
     * متد list.
     *
     * @return mixed
     */
    public function list(/* ... */): mixed;

    /**
     * متد verify.
     *
     * @return mixed
     */
    public function verify(/* ... */): mixed;

    /**
     * متد scan.
     *
     * @return mixed
     */
    public function scan(/* ... */): mixed;
}