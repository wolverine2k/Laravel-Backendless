<?php

/*
 * This file is part of Laravel Backendless.
 *
 * (c) Naresh Mehta <naresh.mehta@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NareshMehta\Tests\Backendless;

use NareshMehta\Backendless\BackendlessServiceProvider;
use GrahamCampbell\TestBench\AbstractPackageTestCase;

/**
 * This is the abstract test case class.
 *
 * @author Naresh Mehta <naresh.mehta@gmail.com>
 */
abstract class AbstractTestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return BackendlessServiceProvider::class;
    }
}