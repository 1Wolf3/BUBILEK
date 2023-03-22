<?php

/**
 * IDB interface
 * Interface for DB driver and basic I/U/D/S operations.
 */
interface IDB
{
    /**
     * Connect to DB on DBMS
     *
     * @param string $host hostname
     * @param string $username username 
     * @param string $password password
     * @param string $database database name
     * @return static instance of DB on success
     */
    public function connect(
        string $host = "",
        string $username = "",
        string $password = "",
        string $database = ""
    ): ?static;

    /**
     * SELECT rows from table
     *
     * @param string $query SQL query SELECT string
     * @return array result as a associative array, key is attribute name, value is attribute array; empty on error
     */
    function select(string $query): array;

    /**
     * INSERT record to table
     *
     * @param string $table database table name
     * @param array $data data to insert, key is attribute name, value is attribute value
     * @return boolean true on success otherwise false
     */
    function insert(string $table, array $data): bool;

    /**
     * UPDATE record in table
     *
     * @param string $table database table name
     * @param integer $id primary key value for record to update
     * @param array $data data to update, key is attribute name, value is attribute value
     * @return boolean true on success otherwise false
     */
    function update(string $table, int $id, array $data): bool;

    /**
     * DELETE item from table
     *
     * @param string $table database table name
     * @param integer $id primary key value for record to delete
     * @return boolean true on success otherwise false 
     */
    function delete(string $table, int $id): bool;
}