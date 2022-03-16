<?php

include ("../Model/conexao.php");
//$dbh = new PDO("mysql:host=localhost; dbname=dbpraiscim", "root", "");

$dbh = new PDO("mysql:host=localhost; dbname=dbpraiscim", "root", "");
$id = isset($_GET['id']) ? $_GET['id'] : "";
$stat = $dbh->prepare("select * from arquivos_blob where id=?");
$stat->bindParam(1, $id);
$stat->execute();
$row = $stat->fetch();
header('Content-Type:' . $row['tipo_arquivo']);
//header('Content-Type' . $row['path_arquivo']);
echo $row['data_upload'];
