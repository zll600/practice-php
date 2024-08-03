<?php

class Database {
    public $connection;
    public $statement;

    public function __construct($config, $user = 'root', $password = 'root') {
        $dsn = "mysql:" . http_build_query($config, '', ';');
        $this->connection = new PDO($dsn, $user, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
        $this->statement = null;
    }

    public function query($query, $param = []): Database
    {
        $statement = $this->connection->prepare($query);
        $this->statement = $statement;
        $statement->execute($param);

        return $this;
    }

    public function get() {
        return $this->statement->fetchAll();
    }

    public function find() {
        return $this->statement->fetch();
    }

    public function findOrFail() {
        $result = $this->statement->fetch();
        if (! $result) {
            abort();
        }
        return $result;
    }
}
