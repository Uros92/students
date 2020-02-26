<?php
// All students
$student = $query_builder->getStudent($_GET['student']);
$school = $query_builder->getSchoolOfStudent($_GET['student']);

// Get all grades from specific student
$student_grades = $query_builder->getStudentGrades($_GET['student']);
$average_student_grades = $query_builder->getAverageStudentGrades($_GET['student']);


// Check students school and return correct response
$json_response = [$student, $school, $student_grades, $average_student_grades];
if($school[0]->name === "CSM") {

    if(floatval($average_student_grades[0]->avg_grade) >= 7) {
        $json_response['status'] = 'pass';
    } else {
        $json_response['status'] = 'fail';
    }
    echo json_encode($json_response, true);


} else {
    $new_array_for_xml = [];
    foreach ($json_response as $element ) {
        foreach ($element[0] as $key => $value) {
            $new_array_for_xml[] = [$key => $value];
        }
    };

    if($student_grades[0]->grade > 8) {
        $new_array_for_xml[] = ['status' => 'pass'];
    } else {
        $new_array_for_xml[] = ['status' => 'fail'];
    }

    // return XML
    print_r(json_encode($new_array_for_xml));die;


}

//require('views/student_single.view.php');