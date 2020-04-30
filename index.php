<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do-PHP</title>
</head>
<body>
    <h2>Add a To-Do</h2>
    <form action="./index.php" method="POST">
        <label for="newtask">
            Enter a new task:
            <input type="text" name="newtask" id="newtask">
        </label>
        <input type="submit" value="Add To List">
        <input type="reset" value="Reset">
    </form>
    <h2>Active To-Dos</h2>
    <h2>Completed To-Dos</h2>
    <h2>Debugging</h2>
</body>
</html>