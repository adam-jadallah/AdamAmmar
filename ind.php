<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectform";

$conn = mysqli_connect($servername, $username, $password, $dbname);


$sql = "select * from signin where username = '" . $_SESSION["username"] . "' and password = '" . $_SESSION["password"] . "'";

$result = mysqli_query($conn, $sql);
mysqli_close($conn);
if ($result->num_rows == 0) {
    header("location: signin.php");
}
?>
