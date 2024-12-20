<?php
declare(strict_types=1);

/**
 * @author Andreas Fieger
 */
namespace Contaobayern\BootstrapTemplatesBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contaobayern\BootstrapTemplatesBundle\ContaobayernBootstrapTemplatesBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaobayernBootstrapTemplatesBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}