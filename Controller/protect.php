<?php

    if(!isset($_SESSION)){
        session_start();
    }
    
    if(!isset($_SESSION['id'])){
        die("Voce nao tem acesso por nao estar logado.<p><a href=\"../View/Bem_Vindo.php\">Entrar</a></p>");
    }
    
?>

