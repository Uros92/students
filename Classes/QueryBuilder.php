<?php

class QueryBuilder {
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }


    // get all students
    public function getStudents($table)
    {
        $sql = "select * from {$table}";

        $query = $this->db->prepare($sql);
        $query->execute();

        $students = $query->fetchAll(PDO::FETCH_OBJ);

        return $students;
    }
}