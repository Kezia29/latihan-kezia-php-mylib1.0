<?php
require('../db/database.php');
$db = new Database();

$id_transaction = $_POST['id_transaction'];
$charge = $_POST['charge'];
$ket = $_POST['ket'];

$db->query('UPDATE loans SET end_date = now(), charge = :charge, ket = :ket WHERE id_transaction = :id_transaction');

$db->bind(':id_transaction', $id_transaction);
$db->bind(':charge', $charge);
$db->bind(':ket', $ket);

$db->execute();

header("Location: ../data-loan.php");
