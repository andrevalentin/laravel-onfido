<?php

namespace andrevalentin\Onfido\Tests;

use GrahamCampbell\TestBench\AbstractPackageTestCase;
use andrevalentin\Onfido\OnfidoServiceProvider;

/**
 * This is the abstract class.
 */
abstract class AbstractTestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @param $app
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return OnfidoServiceProvider::class;
    }
}
