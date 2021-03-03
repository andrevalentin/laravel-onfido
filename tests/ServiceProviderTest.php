<?php

namespace AndreValentin\Onfido\Tests;

use Onfido\Api\DefaultApi;
use GrahamCampbell\TestBenchCore\ServiceProviderTrait;

/**
 * This is the service provider test class.
 */
class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testOnfidoApiKeyPresence(): void
    {
        self::assertArrayHasKey('onfido.api_key', config());
    }

    /**
     * Testing that Onfido is injectable.
     */
    public function testOnfidoClientIsInjectable(): void
    {
        $this->assertIsInjectable(DefaultApi::class);
    }
}
