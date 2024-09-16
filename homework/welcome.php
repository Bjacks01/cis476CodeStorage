<?php
//processing go here...
//var_dump($_GET);
//var_dump($_POST);
session_start();

$first_name = $_POST["name"];

$_SESSION["name"] = $first_name;

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "Welcome, " . $first_name . " !<br>";
        ?>
        <form action="final.php" method="POST">
            Give me a number: <input type="int" name="number"><br>
            <input type="submit">
        </form>
    </body>
</html>
