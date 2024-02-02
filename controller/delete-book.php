<?php

require('../db/database.php');
$db = new Database();

$no_barcode = $_GET['no_barcode'];

$db->query('DELETE FROM books WHERE no_barcode=:no_barcode');
 
$db->bind(':no_barcode', $no_barcode);

$db->execute();

header("Location: ../data-book.php");