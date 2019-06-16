<?php
    session_start();
    //include '../ModelDao/painel.php';
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Orquídea</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="assets/css/style2.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><a href="index2.html">Painel Principal</a></h3>
            </div>

            <ul class="list-unstyled components">
                <p>Olá, seja bem vindo <?php if(isset($_POST['usuario'])){ echo $_POST['usuario'];}?>!</p>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Fale conosco</a>
                </li>
                <li>
                    <a href="../ModelDao/logout.php">Sair</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <!--<nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Recolher sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="paginas/Perfil/funcionarios.html">Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="paginas/Estoque/lista.html">Estoque</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="paginas/Vendas/lista.html">Vendas</a>
                            </li>
                    </div>
                </div>
            </nav>
          -->
          <button type="button" id="sidebarCollapse" class="btn btn-info">
              <i class="fas fa-align-left"></i>
              <span></span>
          </button>
<div id="container-horizontal">
    <div id="container-horizontal">
        <div id="painel-botoes">
            <!-- Posição Material -->
            <div class="botao" onclick="alert()">
                <div class="icone-botao b1">
                    <i class="glyphicon glyphicon-edit"></i>
                </div>
                <div class="nome-botao">
                    <a href="../Control/perfil_control.php">Perfil</a>
                </div>
            </div>
            <!-- Pré-Solicitação -->
            <div class="botao" onclick="alert()">
                <div class="icone-botao b2">
                    <i class="glyphicon glyphicon-shopping-cart"></i>
                </div>
                <div class="nome-botao">
                    <a href="./paginas/vendas/lista.html">Vendas</a>
                </div>
            </div>
            <!-- Saldo Política 4A -->
            <div class="botao" onclick="alert()">
                <div class="icone-botao b3">
                    <i class="glyphicon glyphicon-usd"></i>
                </div>
                <div class="nome-botao">
                    Saldos
                </div>
            </div>
            <!-- Menu Planejamento -->
            <div class="botao" onclick="alert()">
                <div class="icone-botao b4">
                    <i class="glyphicon glyphicon-list-alt"></i>
                </div>
                <div class="nome-botao">
                    Estoque
                </div>
            </div>
            <!-- Atas Ativas -->
            <div class="botao" onclick="alert()">
                <div class="icone-botao b5">
                    <i class="glyphicon glyphicon-time"></i>
                </div>
                <div class="nome-botao">
                    Histórico de Vendas
                </div>
            </div>
            <!-- Processos na Assessoria de Licitação -->
            <div class="botao" onclick="alert()">
                <div class="icone-botao b6">
                    <i class="glyphicon glyphicon-folder-close"></i>
                </div>
                <div class="nome-botao">
                    Processos na Assessoria de Licitação
                </div>
            </div>
            <!-- Fornecedores do Material -->
            <div class="botao" onclick="alert()">
                <div class="icone-botao b7">
                    <i class="glyphicon glyphicon-barcode"></i>
                </div>
                <div class="nome-botao">
                    Fornecedores do Material
                </div>
            </div>
            <!-- Consulta OF -->
            <div class="botao" onclick="alert()">
                <div class="icone-botao b8">
                    <i class="glyphicon glyphicon-search"></i>
                </div>
                <div class="nome-botao">
                   <a href="consult_pedid.php">consultar pedidos</a>
                </div>
            </div>
            <!-- Menu UN -->
            <div class="botao" onclick="alert()">
                <div class="icone-botao b9">
                    <i class="glyphicon glyphicon-th-list"></i>
                </div>
                <div class="nome-botao">
                    <a href="register_vend.php">Nova Solicitação</a>
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- Page Content -->

    <!-- /.row -->



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>

</html>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
    </body>
</html>
