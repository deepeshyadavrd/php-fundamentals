<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body{
            display:grid;
            place-content: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
<?php
    $name = "Dark Matter";
    $read = true;
    if($read) {
        $message = "You have read $name";
    } else {
        $message = "You have NOT read $name";
    }

?>
<h1>
    <?= $message ?>
</h1>

<?php
    $books = [
        "Do Androids Dream of Electric Sheep",
        "The Langoliers",
        "Hail Mary",
        "Animal Farm"
    ];
?>
<h2>Recommended Books</h2>
<ul>
    <?php

    foreach($books as $book) {
        echo "<li>$book</li>";
    }
    ?>
</ul>
</body>
</html>
