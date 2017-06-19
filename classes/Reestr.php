<?php

class Reeestr {
    
    public $connect;
    private $host = "localhost";
    private $user = "y92573p9_root";
    private $password = "123456";
    private $database = "y92573p9_root";
    
    function __construct()
    {
        $this->db_connect();
    }

    // подключение к БД
    public function db_connect()
    {
        $this->connect = mysqli_connect($this->host, $this->user, $this->password, $this->database);
    }
    
}
