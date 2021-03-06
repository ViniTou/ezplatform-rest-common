<?php

/**
 * File containing the MessageTest class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\EzPlatformRestCommon\Tests;

use EzSystems\EzPlatformRestCommon;
use PHPUnit\Framework\TestCase;

/**
 * Tests for Message class.
 */
class MessageTest extends TestCase
{
    /**
     * Tests creating the message with default headers.
     */
    public function testCreateMessageDefaultHeaders()
    {
        $message = new EzPlatformRestCommon\Message();

        $this->assertSame(array(), $message->headers);
    }

    /**
     * Tests creating the message with default body.
     */
    public function testCreateMessageDefaultBody()
    {
        $message = new EzPlatformRestCommon\Message();

        $this->assertSame('', $message->body);
    }

    /**
     * Tests creating message with headers set through constructor.
     */
    public function testCreateMessageConstructorHeaders()
    {
        $message = new EzPlatformRestCommon\Message(
            $headers = array(
                'Content-Type' => 'text/xml',
            )
        );

        $this->assertSame($headers, $message->headers);
    }

    /**
     * Tests creating message with body set through constructor.
     */
    public function testCreateMessageConstructorBody()
    {
        $message = new EzPlatformRestCommon\Message(
            array(),
            'Hello world!'
        );

        $this->assertSame('Hello world!', $message->body);
    }
}
