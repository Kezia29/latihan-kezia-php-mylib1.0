<?php

require ('../db/database.php');
$db = new Database();


// print_r($_POST);

// ---> untuk memastikan apakah data input sudah masuk

$no_barcode = $_POST['no_barcode'];
$title = $_POST['title'];
$writers = $_POST['writers'];
$year = $_POST['year'];
$publishers = $_POST['publishers'];
$subject = $_POST['subject'];

$cvr_image = null;
 
if(isset($_FILES["cvr_image"])){

    $file= $_FILES ['cvr_image']['tmp_name'];

    if ($file) {
        $cvr_image = @base64_encode(file_get_contents($file));
    }
}

// BIND
$db->query('INSERT INTO books (no_barcode, title, writers, year, publishers, subject, cvr_image) VALUES (:no_barcode, :title, :writers, :year, :publishers, :subject, :cvr_image)');

$db->bind(':no_barcode', $no_barcode);
$db->bind(':title', $title);
$db->bind(':writers', $writers);
$db->bind(':year', $year);
$db->bind(':publishers', $publishers);
$db->bind('subject', $subject);
$db->bind('cvr_image', $cvr_image);

$db->execute();

header("Location: ../data-book.php");
