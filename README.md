# Tavaan Engine — Plugin

> **افزونهٔ ثالث (sandbox + امضا)** — موتور Plugin در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.plugin` |
| نام | `Plugin` |
| عنوان فارسی | افزونهٔ ثالث (sandbox + امضا) |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Plugin` |
| نوع | `engine` |
| Facade | `Plugin` (accessor: `plugins`) |

## توضیحات

M8/TVN-0079: manifest + Ed25519 (sodium) + plugins.lock (SHA-256) + scanner توکنی + sandbox (autoload append/vendor ایزوله/capabilities) + Hook (اعلام‌شده‌محور + timeout/memory) + چرخهٔ عمر کامل.

## خطاها (Exceptions)

- `Tavaan\Engine\Plugin\Exceptions\PluginException`

## Facadeها

- `Tavaan\Engine\Plugin\Facades\Plugin`

## کلاس‌های اصلی

- `src/Console/Commands/PluginDisableCommand.php`
- `src/Console/Commands/PluginEnableCommand.php`
- `src/Console/Commands/PluginInstallCommand.php`
- `src/Console/Commands/PluginListCommand.php`
- `src/Console/Commands/PluginScanCommand.php`
- `src/Console/Commands/PluginUninstallCommand.php`
- `src/Console/Commands/PluginUpdateCommand.php`
- `src/Console/Commands/PluginVerifyCommand.php`
- `src/Hook.php`
- `src/Plugin.php`
- `src/PluginCapabilities.php`
- `src/PluginProvider.php`
- `src/PluginSandbox.php`
- `src/PluginScanner.php`
- `src/PluginVerifier.php`
- `src/PluginsLock.php`
- `src/ScanReport.php`
- `src/plugin.php`

## Service Providerها

- `Tavaan\Engine\Plugin\PluginManagerServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `module`
- `filesystem`
- `crypt`

## دستورات CLI

- `plugin:install`
- `plugin:enable`
- `plugin:disable`
- `plugin:update`
- `plugin:uninstall`
- `plugin:list`
- `plugin:verify`
- `plugin:scan`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Plugin.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Plugin`** (این مخزن) | موتور Plugin |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
