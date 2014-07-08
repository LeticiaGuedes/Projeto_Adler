<!DOCTYPE html>
<html lang="pt" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <style type="text/css">
        .centro {
            height:41.42em;
            left:50%;
            margin-left:-15em;
            position:absolute;
            top:15%;
            width:30em;
            margin-top: 20px;
        }
    </style>

</head>
<body>
<?php
include "Topo.php";
?>

<div class="container-fluid">

    <?php
    $id = $_GET['id'];
    $db = mysqli_connect("localhost","root","","db_Adler");
    $results = mysqli_query($db, "SELECT * FROM tb_apoio WHERE id='$id'");
    while ($linha = mysqli_fetch_array($results)) {
        $alterar_id = $linha['id'];
        $alterar_DataChamada = $linha['DataChamada'];
        $alterar_Status = $linha['Status'];
        $alterar_Laboratorio = $linha['Laboratorio'];
        $alterar_Experimento = $linha['Experimento'];
        $alterar_Solicitante = $linha['Solicitante'];
        $alterar_ProblemaEncontrado = $linha['ProblemaEncontrado'];
        $alterar_SolucaoEncontrada = $linha['SolucaoEncontrada'];
    }
    ?>
    <div class="centro">
        <form role="form" method="post" action="FunctionsApoio.php?escolha=alterar&id= <?php echo $alterar_id?>">
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputDataEntrega">Data de Chamada</label>
                    <input type="date" class="form-control" id="InputDataChamada" name="InputDataChamada" value="<?php echo $alterar_DataChamada ?>">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label form="DropDownStatusPeca">Status</label>
                    <select id="InputStatus" class="img-rounded" name="InputStatus" value="<?php echo $alterar_Status ?>" style="width: 360px; display: block; padding: 7px">
                        <option = "0"><?php echo $alterar_Status ?></option>
                        <option = "Aberta">Aberta</option>
                        <option = "Fechada">Fechada</option>
                        <option = "Inativa">Inativa</option>
                    </select>
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputLaboratorio">Laboratório</label>
                    <input type="text" class="form-control" id="InputLaboratorio" name="InputLaboratorio" value="<?php echo $alterar_Laboratorio ?>" >
                </div>
            </div><div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputExperimento">Experimento</label>
                    <input type="text" class="form-control" id="InputExperimento" name="InputExperimento" value="<?php echo $alterar_Experimento ?>" >
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputSolicitante">Solicitante</label>
                    <input type="text" class="form-control" id="InputSolicitante" name="InputSolicitante" value="<?php echo $alterar_Solicitante ?>">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputProblemaEncontrado">Problema Encontrado</label>
                    <input type="text" class="form-control" id="InputProblemaEncontrado" name="InputProblemaEncontrado" value="<?php echo $alterar_ProblemaEncontrado ?>" >
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputSolucaoEncontrada">Solução Encontrada</label>
                    <input type="text" class="form-control" id="InputSolucaoEncontrada" name="InputSolucaoEncontrada" value="<?php echo $alterar_SolucaoEncontrada ?>" >
                    <input type="submit" class="btn btn-warning btn-block col-md-11" value="Alterar" style="margin-top: 20px;">
                </div>
            </div>
            </form>
         </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>