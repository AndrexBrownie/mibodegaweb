<?php

namespace App\Interfaces;

interface IProductoService
{
    public function getAll(bool $estado);
    public function get(int $id);
    public function insert($obj);
    public function update($obj);
    public function delete(int $id);
}