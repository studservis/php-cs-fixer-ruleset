<?php

namespace StudService\PhpCsFixerTests;

use PhpCsFixer\Finder;
use PHPUnit\Framework\TestCase;
use function StudService\PhpCsFixer\build_config;

class config_builderTest extends TestCase
{
    public function test_build_config()
    {
        $config = build_config(new Finder());

        $this->assertFalse($config->getRiskyAllowed());
        $this->assertSame("\n", $config->getLineEnding());
    }
}
