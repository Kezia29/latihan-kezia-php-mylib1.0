<?php
require('../db/database.php');

$db = new Database();

$id_member= $_POST['id_member'];
$name = $_POST['name'];
$address = $_POST['address'];
$telp = $_POST['telp'];
$gender = $_POST['gender'];

$db->query('UPDATE member SET id_member = :id_member, name = :name, address = :address, telp = :telp, gender = :gender WHERE id_member = :id_member');

    $db->bind(':id_member', $id_member);
    $db->bind(':name', $name);
    $db->bind(':address', $address);
    $db->bind(':telp', $telp);
    $db->bind(':gender', $gender);




$db->execute();

header("Location: ../data-member.php");