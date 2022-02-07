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
        <link >
        <script>
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
                    <a onclick="">
                        <i class='bx-menu' ></i>
                        <span class="links_name">Pagina Inicial </span>
                    </a>
                    <span class="tooltip">Pagina Inicial </span>
                </li>
                <li>
                    <a onclick="carregarArq()">
                        <i class='bx bx-folder' ></i>
                        <span class="links_name">Arquivos</span>
                    </a>
                    <span class="tooltip">Arquivos</span>
                </li>
                <li class="profile">
                    <div class="profile-details">
                        <img src="../assets/imgs/ping.jpg" alt="profileImg">
                        <div class="name_job">
                            <div class="name"><?php echo $_SESSION['Codigo']; ?></div>
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
                    <p>Bem vindo ao sistema de gestão de avaliações e trabalhos científicos.</p>
                    <p>Desejamos que essa plataforma seja um veiculo para realizar trabalhos e a se preparem para os testes e exames.</p> 
                    <img src="../imagens/campos.png"/>
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



