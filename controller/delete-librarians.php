<?php

require('../db/database.php');
$db = new Database();

$username = $_GET['username'];

$db->query('DELETE FROM librarians WHERE username=:username');
 
$db->bind(':username', $username);

$db->execute();

header("Location: ../data-librarian.php");