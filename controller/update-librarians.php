<?php
require('../db/database.php');

$db = new Database();

$username= $_POST['username'];
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

if ($avatar){

    $db->query('UPDATE librarians SET username = :username, password = :password, name = :name, division = :division, avatar = :avatar WHERE username = :username');

    $db->bind(':username', $username);
    $db->bind(':password', MD5($password));
    $db->bind(':name', $name);
    $db->bind(':division', $division);
    $db->bind(':avatar', $avatar);


} else {

    $db->query('UPDATE librarians SET username = :username, password = :password, name = :name, division = :division, avatar = :avatar WHERE username = :username');

    $db->bind(':username', $username);
    $db->bind(':password', MD5($password));
    $db->bind(':name', $name);
    $db->bind(':division', $division);
    $db->bind(':avatar', $avatar);

}


$db->execute();

header("Location: ../data-librarian.php");