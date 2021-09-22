<?php

$id = $_GET['id'];

$conn = mysqli_connect('127.0.0.1', 'root', '', 'bhaskara_sw');
$query = "DELETE FROM `bhaskara` WHERE `bhaskara`.`id` = " . $id;

$result = mysqli_query($conn, $query);

var_dump($result);

?>