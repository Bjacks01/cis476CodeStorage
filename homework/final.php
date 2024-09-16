<?php
session_start();

//if (isset($_SESSION['name'])) {
//  echo "valid key";  
//}

$fn = $_SESSION['name'];

$num = $_POST["number"]

//var_dump($_SESSION);
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Welcome <?php echo $fn; ?>
        <br>
        <?php
        // put your code here
        for ($i = 0; $i < $num; $i++) {
            echo "hi<br>";
        }
        ?>
    </body>
</html>
