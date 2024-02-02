<?php
require('../db/database.php');

$db = new Database();

$no_barcode = $_POST['no_barcode'];
$title = $_POST['title'];
$writers = $_POST['writers'];
$year = $_POST['year'];
$publishers = $_POST['publishers'];
$subject = $_POST['subject'];

$cvr_image = null;

if(isset($_FILES["image"])){

    $file= $_FILES ['image']['tmp_name'];

    if ($file) {
        $cvr_image = @base64_encode(file_get_contents($file));
    }
}

if ($cvr_image){

    $db->query('UPDATE books SET title = :title, writers = :writers, year = :year, publishers = :publishers, subject = :subject, cvr_image = :cvr_image WHERE no_barcode = :no_barcode');

    $db->bind(':no_barcode', $no_barcode);
    $db->bind(':title', $title);
    $db->bind(':writers', $writers);
    $db->bind(':year', $year);
    $db->bind(':publishers', $publishers);
    $db->bind('subject', $subject);
    $db->bind('cvr_image', $cvr_image);


} else {

    $db->query('UPDATE books SET title = :title, writers = :writers, year = :year, publishers = :publishers, subject = :subject WHERE no_barcode = :no_barcode');

    $db->bind(':no_barcode', $no_barcode);
    $db->bind(':title', $title);
    $db->bind(':writers', $writers);
    $db->bind(':year', $year);
    $db->bind(':publishers', $publishers);
    $db->bind(':subject', $subject);

}


$db->execute();

header("Location: ../data-book.php");