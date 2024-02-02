<?php

require('../db/database.php');
$db = new Database();

$id_member = $_GET['id_member'];

$db->query('DELETE FROM member WHERE id_member=:id_member');
 
$db->bind(':id_member', $id_member);

$db->execute();

header("Location: ../data-member.php");