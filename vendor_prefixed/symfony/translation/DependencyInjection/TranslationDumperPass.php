<?php
/* This file has been prefixed by <PHP-Prefixer> for "Prefixed Illuminate package" */

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PPP_L6\Symfony\Component\Translation\DependencyInjection;

use PPP_L6\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use PPP_L6\Symfony\Component\DependencyInjection\ContainerBuilder;
use PPP_L6\Symfony\Component\DependencyInjection\Reference;

/**
 * Adds tagged translation.formatter services to translation writer.
 */
class TranslationDumperPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition('translation.writer')) {
            return;
        }

        $definition = $container->getDefinition('translation.writer');

        foreach ($container->findTaggedServiceIds('translation.dumper', true) as $id => $attributes) {
            $definition->addMethodCall('addDumper', [$attributes[0]['alias'], new Reference($id)]);
        }
    }
}
