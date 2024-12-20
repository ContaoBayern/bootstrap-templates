<?php
declare(strict_types=1);

namespace Contaobayern\BootstrapTemplatesBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Andreas Fieger
 */
class ContaobayernBootstrapTemplatesBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}