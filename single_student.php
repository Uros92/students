<?php
// All students
$student = $query_builder->getStudent($_GET['student']);
$school = $query_builder->getSchoolOfStudent($_GET['student']);

// Get all grades from specific student
$student_grades = $query_builder->getStudentGrades($_GET['student']);
$average_student_grades = $query_builder->getAverageStudentGrades($_GET['student']);

if($school->name === "CSM") {

    $json_response = [$student, $school, $student_grades, $average_student_grades];
    if(floatval($average_student_grades[0]->avg_grade) >= 7) {
        $json_response['status'] = 'pass';
    } else {
        $json_response['status'] = 'fail';
    }
    echo json_encode($json_response, true);


} else {
    if($student_grades[0]->grade >8) {

    }
}

//print_r($json_response);

//require('views/student_single.view.php');