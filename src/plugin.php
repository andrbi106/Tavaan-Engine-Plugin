<?php
declare(strict_types=1);
namespace Tavaan\Engine\Plugin;

final class Plugin
{
    public function __construct(
        public readonly string $id,
        public readonly string $name,
        public readonly string $version,
        public readonly string $path,
        public readonly bool $enabled = true,
        public readonly array $manifest = [],
    ) {}

    public function isActive(): bool { return $this->enabled && is_dir($this->path); }
    public function providers(): array { return $this->manifest['providers'] ?? []; }
    public function dependencies(): array { return $this->manifest['requires'] ?? []; }
}

final class PluginManager
{
    private array $plugins = [];
    private array $loaded = [];

    public function __construct(private readonly array $config = []) {}

    public function register(Plugin $plugin): self { $this->plugins[$plugin->id] = $plugin; return $this; }
    public function get(string $id): ?Plugin { return $this->plugins[$id] ?? null; }
    public function has(string $id): bool { return isset($this->plugins[$id]); }
    public function all(): array { return array_values($this->plugins); }
    public function enabled(): array { return array_values(array_filter($this->plugins, fn($p) => $p->enabled)); }

    public function load(string $id): void
    {
        $plugin = $this->get($id);
        if ($plugin === null || !$plugin->isActive()) return;
        foreach ($plugin->providers() as $provider) { if (class_exists($provider)) { new $provider(); } }
        $this->loaded[] = $id;
    }

    public function loadAll(): void { foreach ($this->plugins as $plugin) { $this->load($plugin->id); } }
    public function loadedPlugins(): array { return $this->loaded; }
    public function enable(string $id): void { if (isset($this->plugins[$id])) { $this->plugins[$id] = new Plugin($this->plugins[$id]->id, $this->plugins[$id]->name, $this->plugins[$id]->version, $this->plugins[$id]->path, true, $this->plugins[$id]->manifest); } }
    public function disable(string $id): void { if (isset($this->plugins[$id])) { $this->plugins[$id] = new Plugin($this->plugins[$id]->id, $this->plugins[$id]->name, $this->plugins[$id]->version, $this->plugins[$id]->path, false, $this->plugins[$id]->manifest); } }
}

final class PluginServiceProvider
{
    private ?PluginManager $manager = null;
    public function __construct(private readonly array $config = []) {}
    public function register(): void { $this->manager = new PluginManager($this->config); }
    public function boot(): void { $this->manager?->loadAll(); }
    public function provides(): array { return [PluginManager::class, Plugin::class]; }
    public function getManager(): PluginManager { if ($this->manager === null) $this->register(); return $this->manager; }

    public function install(/* ... */): mixed
    {
        return null;
    }
    public function list(/* ... */): mixed
    {
        return null;
    }
    public function scan(/* ... */): mixed
    {
        return null;
    }
    public function uninstall(/* ... */): mixed
    {
        return null;
    }
    public function update(/* ... */): mixed
    {
        return null;
    }
    public function verify(/* ... */): mixed
    {
        return null;
    }
}
