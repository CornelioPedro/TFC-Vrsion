<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>PRAISCIM</title>
        <link text="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css"/>
        <link text="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
    </head>
    <body style="background-image: url('../imagens/ISCIM_BG.jpg');background-size: cover;background-repeat: no-repeat;height: 100vh">
        <center>
            <div class="container" style="background-color: white;height: 450px;left: 50%;margin: -240px 0 0 -240px;
                 position: absolute;top: 50%;width: 450px;">
                <br/>
                <br/>
                <!--label style="height: 50px;color: #E45225">Inicie aqui a sua sessão</label-->
                <label for="txCodigo" class="control-label" style="height: 55px;font-size: 40px; text-align: center; color: #E45225 ">Estudantes</label>
                <form class="form-horizontal" method="post" action="../Controller/loginController_Estudante.php">
                    <table class="table-responsive">
                        <tr>
                            <td><label for="txCodigo" class="control-label" style="height: 50px">Username</label></td>
                        </tr>
                        <tr>
                            <td><input placeholder="Insira aqui o nome" name="txCodigo" type="text" style="height: 50px" class="form-control" required></td>
                        </tr>
                        <tr>
                            <td><label for="txPassword" class="control-label" style="height: 50px">Password</label></td>
                        </tr>
                        <tr>
                            <td><input placeholder="Insira aqui a Password" name="txPassword" type="password" style="height: 50px" class="form-control" required></td>
                        </tr>
                        <tr>
                            <td>
                                <br/><button type="submit" name="btnsave" class="form-control" style="color: white;background-color: #E45225;height: 50px">Iniciar Sessao</button>
                            </td>
                        </tr>
                    </table>    
                </form>
            </div>    
        </center>
<!--        <div style="height: 100px" class="container">
            
        </div>
-->        <div style="height: 50px;float: end" class="container">
            <center>    
                <p style="color: #E45225">©Copyright 2021 SEI</p>
            </center>
        </div>
        <script type="text/javascript" src="jquery/jquery-1.10.2.min.js" </script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js" </script>
        <script type="text/javascript" src="bootstrap/js/npm.js" </script>
    </body>
</html>