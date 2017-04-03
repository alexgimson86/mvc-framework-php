<?php 

class QueryBuilder{
    
    protected $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }


    public function selectAll($tableName){
        $statement = $this->pdo->prepare("select * from {$tableName}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
};