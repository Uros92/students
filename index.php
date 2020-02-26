<?php include('views/_partials/head.php');?>


<!--Check if user is selected or not. If yes - show single student. Otherwise show all students-->
<?php

    if(!isset($_GET['student'])) {
        include('schools.php');
        include('students.php');
    } else {
        include('single_student.php');
    }

?>






<?php /*include('schools.php');*/?><!--

--><?php /*include('students.php');*/?>


<?php include('views/_partials/footer.php');?>