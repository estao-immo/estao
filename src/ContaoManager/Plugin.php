<?php

declare(strict_types=1);

/**
 * estao®
 *
 * Copyright (C) 2012-2019 Christian Barkowsky & Tino Kramm
 *
 * @package estao
 *
 * @author  Christian Barkowsky <https://brkwsky.de>
 *
 * @link    https://estao.de
 *
 * @license proprietary
 */

namespace Estao\Info\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

/**
 * Class Plugin
 * @package Estao\Info
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create('Estao\Info\EstaoInfoBundle')->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
