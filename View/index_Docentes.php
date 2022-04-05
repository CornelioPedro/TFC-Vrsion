<?php
include '../Controller/protect.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>PRAISCIM</title>
        <link rel="stylesheet" href="../assets/css/style.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/js/jquery-3.6.0.min.js">
        <link text="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css"/>
        <link text="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
        
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="../jquery-ui-1.12.1.custom/jquery-ui.css">
        <link rel="stylesheet" href="../jquery-ui-1.12.1.custom/jquery-ui.theme.css">
        <link rel="stylesheet" href="../jquery-ui-1.12.1.custom/jquery-ui.structure.css">
        <link rel="stylesheet" href="../Datatable/datatables.min.css">
        <script src="../jquery-ui-1.12.1.custom/jquery-ui.js"></script>
        <script src="../jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
        <script src="../Datatable/datatables.min.js"></script>
        <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
        <script>

            function carregarInit() {
                $("#conteudo").load("pagina_inicial.php");
            }
            function carregavCof() {
                $("#conteudo").load("Configuracoes.php");
            }
            function carregavArq() {
                $("#conteudo").load("upload_arquivo.php");
            }
            
            function carregarArq() {
                $("#conteudo").load("view_arquivos.php");
            }
        </script>
    </head>
    <body>
        <div class="sidebar">
            <div class="logo-details">
                <i class='bx bxl-c-plus-plus icon'></i>
                <div class="logo_name">Cornelio</div>
                <i class='bx bx-menu' id="btn" ></i>
            </div>
            <ul class="nav-list">
                <li>
                    <i class='bx bx-search' ></i>
                    <input type="text" placeholder="Search...">
                    <span class="tooltip">pesqisar</span>
                </li>
                <li>
                    <a onclick="carregarInit()">
                        <i class='bx-menu' ></i>
                        <span class="links_name">Pagina Inicial </span>
                    </a>
                    <span class="tooltip">Pagina Inicial </span>
                </li>
                <!--li>
                    <a href="#">
                        <i class='bx bx-user' ></i>
                        <span class="links_name">Utilizador</span>
                    </a>
                    <span class="tooltip">Utilizador</span>
                </li-->
                <li>
                    <a onclick="carregarArq()">
                        <i class='bx bx-folder' ></i>
                        <span class="links_name">Ver Arquivos</span>
                    </a>
                    <span class="tooltip">Ver Arquivos</span>
                </li>
                <li>
                    <a onclick="carregavArq()">
                        <i class='bx bx-folder' ></i>
                        <span class="links_name">Arquivos</span>
                    </a>
                    <span class="tooltip">Arquivos</span>
                </li>
                <li>
                    <a onclick="carregavCof()">
                        <i class='bx bx-cog' ></i>
                        <span class="links_name">Configurações </span>
                    </a>
                    <span class="tooltip">Configurações </span>
                </li>
                <li class="profile">
                    <div class="profile-details">
                        <img src="../assets/imgs/ping.jpg" alt="profileImg">
                        <div class="name_job">
                            <div class="name"><?php echo $_SESSION['Username'];?></div>
                            <div class="job">Informatico</div>
                        </div>
                    </div>
                    <a href="../Controller/logout.php">
                        <i class='bx bx-log-out' id="log_out" ></i>
                    </a>
                </li>
            </ul>
        </div>
        <section class="home-section">
            <div style="height: 80px"></div>
            <div id="conteudo" class="text">
                <center><img src="../imagens/iscim.png"/>
                    <p>Bem-vindo! Docente ao sistema de gestão de avaliações e trabalhos científicos.</p>
                    <p>Desejamos que essa plataforma seja um veículo para que os alunos tenham facilidade de 
                        realizar trabalhos e a se preparem para os testes e exames. 
                    </p><img src="../imagens/campos.png"/>
                </center>
            </div>
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        </section>
        <script>
                        let sidebar = document.querySelector(".sidebar");
                        let closeBtn = document.querySelector("#btn");
                        let searchBtn = document.querySelector(".bx-search");

                        closeBtn.addEventListener("click", () => {
                            sidebar.classList.toggle("open");
                            menuBtnChange();//calling the function(optional)
                        });

                        searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
                            sidebar.classList.toggle("open");
                            menuBtnChange(); //calling the function(optional)
                        });

                        // following are the code to change sidebar button(optional)
                        function menuBtnChange() {
                            if (sidebar.classList.contains("open")) {
                                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
                            } else {
                                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");//replacing the iocns class
                            }
                        }
        </script>
    </body>
</html>

