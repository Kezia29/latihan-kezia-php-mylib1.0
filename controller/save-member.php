<?php

require ('../db/database.php');
$db = new Database();


// print_r($_POST);

// ---> untuk memastikan apakah data input sudah masuk

$id_member = $_POST['id_member'];
$name = $_POST['name'];
$address = $_POST['address'];
$telp = $_POST['telp'];
$gender = $_POST['gender'];

// BIND
$db->query('INSERT INTO member (id_member, name, address, telp, gender) VALUES (:id_member, :name, :address, :telp, :gender)');

$db->bind('id_member', $id_member);
$db->bind(':name', $name);
$db->bind(':address', $address);
$db->bind(':telp', $telp);
$db->bind(':gender', $gender);

$db->execute();

header("Location: ../data-member.php");
