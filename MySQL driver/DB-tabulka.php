<?php

require_once 'SQLdriver.php';

class Entity {
    protected $db;
    protected $table;
    protected $columns;
    protected $primaryKey;

    public function __construct(IDB $db) {
        $this->db = $db;
        $this->table = 'entity';
        $this->columns = ['id', 'name', 'description'];
        $this->primaryKey = 'id';
    }

    public function getAll() {
        $query = "SELECT * FROM {$this->table}";
        $entities = $this->db->select($query);
        return $entities;
    }

    public function toHtmlTable($entities) {
        $table = '<table><thead><tr>';
        foreach ($this->columns as $column) {
            $table .= "<th>$column</th>";
        }
        $table .= '</tr></thead><tbody>';
        foreach ($entities as $entity) {
            $table .= '<tr>';
            foreach ($this->columns as $column) {
                $table .= "<td>{$entity[$column]}</td>";
            }
            $table .= '</tr>';
        }
        $table .= '</tbody></table>';
        return $table;
    }
}

$db = (new MySQL())->connect('localhost', 'username', 'password', 'database');
$entity = new Entity($db);
$entities = $entity->getAll();
$html = $entity->toHtmlTable($entities);
echo $html;
