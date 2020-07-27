<?php

declare(strict_types=1);

/**
 * estao®
 *
 * Copyright (C) 2012-2020 Christian Barkowsky
 *
 * @package estao
 *
 * @author  Christian Barkowsky <https://brkwsky.de>
 *
 * @link    https://estao.de
 *
 * @license proprietary
 */

namespace Estao\Info\Tests;

use Estao\Info\EstaoInfoBundle;
use PHPUnit\Framework\TestCase;

class EstaoInfoBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new EstaoInfoBundle();
        $this->assertInstanceOf('Estao\Info\EstaoInfoBundle', $bundle);
    }
}
