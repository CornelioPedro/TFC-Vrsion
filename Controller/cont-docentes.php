<?php

include_once '../Model/conexao.php';
$nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$num = filter_input(INPUT_POST, 'num', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_NUMBER_INT);
$passwordconf = filter_input(INPUT_POST, 'confirmPassword', FILTER_SANITIZE_NUMBER_INT);

if ($password == $passwordconf) {
    $result = "INSERT INTO `docentes` (`id`, `Nome`, `Username`, `email`,`senha`) VALUES
    (null,'$nome','$num','$email','$password')";

    $resultado = mysqli_query($mysqli, $result);
    if (mysqli_insert_id($mysqli)) {
        header("Location: ../View/index_admin.php");
    }
} else {
    function_alert("We welcome the New World");

    function function_alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }

    header("Location: ../View/index_admin.php");
}

#echo "Nome: $nome<br>";
#echo "Numero: $num<br>";
#echo "Nemail: $email<br>";
#0echo "Passs: $password<br>";
?>

