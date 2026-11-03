<?php

declare(strict_types=1);

namespace Tavaan\Engine\Plugin\Tests\Unit;

use Tavaan\Testing\TestCase;
use Tavaan\Engine\Plugin\Plugin;
use Tavaan\Engine\Plugin\PluginManager;
use Tavaan\Engine\Plugin\Hook;

/**
 * T-NN scenario tests for the plugin engine.
 *
 * Generated from ROADMAP.md scenarios — real implementations, not placeholders.
 */
final class PluginScenarioTest extends TestCase
{'    public function t01_register_and_get(): void\n    {\n        // Scenario T-01\n$pm = new PluginManager();\n        $p = new Plugin("p1", "Plugin 1", "1.0.0", "/tmp", true, []);\n        $pm->register($p);\n        $this->assertTrue($pm->has("p1"));\n        $this->assertSame($p, $pm->get("p1"));\n    }\n    public function t02_enabled_filter(): void\n    {\n        // Scenario T-02\n$pm = new PluginManager();\n        $pm->register(new Plugin("on", "On", "1.0", "/tmp", true, []));\n        $pm->register(new Plugin("off", "Off", "1.0", "/tmp", false, []));\n        $enabled = $pm->enabled();\n        $this->assertCount(1, $enabled);\n        $this->assertSame("on", $enabled[0]->id);\n    }\n    public function t03_hook_listen_and_fire(): void\n    {\n        // Scenario T-03\n$h = new Hook();\n        $h->listen("filter", fn($v) => $v * 2);\n        $out = $h->fire("filter", 5);\n        $this->assertSame(10, $out);\n    }\n    public function t04_hook_priority_order(): void\n    {\n        // Scenario T-04\n$h = new Hook();\n        $h->listen("f", fn($v) => $v . "1", 20);\n        $h->listen("f", fn($v) => $v . "2", 10);\n        $out = $h->fire("f", "X");\n        // Priority 10 (lower) fires first\n        $this->assertSame("X21", $out);\n    }\n    public function t05_hook_remove(): void\n    {\n        // Scenario T-05\n$h = new Hook();\n        $cb = fn($v) => $v + 1;\n        $h->listen("inc", $cb);\n        $this->assertTrue($h->has("inc"));\n        $h->remove("inc");\n        $this->assertFalse($h->has("inc"));\n    }'}
