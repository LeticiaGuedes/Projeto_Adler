<?php
$db = mysqli_connect("localhost","root","", "db_Adler");

$record_DataChamada = $_POST['InputDataChamada'];
$record_Status = $_POST['InputStatus'];
$record_Laboratorio = $_POST['InputLaboratorio'];
$record_Experimento = $_POST['InputExperimento'];
$record_Solicitante = $_POST['InputSolicitante'];
$record_ProblemaEncontrado = $_POST['InputProblemaEncontrado'];
$record_SolucaoEncontrada = $_POST['InputSolucaoEncontrada'];

if ($_GET['escolha'] == "inserir") {

    $record = mysqli_query($db,"INSERT INTO tb_apoio(DataChamada, Status, Laboratorio, Experimento, Solicitante, ProblemaEncontrado,
                                       SolucaoEncontrada)
                                       value ('$record_DataChamada','$record_Status','$record_Laboratorio',
                                              '$record_Experimento', '$record_Solicitante', '$record_ProblemaEncontrado',
                                              '$record_SolucaoEncontrada')");
    header('Location:VisualizarApoio.php');
}
if ($_GET['escolha'] == "alterar") {
    $id = $_GET['id'];
    echo $record_email;
    $results = mysqli_query($db,"UPDATE tb_apoio SET DataChamada='$record_DataChamada',Status='$record_Status',
                                      Laboratorio='$record_Laboratorio',Experimento='$record_Experimento', Solicitante='$record_Solicitante', ProblemaEncontrado='$record_ProblemaEncontrado',
                                      SolucaoEncontrada='$record_SolucaoEncontrada' WHERE id='$id'");
    header('Location:VisualizarApoio.php');
}

if ($_GET['escolha'] == "remover") {
    $id = $_GET['id'];
    $results = mysqli_query($db,"DELETE FROM tb_apoio WHERE id='$id'");
    header('Location:VisualizarApoio.php');
}

?>
