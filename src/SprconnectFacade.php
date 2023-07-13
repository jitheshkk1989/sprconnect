<?php

namespace Spr\Sprconnect;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Spr\Sprconnect\Skeleton\SkeletonClass
 */
class SprconnectFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sprconnect';
    }
}
