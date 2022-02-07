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
        <script>

            function carregarView() {
                $("#conteudo").load("view_arquivos.php");
            }

            function carregarViewArq() {
                $("#container").load("view_arquivos.php");
            }
        </script>
    </head>
    <?php
//    if (isset($_FILES['arquivo'])) {
//        var_dump($_FILES);
//    }
    ?>   

    <div class="container" >
        <form class="form-horizontal" action="../Controller/cont_upload_arquivos.php" method="post" name="upload_excel" enctype="multipart/form-data">
            <table class="table-responsive"> 
                <tr>
                    <td><label class="control-label" for="file">Selecione o Ficheiro</label></td>
                </tr>
                <tr>
                    <td><input type="file" name="arquivo" id="file" class="form-control"></td>
                </tr>
                <br/>
                <tr>
                    <td><br/><button type="submit" name="acao" class="form-control" style="color: white;background-color: #E45225;height: 30px">
                            <span class="glyphicon glyphicon-save"></span> &nbsp; Enviar Ficheiro</button>
                    </td>
                </tr>
                <td>
            </table>
        </form>
        <p></p>
        <ol>
            <?php
//                $stat = $dbh ->prepare("select * from arquivos_blob");
//                $stat -> execute();
//                while ($row = $stat->fetch()){
//                    echo "<li>".row['name']."</li>";
//                }
            ?>
        </ol>
    </div>
   