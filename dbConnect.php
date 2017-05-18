<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "retrofit";
 // define('HOST','localhost');
 // define('USER','root');
 // define('PASS','');
 // define('DB','mahasiswa');

 $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('Unable to Connect');