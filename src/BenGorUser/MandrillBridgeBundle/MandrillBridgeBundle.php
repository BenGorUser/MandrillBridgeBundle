<?php

/*
 * This file is part of the BenGorUser package.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 * (c) Gorka Laucirica <gorka.lauzirika@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenGorUser\MandrillBridgeBundle;

use BenGorUser\UserBundle\DependentBenGorUserBundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Mandrill bridge bundle kernel class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class MandrillBridgeBundle extends Bundle
{
    use DependentBenGorUserBundle;

    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        $this->checkDependencies(['BenGorUserBundle'], $container);
    }
}
