<?php

namespace Serendipitynl\Flasher\Facades;

use Illuminate\Support\Facades\Facade;

class Flash extends Facade {
    protected static function getFacadeAccessor()
    {
        return \Serendipitynl\Flasher\Flash::class;
    }
}