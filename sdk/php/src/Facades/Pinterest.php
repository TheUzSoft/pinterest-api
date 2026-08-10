<?php

namespace TheUzSoft\\Pinterest\Facades;

use Illuminate\Support\Facades\Facade;

class Pinterest extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'pinterest-client';
    }
}
