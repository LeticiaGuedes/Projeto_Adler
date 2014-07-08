<!DOCTYPE html>
<html lang="pt">
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
    <div class="centro">
        <form role="form" method="post" action="FunctionsExtravio.php?escolha=inserir">
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputDataEntrega">Data de Chamada</label>
                    <input type="date" class="form-control" id="InputDataChamada" name="InputDataChamada">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label form="DropDownStatusPeca">Status</label>
                    <select id="InputStatus" class="img-rounded" name="InputStatus" style="width: 360px; display: block; padding: 7px">
                        <option = "0"> </option>
                        <option = "Aberta">Aberta</option>
                        <option = "Fechada">Fechada</option>
                        <option = "Inativa">Inativa</option>
                    </select>
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputLaboratorio">Laboratório</label>
                    <input type="text" class="form-control" id="InputLaboratorio" name="InputLaboratorio">
                </div>
            </div><div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputPeca">Peça</label>
                    <input type="text" class="form-control" id="InputPeca" name="InputPeca">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputCustoEstimado">Custo Estimado</label>
                    <input type="text" class="form-control" id="InputCustoEstimado" name="InputCustoEstimado">
                    <input type="submit" class="btn btn-warning btn-block col-md-11" style="margin-top: 20px;">
                </div>
            </div>
        </form>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>