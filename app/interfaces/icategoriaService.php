<?php

namespace App\Interfaces;

interface ICategoriaService
{
    public function getAll();
    public function getAllSimple();
    public function get(int $id);
    public function insert($obj);
    public function update($obj);
    public function delete(int $id);
}