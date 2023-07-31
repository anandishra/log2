<?php
require('connection.php');

if (isset($_POST['login'])) {
    $usernameOrEmail = $_POST['username'];
    $password = $_POST['password'];

    $login_query = "SELECT * FROM users WHERE (username = ? OR email = ?) AND password = ?";
    $stmt = $con->prepare($login_query);
    $stmt->bind_param("sss", $usernameOrEmail, $usernameOrEmail, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "login successful!";
    } else {
        echo "error occured!";
    }
}
?>