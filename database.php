<?php

class Database {
    public $connection;

    public function __construct($config, $user = 'root', $password = 'root') {
        $dsn = "mysql:" . http_build_query($config, '', ';');
        $this->connection = new PDO($dsn, "root", "root");
    }

    public function query($query, $param = []) {
        $statement = $this->connection->prepare($query);
        $statement->execute($param);

        return $statement;
    }
}
