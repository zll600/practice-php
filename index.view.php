<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
<ul>
    <?php
    foreach($filteredBooks as $book) {
        echo "<li>" . $book["name"] . "</li>";
    }
    ?>
</ul>
</body>
</html>
