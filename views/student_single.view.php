<a href="/school_board/index.php">Back</a>

<h3>User: <i><?= $student[0]->name ?></i></h3>
<h3>Grades: </h3>
<li>
    <?php foreach($student_grades as $student_grade): ?>
        <li><?= $student_grade->grade ?></li>
    <?php endforeach; ?>
</li>