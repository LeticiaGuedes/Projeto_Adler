<?php
$db = mysqli_connect("localhost","root","", "db_Adler");

$record_DataChamada = $_POST['InputDataChamada'];
$record_Status = $_POST['InputStatus'];
$record_Laboratorio = $_POST['InputLaboratorio'];
$record_Peca = $_POST['InputPeca'];
$record_CustoEstimado = $_POST['InputCustoEstimado'];

if ($_GET['escolha'] == "inserir") {

    $record = mysqli_query($db,"INSERT INTO tb_extravio(DataChamada, Status, Laboratorio, Peca, CustoEstimado)
                                       value ('$record_DataChamada','$record_Status','$record_Laboratorio',
                                              '$record_Peca', '$record_CustoEstimado')");
    header('Location:VisualizarExtravio.php');
}
if ($_GET['escolha'] == "alterar") {
    $id = $_GET['id'];
    echo $record_email;
    $results = mysqli_query($db,"UPDATE tb_extravio SET DataChamada='$record_DataChamada',Status='$record_Status',
                                      Laboratorio='$record_Laboratorio',Peca='$record_Peca', CustoEstimado='$record_CustoEstimado' WHERE id='$id'");
    header('Location:VisualizarExtravio.php');
}

if ($_GET['escolha'] == "remover") {
    $id = $_GET['id'];
    $results = mysqli_query($db,"DELETE FROM tb_extravio WHERE id='$id'");
    header('Location:VisualizarExtravio.php');
}

?>
