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
<!--        <script>
           
            function carregarView() {
                $("#conteudo").load("index_Docentes.php");
            }
        </script>-->
    </head>

    <div class="container" >
        <!--
        <form class="form-horizontal" action="../Controller/cont_upload_arquivos.php" method="post" name="upload_excel" enctype="multipart/form-data">
            <table class="table-responsive"> 
                <tr>
                    <td><label class="control-label" for="file">Visualizacao de arquivos</label></td>
                </tr>

            </table>
        </form>-->
        <p><h1>Visualizacao de arquivos</h1></p>
        <ol>
            <?php
            include ("../Model/conexao.php");
            $dbh = new PDO("mysql:host=localhost; dbname=dbpraiscim", "root", "");
            $stat = $dbh->prepare("select * from arquivos_blob");
            $stat->execute();
            while ($row = $stat->fetch()) {
                echo "<li><a target='_blank' href='view.php?id=" . $row['id'] . "'>" . $row['path_arquivo'] . "</a><br/>
                <embed src='data_upload:".$row['tipo_arquivo']."; base64,".base64_encode($row['data_upload'])."' width='400'/></li>";
            }
            ?>
        </ol>
        <br/><button type="submit" class="form-control"  style="color: white;background-color: #E45225;height: 30px">
            <span class="glyphicon glyphicon-save"></span> &nbsp; <a href="../View/index_Estudantes.php">Voltar Pagina</a> </button>
    </div>