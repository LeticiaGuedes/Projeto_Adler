<!DOCTYPE html>
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
<?php
include "Topo.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron" style="text-align: center;">
                    <h1> Chamada de Apoio </h1>
                </div>
            </div>
        </div>
        <div class="row">

            <?php
            $connect = mysqli_connect("localhost","root","","db_Adler");
            $results = mysqli_query($connect,"SELECT * FROM tb_apoio ORDER BY DataChamada");
            while ($linhas = mysqli_fetch_array($results)) {
                $results_DataChamada = $linhas['DataChamada'];
                $results_Status = $linhas['Status'];
                $results_Laboratorio = $linhas['Laboratorio'];
                $results_Experimento = $linhas['Experimento'];
                $results_Solicitante = $linhas['Solicitante'];
                $results_ProblemaEncontrado = $linhas['ProblemaEncontrado'];
                $results_SolucaoEncontrada = $linhas['SolucaoEncontrada'];
                $results_id = $linhas['id'];
                ?>
                <div class="col-sm-4 col-md-3">
                    <div class="thumbnail">
                        <div class="caption"style="text-align: center">
                            <p><strong><h3><?php echo $results_DataChamada ?></strong></p></h3>
                            <p><strong> Status: <?php echo $results_Status ?></strong></p>
                            <p><strong> Laboratorio: <?php echo $results_Laboratorio ?></strong></p>
                            <p><strong> Experimento: <?php echo $results_Experimento ?></strong></p>
                            <p><strong> Solicitante: <?php echo $results_Solicitante ?></strong></p>
                            <p><strong> Problema Encontrado: <?php echo $results_ProblemaEncontrado ?></strong></p>
                            <p><strong> Solução Encontrada: <?php echo $results_SolucaoEncontrada ?></strong></p>
                            <p><a href="AlterarApoio.php?escolha=alterar&id=<?php echo $results_id ?>"class="btn btn-warning" role="button">
                                    Alterar</a>
                                <a href="FunctionsApoio.php?escolha=remover&id=<?php echo $results_id ?>" class="btn btn-danger" role="button">
                                    Remover</a></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>