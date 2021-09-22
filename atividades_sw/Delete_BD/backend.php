<?php

$conn = mysqli_connect('127.0.0.1', 'root', '', 'bhaskara_sw');

$rand = rand(-50, 50);

echo $rand;

$insert = "INSERT INTO `bhaskara`(`id`, `a`, `b`, `c`, `delta`, `x1`, `x2`) VALUES ('$rand','$rand','$rand','$rand','$rand','$rand','$rand')";

// for ()

?>