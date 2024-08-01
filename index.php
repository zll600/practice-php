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
                    [
                "name" => "1st",
                        ],
                [
                "name" => "2nd",
                    ],
                [
                "name" => "3rd"
                    ]
            ];
        ?>

        <ul>
            <?php
                foreach ($todoList as $todo) {
                    echo "<li>" . "{$todo['name']}" . "</li>";
                }
            ?>
        </ul>
</body>
</html>
