<?php
session_start();

$name = $_POST["name"];
$pwd = $_POST["pwd"];

if ($pwd == "foo") {
    //ok
    echo "good";
    if (isset($_POST["remember"]) && $_POST["remember"] == "ON") {
        setcookie("user", $name, time() + 3600 );
    }
} else {
    // direct back to homepage
    echo "bad";
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "welcome user."
        ?>
    </body>
</html>
