<?php

/**
 * File containing the Base parser class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\EzPlatformRestCommon\Input;

use EzSystems\EzPlatformRestCommon\RequestParser;

abstract class BaseParser extends Parser
{
    /**
     * URL handler.
     *
     * @var \EzSystems\EzPlatformRestCommon\RequestParser
     */
    protected $requestParser;

    public function setRequestParser(RequestParser $requestParser)
    {
        $this->requestParser = $requestParser;
    }
}
