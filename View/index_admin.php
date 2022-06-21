<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width">
        <title>PRAISCIM</title>
        <link rel="stylesheet" href="../assets/css/style.css">
        <link text="text/css" rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css"/>
        <link text="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/js/jquery-3.6.0.min.js">


        <style>
            * {
                margin: 0px 17px;
                padding: 0px;
                box-sizing: border-box;
                font-family: "Poppins" , sans-serif;
            }
            ul{
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #E44230;
            } 
            li {
                float: left;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 10px 10px;
                text-decoration: none;
            }

            li a:hover {
                background: lightgray;
            }


            .submenu{
                display: none;

            }

        </style>
        <script>
            function carregarDocent(){
                $("#cx").load("formulario.php");
            }
        </script>
        <script type="text/javascript" src="jquery/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/npm.js"></script>

    </head>
    <body>
        <div class="container" style="height: 120px;background-color: #E45225; padding: 10px 10px">
            <center>
                <br/><h3 style="color: white">Instituto Superior de Comunicação e Imagem de Moçambique</h3>
            </center>
            <?php
            $d = date('m');
            if ($d == 01 || $d == 02 || $d == 03 || $d == 04 || $d == 05 || $d == 06) {
                echo '<a style="float: right;color: white">' . date('Y') . '/01' . '</a>';
            } else {
                echo '<a style="float: right;color: white">' . date('Y') . '/02' . '</a>';
            }
            ?>
            <br/>
            <a href="../Controller/logout.php" style="float: right;color: white">Sair</a>
        </div>
        <div class="container" style="height: 40px;background-color: #E44228" id="nav">
            <ul>
                <li>
                    <a href="formulario.php" onclick="carregarDocent()">Docentes</a>
                </li>

                <li> <a onmouseover="mostra()" style="text-decoration: none">Configuracoes</a>
                    <ul id="sub-menu" class="submenu">
                        <li><a onclick="carregavIP()" style="text-decoration: none">Perguntas de avaliacao</a></li>
                        <li><a onclick="carregavDI()" style="text-decoration: none">Datas para resposta</a></li>
                    </ul>
                </li>

                <li><a onclick="carregavGR()" style="text-decoration: none">Relatórios</a></li>
            </ul>
        </div>
        <div style="height: 80px"></div>
    <session class="home-section">
        <div class="conteudo" id="cx">
            <center><img src="../imagens/iscim.png"/>
                <p>Bem vindo Administrador ao sistema de gestao dos inqueritos de avaliacao de docentes</p>
                <p>Desejamos que essa plataforma seja um veiculo para avaliacao do desempenho dos docentes</p>        
                <img src="../imagens/campos.png"/>
            </center>
        </div>
    </session>    



</body>
</html>


