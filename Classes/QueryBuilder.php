<?php

class QueryBuilder
{
    private $db;

    /**
     * QueryBuilder constructor.
     * @param PDO $db
     */
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    /**
     * get all schools
     *
     * @return array
     */
    public function getSchools(): array
    {
        $sql = "select * from schools";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     *get all students
     *
     * @return array
     */
    public function getStudents(): array
    {
        $sql = "select * from students";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * get specify student
     *
     * @param $id
     *
     * @return array
     */
    public function getStudent($id): array
    {
        $sql = "select * from students where students.id = {$id}";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * get all grades of specify student
     *
     * @param $id
     *
     * @return array
     */
    public function getStudentGrades($id): array
    {
        $sql = "select user_grades.grade from user_grades where student_id = {$id} order by grade desc";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * get all grades of specify student
     *
     * @param $id
     *
     * @return array
     */
    public function getAverageStudentGrades($id): array
    {
        $sql = "SELECT AVG(grade) as avg_grade FROM user_grades WHERE user_grades.student_id = {$id}";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function getSchoolOfStudent($id)
    {
        $sql = "SELECT sc.name FROM students as s
JOIN schools as sc ON (s.school_id = sc.id)
WHERE s.id = ?
";

        $query = $this->db->prepare($sql);
        $query->execute([$id]);

        return $query->fetch(PDO::FETCH_OBJ);
    }


}