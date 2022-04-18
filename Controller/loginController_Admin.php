<?php

include ("../Model/conexao.php");
session_start();
if (isset($_POST["txUsername"]) || isset($_POST["txPassword"])) {
    if (strlen($_POST["txUsername"]) === 0) {
        echo "Digite seu usuario de usuario";
    } else if (strlen($_POST["txPassword"]) == 0) {
        echo 'Digite sua senha';
    } else {

        // o trexo a baixo lipa as variaveis e evita o sql injection
        $usuario = $mysqli->real_escape_string($_POST["txUsername"]);
        $password = $mysqli->real_escape_string($_POST["txPassword"]);

        $sql_code = "SELECT * FROM administrador WHERE usernameAdmin = '$usuario' AND password = '$password'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execusao da consulta");

        //a variavel result resebe o numero de usuarios encotrados
        $result = $sql_query->num_rows;
//        $count = $result->num_rows;
        if ($result == 1) {

            $usuario = $sql_query->fetch_assoc();
            //Se nao tiver uma sexao vai iniciar uma nova sexao
            if (isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['usernameAdmin'] = $usuario['usernameAdmin'];
            header("Location: ../View/index_admin.php");
        } else {
            if (!isset($_SESSION['id'])) {
                die("Falha no login! Codigo ou Password invalidos.<p><a href=\"../View/login_Docentes.php\">Entrar</a></p>");
            }
        }
    }
}