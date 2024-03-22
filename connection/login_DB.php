<?php
session_start();
include("connection_db.php");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login  = "SELECT * FROM user WHERE username='$username' And password='$password'";
    $result = mysqli_query($conn, $login);

    $row   = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        header("Location: ../dashboard.php");
        exit();
    } else {
        $_SESSION["status"]      = "Check your Username and Password if correct.";
        $_SESSION['status_code'] = 'error';
        header("Location: ../index.php");
        exit();
    }

}

$conn->close();

?>