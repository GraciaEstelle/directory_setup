<?php
require "builder.php";
class QueryBuilder implements builder
{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function createNew(){
        try{
            $insert = "insert into product(naam,prijs,btw,category_id) values (:naam, :prijs, :btw, :categorie)";
            $newItem = $this->pdo->prepare($insert);
            $newItem->bindParam(':naam', $_POST['naam'], PDO::PARAM_STR);
            $newItem->bindParam(':prijs', $_POST['prijs'], PDO::PARAM_INT);
            $newItem->bindParam(':btw', $_POST['btw'], PDO::PARAM_INT);
            $newItem->bindParam(':categorie', $_POST['categorie'], PDO::PARAM_STR);
            $newItem->execute();
        }catch (PDOException $exception){
            die($exception->getMessage());
        }
    }

    public function selectAll($select, $table, $where){

        $statement = $this->pdo->prepare("SELECT {$select} FROM {$table} WHERE {$where}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}