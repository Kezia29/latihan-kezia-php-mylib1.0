<?php

session_start();

require('../db/database.php');
$db = new Database();

$username = $_POST['username'];
$password = $_POST['password'];

$db->query('SELECT * FROM librarians WHERE username=:username AND password = MD5(:password)');

$db->bind(':username', $username);
$db->bind(':password', $password);

$admin = $db->single();

if(@$admin) {
    $_SESSION['username'] = $admin['username'];
    $_SESSION['name'] = $admin['name'];
    $_SESSION['division'] = $admin['division'];
    // $_SESSION['avatar'] = $avatar['avatar'];
    $_SESSION['islogin'] = true;

    header("Location: ../index.php");
} else {

    header("Location: ../login.php");
}