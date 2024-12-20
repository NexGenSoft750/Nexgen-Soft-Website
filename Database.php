<?php

class Database {
    private $connection;

    public function __construct()
    {
        $host = getenv('MYSQL_HOST');
        $user = getenv('MYSQL_USER');
        $password = getenv('MYSQL_PASSWORD');
        $database = getenv('MYSQL_DB');

        $this->connection = mysqli_connect($host, $user, $password, $database);
    }

    public function query($sql) {
        return mysqli_query($this->connection, $sql);
    }
};

?>