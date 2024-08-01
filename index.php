<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
        <h1>
            todoList
        </h1>
        <?php
            $todoList = [
                "first",
                "second",
                "third"
            ];
        ?>

        <ul>
            <?php
                foreach ($todoList as $todo) {
                    echo "<li>$todo</li>";
                }
            ?>
        </ul>
</body>
</html>
