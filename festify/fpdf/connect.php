<?php
$host = "localhost";
$pass = "";
$user = "root";
$bd = "db_sysfe";

$conn = mysqli_connect($host, $user, $pass, $bd);

if(!$conn) {
echo "Não Conectado";
} else {
    echo "Conectado";
}



?>