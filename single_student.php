<?php
// All students
$student = $query_builder->getStudent($_GET['student']);

$student_grades = $query_builder->getStudentGrades($_GET['student']);

require('views/student_single.view.php')
?>

