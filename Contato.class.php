<?php
class Contato{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $pdo;



    function __construct(){
        $dns = "mysql:dbname=contato;host=localhost";
        $user = "root";
        $dbPass = "";

        try{
            $this->pdo = new PDO(dsn: $dns, username: $user, password: $dbPass);
        } catch (\Throwable $th) {

            return false;

        }




    }



    function chkUser($email){

    }

    function chkUserPass($email, $senha){

    }

    function insertUser($nome, $email, $senha){
    
    }
}