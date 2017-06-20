<?php

class ProductManager
{
    private $database;

    public function __construct()
    {
        $this->database = new PDO("mysql:host=localhost;dbname=islom;", "root", "");
    }

    public function delete($id)
    {
        $statement = $this->database->prepare("DELETE FROM product WHERE id=:id");
        return $statement->execute(array(
            ":id" => $id
        ));
    }
}