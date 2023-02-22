<?php

class MySQL implements IDB
{
    private $connection;

    public function connect(
        string $host = "",
        string $username = "",
        string $password = "",
        string $database = ""
    ): ?static {
        $this->connection = new mysqli($host, $username, $password, $database);

        if ($this->connection->connect_error) {
            return null;
        }

        return $this;
    }

    public function select(string $query): array {
        $result = $this->connection->query($query);

        if (!$result) {
            return array();
        }

        $rows = array();
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function insert(string $table, array $data): bool {
        $keys = array_keys($data);
        $values = array_map(array($this->connection, 'real_escape_string'), array_values($data));
        $query = sprintf("INSERT INTO %s (%s) VALUES ('%s')", $table, implode(',', $keys), implode("','", $values));

        $result = $this->connection->query($query);

        return $result;
    }

    public function update(string $table, int $id, array $data): bool {
        $set = array();
        foreach ($data as $key => $value) {
            $set[] = sprintf("%s = '%s'", $key, $this->connection->real_escape_string($value));
        }

        $query = sprintf("UPDATE %s SET %s WHERE id = %d", $table, implode(',', $set), $id);

        $result = $this->connection->query($query);

        return $result;
    }

    public function delete(string $table, int $id): bool {
        $query = sprintf("DELETE FROM %s WHERE id = %d", $table, $id);

        $result = $this->connection->query($query);

        return $result;
    }
}
