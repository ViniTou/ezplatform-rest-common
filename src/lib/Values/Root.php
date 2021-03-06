<?php

/**
 * File containing the Root class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\EzPlatformRestCommon\Values;

use EzSystems\EzPlatformRestCommon\Value as RestValue;

/**
 * This class represents the root resource.
 */
class Root extends RestValue
{
    /**
     * @var resource[]
     */
    protected $resources;

    public function __construct(array $resources = array())
    {
        $this->resources = $resources;
    }

    /**
     * @return resource[]
     */
    public function getResources()
    {
        return $this->resources;
    }
}
