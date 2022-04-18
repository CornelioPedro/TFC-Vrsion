<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="../jquery-ui-1.12.1.custom/jquery-ui.css">
        <link rel="stylesheet" href="../jquery-ui-1.12.1.custom/jquery-ui.theme.css">
        <link rel="stylesheet" href="../jquery-ui-1.12.1.custom/jquery-ui.structure.css">
        <link rel="stylesheet" href="../Datatable/datatables.min.css">
        <script src="../jquery-ui-1.12.1.custom/jquery-ui.js"></script>
        <script src="../jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
        <script src="../Datatable/datatables.min.js"></script>
    </head>
    <?php
    include ("../View/upload_arquivo.php");
    //include ("../View/view_arquivos.php");
    include ("../Model/conexao.php");
    $dbh = new PDO("mysql:host=localhost; dbname=dbpraiscim", "root", "");
    $msg = false;
    $arquivos = $_FILES['arquivo'];
    $arquivoNovo = explode('.', $arquivos['name']);
    if (isset($_POST['acao'])) {
        //if ($arquivoNovo[sizeof($arquivoNovo) - 1] != 'pdf') {
            //die("Nao pode fazer upload deste tipo de arquivo");
        //} else {
            $name = $_FILES['arquivo']['name'];
            $type = $_FILES['arquivo']['type'];
            $data = file_get_contents($_FILES['arquivo']['tmp_name']);
            $stmt = $dbh->prepare("insert into arquivos_blob values('',?,?,?)");
            $stmt->bindParam(1, $name);
            $stmt->bindParam(2, $type);
            $stmt->bindParam(3, $data);
            $stmt->execute();
            
        //}
    }
    
    ?>
    


