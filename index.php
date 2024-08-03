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

            function filterByName($books, $author) {
                $filteredBooks = [];
                foreach($books as $book) {
                    if ($book["author"] === $author) {
                        $filteredBooks[] = $book;
                    }
                }
                return $filteredBooks;
            }
        ?>

        <ul>
            <?php
                $filteredBooks = filterByName($books, "second");
                foreach($filteredBooks as $book) {
                    echo "<li>" . $book["name"] . "</li>";
                }
            ?>
        </ul>
</body>
</html>
