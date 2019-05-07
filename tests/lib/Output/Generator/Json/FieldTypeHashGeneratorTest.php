<?php

/**
 * File containing the  class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\EzPlatformRestCommon\Tests\Output\Generator\Json;

use EzSystems\EzPlatformRestCommon;
use EzSystems\EzPlatformRestCommon\Tests\Output\Generator\FieldTypeHashGeneratorBaseTest;

class FieldTypeHashGeneratorTest extends FieldTypeHashGeneratorBaseTest
{
    /**
     * Initializes the field type hash generator.
     *
     * @return \EzSystems\EzPlatformRestCommon\Output\Generator\Json\FieldTypeHashGenerator
     */
    protected function initializeFieldTypeHashGenerator()
    {
        return new EzPlatformRestCommon\Output\Generator\Json\FieldTypeHashGenerator();
    }

    /**
     * Initializes the generator.
     *
     * @return \EzSystems\EzPlatformRestCommon\Output\Generator
     */
    protected function initializeGenerator()
    {
        return new EzPlatformRestCommon\Output\Generator\Json(
            $this->getFieldTypeHashGenerator()
        );
    }
}
