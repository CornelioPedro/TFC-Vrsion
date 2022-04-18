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

        $sql_code = "SELECT * FROM docentes WHERE Username = '$usuario' AND senha = '$password'";
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
            $_SESSION['Username'] = $usuario['Username'];
            header("Location: ../View/index_Docentes.php");
        } else {
            if (!isset($_SESSION['id'])) {
                die("Falha no login! Codigo ou Password invalidos.<p><a href=\"../View/login_Docentes.php\">Entrar</a></p>");
            }
        }
    }
}


//include("../View/login.php");
////session_start();
//
//$username = $_POST["txUsername"];
//$password = $_POST["txPassword"];
//
//$sql = "select * from usuarios where username= '" . $username . "'AND password='" . $password . "'limit 1";
//
//$result = $conn->query($sql);
//$count = $result->num_rows;
//
////if ($count == 1) {
////    if ($username == "ADMIN" || $username == "admin" || $username == "Admin") {
////        //  session_register("username");
////        $_SESSION['username'] = $username;
////        header("location: indexAdmin.php");
////    } else {
////        $d = date('Y-m-d');
////        ;
////        $sql = "SELECT * FROM `datas` WHERE'" . $d . "'between dataInicio and dataFim";
////        $result = $conn->query($sql);
//        if ($result->num_rows > 0) {
//            // session_register("username");
//            $_SESSION['username'] = $username;
//            header("location: ../View/index.php");
//        } else {
//            echo "<script language='javascript' type='text/javascript'>alert('De momento nao existe nenhum inquerito a ser respondido');window.location.href='index.php'</script>";
//        }
////    }
////} else {
////    echo "<script language='javascript' type='text/javascript'>alert('Username ou Password errado');window.location.href='index.php'</script>";
////}

 
   