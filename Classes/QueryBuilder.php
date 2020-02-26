<?php

class QueryBuilder {
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // get all schools
    public function getSchools()
    {
        $sql = "select * from schools";

        $query = $this->db->prepare($sql);
        $query->execute();

        $schools = $query->fetchAll(PDO::FETCH_OBJ);

        return $schools;
    }

    // get all students
    public function getStudents()
    {
        $sql = "select * from students";

        $query = $this->db->prepare($sql);
        $query->execute();

        $students = $query->fetchAll(PDO::FETCH_OBJ);

        return $students;
    }

    // get specify student
    public function getStudent($id)
    {
        $sql = "select * from students where students.id = {$id}";

        $query = $this->db->prepare($sql);
        $query->execute();

        $student = $query->fetchAll(PDO::FETCH_OBJ);

        return $student;
    }

    // get all grade of specify student
    public function getStudentGrades($id)
    {
        $sql = "select user_grades.grade from user_grades where student_id = {$id}";

        $query = $this->db->prepare($sql);
        $query->execute();

        $student_grades = $query->fetchAll(PDO::FETCH_OBJ);

        return $student_grades;
    }


}