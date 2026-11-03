<?php

declare(strict_types=1);

namespace Tavaan\Engine\Plugin;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Plugin\Contracts\PluginManagerInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * PluginManagerServiceProvider — ثبت سرویس‌های موتور PluginManager.
 */
final class PluginManagerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(PluginManagerInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new PluginManager($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('plugins', $this->app->get(PluginManagerInterface::class));

        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Plugin\Console\Plugin_installCommand::class;
        $this->commands[] = \Tavaan\Engine\Plugin\Console\Plugin_enableCommand::class;
        $this->commands[] = \Tavaan\Engine\Plugin\Console\Plugin_disableCommand::class;
        $this->commands[] = \Tavaan\Engine\Plugin\Console\Plugin_updateCommand::class;
        $this->commands[] = \Tavaan\Engine\Plugin\Console\Plugin_uninstallCommand::class;
        $this->commands[] = \Tavaan\Engine\Plugin\Console\Plugin_listCommand::class;
        $this->commands[] = \Tavaan\Engine\Plugin\Console\Plugin_verifyCommand::class;
        $this->commands[] = \Tavaan\Engine\Plugin\Console\Plugin_scanCommand::class;

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            PluginManagerInterface::class,
            'plugins',
        ];
    }
}