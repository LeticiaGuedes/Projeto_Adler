﻿<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Física</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastrar<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="CadastrarEmprestimo.php">Empréstimos</a></li>
                            <li><a href="CadastrarPecas.php">Pecas</a></li>
                            <li><a href="CadastroUsuario.php">Usuários</a></li>
                            <li><a href="CadastrarFornecedor.php">Fornecedor</a></li>
                            <li><a href="CadastrarManutencao.php">Chamada de Manutençao</a></li>
                            <li><a href="CadastrarApoio.php">Chamada de Apoio</a></li>
                            <li><a href="CadastrarExtravio.php">Chamada de Extravio</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Visualizar <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="VisualizarEmprestimos.php">Empréstimos</a></li>
                                <li><a href="VisualizarPecas.php">Pecas</a></li>
                                <li><a href="VisualizarUsuarios.php">Usuários</a></li>
                                <li><a href="VisualizarFornecedor.php">Fornecedor</a></li>
                                <li><a href="VisualizarManutencao.php">Chamada de Manutenção</a></li>
                                <li><a href="VisualizarApoio.php">Chamada de Apoio</a></li>
                                <li><a href="VisualizarExtravio.php">Chamada de Extravio</a></li>
                            </ul>
                        </li>
                    </ul>
                    <a class="navbar-brand" href="Forum.php" style="font-size:14px">F&oacute;rum</a>
                    <ul class="nav navbar-nav navbar-right">
                        <form class="form-inline" role="form" style="margin-top: 8px">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-default">Sign in</button>
                        </form>
                    </ul>
                </div>
            </div>
    </nav>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>