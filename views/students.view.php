<h2>Students</h2>
<ol>
<?php foreach ($students as $student): ?>

    <li>
        <a href="/school_board/index.php?student=<?= $student->id ?>">
            <?= $student->name ?>
        </a>
    </li>

<?php endforeach; ?>
</ol>