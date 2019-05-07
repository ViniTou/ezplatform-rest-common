<?php

/**
 * File containing the  class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\EzPlatformRestCommon\Tests\Output\Generator\Xml;

use EzSystems\EzPlatformRestCommon;
use EzSystems\EzPlatformRestCommon\Tests\Output\Generator\FieldTypeHashGeneratorBaseTest;

class FieldTypeHashGeneratorTest extends FieldTypeHashGeneratorBaseTest
{
    /**
     * Initializes the field type hash generator.
     *
     * @return \EzSystems\EzPlatformRestCommon\Output\Generator\Xml\FieldTypeHashGenerator
     */
    protected function initializeFieldTypeHashGenerator()
    {
        return new EzPlatformRestCommon\Output\Generator\Xml\FieldTypeHashGenerator();
    }

    /**
     * Initializes the generator.
     *
     * @return \EzSystems\EzPlatformRestCommon\Output\Generator
     */
    protected function initializeGenerator()
    {
        $generator = new EzPlatformRestCommon\Output\Generator\Xml(
            $this->getFieldTypeHashGenerator()
        );
        $generator->setFormatOutput(true);

        return $generator;
    }
}
