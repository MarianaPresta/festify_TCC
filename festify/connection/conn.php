<?php
require "config.php";

$username = "root";
$password = "";
$connectionString = $config['database']['driver'].':'. $config['database']['database'];
$pdo = new PDO($connectionString);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



 
