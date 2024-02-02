<?php

require ('../db/database.php');
$db = new Database();


// print_r($_POST);

// ---> untuk memastikan apakah data input sudah masuk

$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$division = $_POST['division'];

$avatar = null;
 
if(isset($_FILES["avatar"])){

    $file= $_FILES ['avatar']['tmp_name'];

    if ($file) {
        $avatar = @base64_encode(file_get_contents($file));
    }
}

// BIND
$db->query('INSERT INTO librarians (username, password, name, division, avatar) VALUES (:username, :password, :name, :division, :avatar)');

$db->bind(':username', $username);
$db->bind(':password', MD5($password));
$db->bind(':name', $name);
$db->bind(':division', $division);
$db->bind(':avatar', $avatar);

$db->execute();

header("Location: ../data-librarian.php");
