<?php

interface IDB {
    public function connect(string $host = "", string $username = "", string $password = "", string $database = ""): ?static;
    function select(string $query): array;
    function insert(string $table, array $data): bool;
    function update(string $table, int $id, array $data): bool;
    function delete(string $table, int $id): bool;
}

class MySQL implements IDB {
    private $conn;
    
    public function connect(string $host = "", string $username = "", string $password = "", string $database = ""): ?static {
        $this->conn = mysqli_connect($host, $username, $password, $database);
        return $this;
    }
    
    function select(string $query): array {
        $result = mysqli_query($this->conn, $query);
        return $result ? mysqli_fetch_all($result, MYSQLI_ASSOC) : [];
    }
    
    function insert(string $table, array $data): bool {
        $keys = implode(',', array_keys($data));
        $values = implode(',', array_map(fn($val) => "'$val'", array_values($data)));
        return mysqli_query($this->conn, "INSERT INTO $table ($keys) VALUES ($values)");
    }
    
    function update(string $table, int $id, array $data): bool {
        $values = implode(',', array_map(fn($key, $val) => "$key='$val'", array_keys($data), array_values($data)));
        return mysqli_query($this->conn, "UPDATE $table SET $values WHERE id=$id");
    }
    
    function delete(string $table, int $id): bool {
        return mysqli_query($this->conn, "DELETE FROM $table WHERE id=$id");
    }
}
