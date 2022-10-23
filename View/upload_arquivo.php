<?php include_once '../Model/connect.php'; ?>
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
        <style>
           
            select {
                -webkit-appearance:none;
                -moz-appearance:none;
                -ms-appearance:none;
                appearance:none;
                outline:0;
                box-shadow:none;
                border:0!important;
                /*background: #5c6664;*/
                background-image: none;
                flex: 1;
                padding: 0 .5em;
                color:#11101d;
                cursor:pointer;
                font-size: 1em;
                font-family: 'Open Sans', sans-serif;
            }
            select::-ms-expand {
                display: none;
            }
            .select {
                position: relative;
                display: flex;
                width: 14em;
                /*height: 3em;*/
                line-height: 1;
                background: #039145;
                overflow: hidden;
                border-radius: .25em;
                margin: auto;
                margin-top: -95px;
            }
            .select::after {
                content: '\25BC';
                position: absolute;
                top: 0;
                right: 0;
                padding: 0 1em;
                background: #039145;
                cursor:pointer;
                pointer-events:none;
                transition:.25s all ease;
            }
            .select:hover::after {
                color: #000000;
            }
            
            .cursos{
                color: black;
            }
        </style>    
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
                    <td><br/><button type="submit" name="acao" class="form-control" style="color: white;background-color: #039145;height: 30px">
                            <span class="glyphicon glyphicon-save"></span> &nbsp; Enviar Ficheiro</button>
                    </td>
                </tr>
                <tr>
                    <th>
                    </th>
                </tr>
            </table>
        </form>
        <div class="select">
          
            <select name="cursos">
                <?php
                    $con=conexao();
                    #Consulta na base de dados
                    $sql='SELECT * FROM Cursos';
                    $query= mysqli_query($con, $sql);
                    while ($row= mysqli_fetch_array($query)){
                        $idcursos=$row['id'];
                        $nomeCursos=$row['nome_curso'];
                ?>
                    <option value="<?php echo $idcursos; ?>"> <?php echo $nomeCursos?></option>
                <?php
                }
                ?>
            </select>
        </div>
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
