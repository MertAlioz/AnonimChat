<?php

namespace back_end\db_conntect;

class DB
{
    const
        HOST = "localhost",
        DBNAME = "blog-sql",
        USERNAME = "root",
        PASSWORD  = "";
}


class dbConntect
{
    private $host = "localhost";
    private $dbName = "blog-sql";
    private $userName = "root";
    public $conn;
    public function conntect()
    {
        $this->conn = mysqli_connect($this->host, $this->userName, "", $this->dbName);
        if (mysqli_connect_error()) {
            echo "error";
        }
    }
}
