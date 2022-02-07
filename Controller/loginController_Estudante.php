<?php

include ("../Model/conexao.php");
session_start();
if (isset($_POST["txCodigo"]) || isset($_POST["txPassword"])) {
    if (strlen($_POST["txCodigo"]) === 0) {
        echo "Digite seu Codigo de Codigo";
    } else if (strlen($_POST["txPassword"]) == 0) {
        echo 'Digite sua senha';
    } else {

        // o trexo a baixo lipa as variaveis e evita o sql injection
        $Codigo = $mysqli->real_escape_string($_POST["txCodigo"]);
        $password = $mysqli->real_escape_string($_POST["txPassword"]);

        $sql_code = "SELECT * FROM usuarios WHERE Codigo = '$Codigo' AND Password = '$password'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execusao da consulta");

        //a variavel result resebe o numero de Codigos encotrados
        $result = $sql_query->num_rows;
//        $count = $result->num_rows;
        if ($result == 1) {

            $Codigo = $sql_query->fetch_assoc();
            //Se nao tiver uma sexao vai iniciar uma nova sexao
            if (isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $Codigo['id'];
            $_SESSION['Codigo'] = $Codigo['Codigo'];
            header("Location: ../View/index_Estudantes.php");
        } else {
            if (!isset($_SESSION['id'])) {
                die("Falha no login! Codigo ou Password invalidos.<p><a href=\"../View/login_Estudantes.php\">Entrar</a></p>");
            }
        }
    }
}