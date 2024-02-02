<?php

require ('../db/database.php');
$db = new Database();

$no_barcode = $_POST ['no_barcode'];
$id_member = $_POST['id_member'];
// var_dump($_POST);
// exit;

$db->query('INSERT INTO loans (id_member, no_barcode, start_date) VALUES (:id_member, :no_barcode, now())');

$db->bind(':id_member', $id_member);
$db->bind(':no_barcode', $no_bacode);

$db->execute();

header("Location:../data-loan.php");