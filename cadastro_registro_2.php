<?php
        session_start();
        $ano = $_SESSION['ano'] ;
        $turma = $_SESSION['turma'];
?>

<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.12.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/salaberga-164x70.png" type="image/x-icon">
  <meta name="description" content="Website Builder Description">
  
  
  <title>cadastrar_registro</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>

<section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-m">

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="menu.php">
                         <img src="assets/images/salaberga-164x70.png" alt="Mobirise" title="" style="height: 5.1rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap">
                    <a class="navbar-caption text-white display-4" href="menu.php">
                        Salaberga
                    </a>
                </span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <li class="nav-item dropdown">
                    <a class="nav-link link text-white dropdown-toggle display-4" href="https://mobirise.com" aria-expanded="false" data-toggle="dropdown-submenu">
                        <span class="mbrib-bookmark mbr-iconfont mbr-iconfont-btn"></span>
                        Cadastros
                    </a>
                    <div class="dropdown-menu">
                        <a class="text-white dropdown-item display-4" href="cadastro_aluno.php">Alunos</a>
                        <a class="text-white dropdown-item display-4" href="cadastro_usuario.php">Usuario</a>
                        <a class="text-white dropdown-item display-4" href="cadastro_registro_1.php">Relatórios</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link link text-white dropdown-toggle display-4" href="https://mobirise.com" aria-expanded="true" data-toggle="dropdown-submenu">
                        <span class="mbrib-paperclip mbr-iconfont mbr-iconfont-btn"></span>
                        Relatórios
                    </a>
                    <div class="dropdown-menu">
                        <a class="text-white dropdown-item display-4" href="Relatório/relatorio_aluno.php">Alunos</a>
                        <a class="text-white dropdown-item display-4" href="Relatório/relatorio_usuario.php">Usuarios</a>
                        <a class="text-white dropdown-item display-4" href="Relatório/relatorio_registro.php">Relatórios</a>
                    </div>
                </li>
                <!---<li class="nav-item">
                    <a class="nav-link link text-white display-4" href="https://mobirise.com">
                        </a>
                </li>--->
            </ul>
            
        </div>
    </nav>
</section>

<section class="engine">
    <a href="https://mobirise.info/e">how to make your own site for free</a>
</section>

<section class="header15 cid-u6mHJUgX6Y mbr-fullscreen mbr-parallax-background" id="header15-o">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(7, 59, 76);"></div>

    <div class="container align-right">
        <div class="row">
            <div class="mbr-white col-lg-8 col-md-7 content-container">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    Registro de Atraso</h1>
                <p class="mbr-text pb-3 mbr-fonts-style display-5">
                    Todos os itens do formulário ao lado são obrigatórios e devem ser preenchidos. Caso seu nome não conste na lista de alunos de sua turma, entre em contato.</p>
            </div>

            <div class="col-lg-4 col-md-5">
                <div class="form-container">
                    <div class="media-container-column">

                        <!---Formbuilder Form--->
                        <form action="../Control/controleRegistro.php" method="POST">
                            <div class="row">
                                
                                <div class="col-md-12 form-group " >
                                    <select name="id_aluno" class="form-control">
            
                                        <?php
                                        require("../Model/Aluno.class.php");
                                        $x = new Aluno;
                                        $x->listarAluno($ano, $turma);
                                        ?>
                                
                                    </select>
                                </div>

                                <div class="col-md-12 form-group ">
                                    <select name="motivo" class="form-control">
                                        <option>Banheiro</option>
                                        <option>Pessoal</option>
                                        <option>Consulta</option>
                                        <option>Lanche</option>
                                        <option>Projeto</option>
                                    </select>
                                </div>

                                <div class="col-md-12 input-group-btn">
                                    <input type="submit" name="cadastrar_registro" value="Cadastrar" id="ipt" class="btn btn-form btn-secondary display-4">
                                </div>

                            </div>

                        </form>
                        <!---Formbuilder Form--->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="section-table cid-u6mK5Ch1sI" id="table1-r">

  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">Relatório de Atraso</h2>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">
            Todos os atrasos até o momento.</h3>
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-7">Search:</label>
                  <input class="form-control input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0" data-empty="No matching records found">
            <thead>
              <tr class="table-heads ">
                  
                  
                  
                  
              <th class="head-item mbr-fonts-style display-7">
                      Nome</th><th class="head-item mbr-fonts-style display-7">
                      Ano</th><th class="head-item mbr-fonts-style display-7">
                      Turma</th><th class="head-item mbr-fonts-style display-7">
                      Data</th><th class="head-item mbr-fonts-style display-7">
                      Motivo</th></tr>
            </thead>

            <tbody>
              
              
              
              
            <tr> 
                
                
                
                
              <td class="body-item mbr-fonts-style display-7">Jeanna Schmal</td><td class="body-item mbr-fonts-style display-7">44</td><td class="body-item mbr-fonts-style display-7">2016-10-17</td><td class="body-item mbr-fonts-style display-7">2016-10-17</td><td class="body-item mbr-fonts-style display-7">2016-10-17</td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7">Caren Rials</td><td class="body-item mbr-fonts-style display-7">35</td><td class="body-item mbr-fonts-style display-7">2013-04-12</td><td class="body-item mbr-fonts-style display-7">2013-04-12</td><td class="body-item mbr-fonts-style display-7">2013-04-12</td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7">Leon Rogol</td><td class="body-item mbr-fonts-style display-7">66</td><td class="body-item mbr-fonts-style display-7">2016-05-22</td><td class="body-item mbr-fonts-style display-7">2016-05-22</td><td class="body-item mbr-fonts-style display-7">2016-05-22</td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7">Shala Barrera</td><td class="body-item mbr-fonts-style display-7">70</td><td class="body-item mbr-fonts-style display-7">2016-05-15</td><td class="body-item mbr-fonts-style display-7">2016-05-15</td><td class="body-item mbr-fonts-style display-7">2016-05-15</td></tr></tbody>
          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">Showing</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">entries</span>
                <span class="infoFilteredBefore">(filtered from</span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"> total entries)</span>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="cid-u6mIlGyFxI" id="footer1-p">

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="menu.php">
                        <img src="assets/images/logo2.png" alt="Mobirise">
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Endereço</h5>
                <p class="mbr-text">
                    Av. Marta Maria Carvalho Nojoza, sn - Outra Banda, Maranguape - CE</p>
            </div>

            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Contato</h5>
                <p class="mbr-text">
                    Email: eeepsantarita@gmail.com<br>Phone: +55 (85) 3890-8765</p>
            </div>

            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Links</h5>
                <p class="mbr-text">
                    <a class="text-primary" href="https://mobirise.co/">Website builder</a><br>
                    <a class="text-primary" href="https://mobirise.co/">Download for Windows</a><br>
                    <a class="text-primary" href="https://mobirise.co/">Download for Mac</a></p>
            </div>
        </div>

        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12"><hr>
                </div>
            </div>

            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">© Copyright 2024 Luana Moreira - Marquin do play(vem x1) - All Rights Reserved</p>
                </div>

                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.instagram.com/eeepsalabergampe/" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.behance.net/Mobirise" target="_blank">
                                <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/datatables/jquery.data-tables.min.js"></script>
  <script src="assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>