<?php

namespace App\Models;

use Libs\Connection;

class CategoryModel 
{
    private $pdo;

    public function getAll()
    {
        $this->pdo = Connection::getInstance()->getConnection();

        $sql = "SELECT categoryid, categoryname, description FROM categories";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }
}