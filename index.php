<?php
session_start();
if (!isset($_SESSION['todos'])) {
    $_SESSION['todos'] = array();
}

if (isset($_POST) && !empty($_POST)) {
    array_push($_SESSION['todos'], $_POST['task']);
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do-PHP</title>
</head>
<body>
    <h2>Add a To-Do</h2>
    <form action="./index.php" method="POST">
        <label for="task">
            Enter a new task:
            <input type="text" name="task" id="task">
        </label>
        <input type="submit" value="Add To List">
        <input type="reset" value="Reset">
    </form>
    <?php if (!empty($_SESSION['todos'])) : ?>
        <h2>Active To-Dos</h2>
        <ul>
            <?php foreach ($_SESSION['todos'] as $task) : ?>
                <li>
                    <input type="checkbox">
                        <?php echo $task; ?>
                    </input>
                </li>
            <?php endforeach; ?>
        </ul>
        <h2>Completed To-Dos</h2>
    <?php endif; ?>
    <h2>Debugging</h2>
    <strong>SESSION</strong>
    <pre>
        <?php var_dump($_SESSION); ?>
    </pre>
    <strong>POST</strong>
    <pre>
        <?php var_dump($_POST); ?>
    </pre>
</body>
</html>