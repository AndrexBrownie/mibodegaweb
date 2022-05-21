<?php

namespace Libs;

use Jenssegers\Blade\Blade;

class Controller 
{
    protected $blade;
    
    public function loadBlade()
    {
        $pathViews = __DIR__ . '/../app/views';
        $pathCache = __DIR__ . '/../cache';

        $this->blade = new Blade($pathViews, $pathCache);
    }
}