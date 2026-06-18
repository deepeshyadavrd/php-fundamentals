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
    $read = false;
    if($read == true){

?>
    <h1>
        You have read "<?php echo $name; ?>."
    </h1>
<?php
    }else {
?>
            <h1>
                You have not read "<?php echo $name; ?>.";
            </h1>
<?php } ?>
</body>
</html>
