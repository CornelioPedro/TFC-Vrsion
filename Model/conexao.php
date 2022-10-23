<?php
$host = "localhost";
$user = "root";
$pass = "";
$bd = "dbpraiscim";

$mysqli = new mysqli($host, $user, $pass, $bd);



if ($mysqli->connect_errno){
    echo 'Connect failed: '.$mysqli->connect_errno;
    exit();
} else {
    echo 'Conectado com sucesso!!';
}