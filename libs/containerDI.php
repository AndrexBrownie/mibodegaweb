<?php

use App\Services\CategoriaService;
use DI\Container;
use DI\ContainerBuilder;
use Libs\Database;

class ContainerDI 
{
    private $container;
    private array $entries;

    public function __construct() 
    {
        $containerBuilder = new ContainerBuilder();
        $containerBuilder->addDefinitions($this->entries);
        $this->container = $containerBuilder->build();
    }

    public function getContainer()
    {
        return $this->container;
    }

    public function searchEntry(string $key): bool
    {
       return array_key_exists($key, $this->entries);
    }
    
}