<?php

namespace app\core;

class Pdo{

    private $dbname;
    private $host;
    private $user;
    private $password;
    private $con;

    public function __construct()
    {
        $this->dbname = "db_api_customers";
        $this->host = "localhost";
        $this->user = "root";
        $this->password = "";

        try {
            $this->con = new \PDO("mysql:dbname=$this->dbname;host=$this->host", $this->user, $this->password);
        } catch (\Throwable $th) {
            var_dump($th->getMessage());
        }
        
    }

    public function select($sql, $param = [])
    {
        $res = $this->con->prepare($sql);
        $res->execute($param);
        return $res->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function exe($sql, $param)
    {
        $st = $this->con->prepare($sql);
        $st->execute($param);
    }
}