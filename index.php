<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
        <?php
            $books = [
                [
                    "name" => "1st",
                    "author" => "first",
                ],
                [
                    "name" => "2nd",
                    "author" => "second",
                ],
                [
                    "name" => "3rd",
                    "author" => "third",
                ]
            ];

        ?>

        <ul>
            <?php
                $filteredBooks = array_filter($books, function($book) {
                    return $book["author"] === 'third';
                });
                foreach($filteredBooks as $book) {
                    echo "<li>" . $book["name"] . "</li>";
                }
            ?>
        </ul>
</body>
</html>
