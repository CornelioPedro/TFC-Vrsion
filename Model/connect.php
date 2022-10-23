<?php

function conexao() {
    $conexao = mysqli_connect('localhost','root','','dbpraiscim','3306');
    return $conexao;
}
?>