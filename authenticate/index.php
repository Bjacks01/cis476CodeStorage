<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "softball";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT password FROM users WHERE username = 'admin'";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (mysqli_num_rows($result) == 1) {
            // output data of each row
            $row = mysqli_fetch_assoc($result);
            echo "password: " . $row["password"] . "<br>";
            $db_hash = $row["password"];
        } else {
            echo "incorrect username or password";
        }
        
        $actualPassword = "pwd";
        $hash = password_hash($actualPassword, PASSWORD_DEFAULT);
        echo "New hash: $hash<br>";
        
        $result = password_verify($actualPassword, $db_hash);
        echo "verify returned: $result<br>";
        if ($result) {
            echo "good pwd<br>";
        } else {
            echo "bad pwd<br>";
        }
        ?>
    </body>
</html>
