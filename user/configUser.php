<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS");
header("Access-Control-Allow-Headers: token, Content-Type");
header("Access-Control-Max-Age: 1728000");
header("Content-Length: 0");
header("Content-Type: text/plain");
//global $con;
define("CON",  mysqli_connect("localhost", "root", "","ionic-php-crud") or die("could not connect DB"));
$con = mysqli_connect("localhost", "root", "","ionic-php-crud") or die("could not connect DB");