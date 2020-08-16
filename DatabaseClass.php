<?php

class newJob{
    private $connstring;
    private $user;
    private $pass;
    private $pdo;
    

    public function __construct($connstring = "mysql:host=localhost;dbname=testdb",$user = "user",$pass = ""){

        $this->pdo = new pdo($connstring, $user, $pass);

    }

    public function getPDO()
    {
        return $this->pdo;
    }

    public function insertData($sql){
        if(!$this->pdo->exec($sql)){
            $errors = $this->pdo->errorInfo();
            echo("Something went wrong").$errors[2];
        }
    }

}

?>