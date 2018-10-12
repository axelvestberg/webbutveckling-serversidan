<?php
session_start();

header('Content-type: text/plain');

$myfile = fopen("counter.txt", "w") or die("Unable to open file!");

$_SESSION['counter'] = $_SESSION['counter'] + 1;
$count = $_SESSION['counter'];
fwrite($myfile, $count);

$output_file = file_get_contents("counter.txt");
echo $output_file;

?>