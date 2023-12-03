<?php

namespace App\Websocket;

use Illuminate\Support\Facades\DB;
use PDOException;

class dbConnection 
{
    private $host;
    private $user;
    private $pass;
    private $db_name;

    public function __construct()
    {
        $this->host = $_ENV['DB_HOST'];
        $this->user = $_ENV['DB_USERNAME'];
        $this->pass = $_ENV['DB_PASSWORD'];
        $this->db_name = $_ENV['DB_DATABASE'];
    }

    public function getConnect()
    {
        try {
            return DB::connection()->getPdo();
        } catch (PDOException $err) {
            die("Erro na conexão com o banco de dados: " . $err->getMessage());
        }
    }
}
