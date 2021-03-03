<?php

namespace AndreValentin\Onfido\Tests\Facades;

use Onfido\Api\DefaultApi;
use GrahamCampbell\TestBenchCore\FacadeTrait;
use AndreValentin\Onfido\Facades\Onfido;
use AndreValentin\Onfido\Tests\AbstractTestCase;

class OnfidoTest extends AbstractTestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'onfido';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return Onfido::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return DefaultApi::class;
    }
}
