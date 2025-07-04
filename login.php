<?php
session_start();

$users = array(
    "okxn" => "okxn123",
    // Info o autorze itd.
); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['szwedas'];
    $password = $_POST['masturbacja'];

    if (array_key_exists($username, $users) && $users[$username] === $password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Invalid auth key.";
    }
}
?>

