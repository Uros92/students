<a href="/school_board/index.php">Back</a>

<h3>User: <i><?= $student[0]->name ?></i></h3>
<h3>School: <i><?= $school[0]->name?></i></h3>
<h3>Average grade: <?= floatval($average_student_grades[0]->avg_grade) ?></h3>
<h3>Grades: </h3>
<ul>
    <?php foreach($student_grades as $student_grade): ?>
        <li><?= $student_grade->grade ?></li>
    <?php endforeach; ?>
</ul>