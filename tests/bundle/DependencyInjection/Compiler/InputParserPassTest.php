<?php

/**
 * File containing the InputParserPassTest class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\EzPlatformRestCommonBundle\Tests\DependencyInjection\Compiler;

use EzSystems\EzPlatformRestCommonBundle\DependencyInjection\Compiler\InputParserPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\Reference;

class InputParserPassTest extends TestCase
{
    public function testProcess()
    {
        $visitorDefinition = new Definition();
        $visitorDefinition->addTag('ezpublish_rest.input.parser', array('mediaType' => 'application/vnd.ez.api.UnitTest'));

        $containerBuilder = new ContainerBuilder();
        $containerBuilder->addDefinitions(
            array(
                'ezpublish_rest.input.parsing_dispatcher' => new Definition(),
                'ezpublish_rest.input.parser.unit_test' => $visitorDefinition,
            )
        );

        $compilerPass = new InputParserPass();
        $compilerPass->process($containerBuilder);

        $dispatcherMethodCalls = $containerBuilder
            ->getDefinition('ezpublish_rest.input.parsing_dispatcher')
            ->getMethodCalls();
        self::assertTrue(isset($dispatcherMethodCalls[0][0]), 'Failed asserting that dispatcher has a method call');
        self::assertEquals('addParser', $dispatcherMethodCalls[0][0], "Failed asserting that called method is 'addParser'");
        self::assertInstanceOf(Reference::class, $dispatcherMethodCalls[0][1][1], 'Failed asserting that method call is to a Reference object');

        self::assertEquals('ezpublish_rest.input.parser.unit_test', $dispatcherMethodCalls[0][1][1]->__toString(), "Failed asserting that Referenced service is 'ezpublish_rest.input.parser.unit_test'");
    }
}
