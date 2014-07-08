<?php
$db = mysqli_connect("localhost","root","", "db_Adler");

$record_DataChamada = $_POST['InputDataChamada'];
$record_Status = $_POST['InputStatus'];
$record_Laboratorio = $_POST['InputLaboratorio'];
$record_Peca = $_POST['InputPeca'];
$record_ProblemaEncontrado = $_POST['InputProblemaEncontrado'];
$record_SolucaoEncontrada = $_POST['InputSolucaoEncontrada'];
$record_Custo = $_POST['InputCusto'];

if ($_GET['escolha'] == "inserir") {

    $record = mysqli_query($db,"INSERT INTO tb_manutencao(DataChamada, Status, Laboratorio, Peca, ProblemaEncontrado,
                                       SolucaoEncontrada, Custo)
                                       value ('$record_DataChamada','$record_Status','$record_Laboratorio',
                                              '$record_Peca', '$record_ProblemaEncontrado', '$record_SolucaoEncontrada',
                                              '$record_Custo')");
    header('Location:VisualizarManutencao.php');
}
if ($_GET['escolha'] == "alterar") {
    $id = $_GET['id'];
    echo $record_email;
    $results = mysqli_query($db,"UPDATE tb_manutencao SET DataChamada='$record_DataChamada',Status='$record_Status',
                                      Laboratorio='$record_Laboratorio',Peca='$record_Peca', ProblemaEncontrado='$record_ProblemaEncontrado',
                                      SolucaoEncontrada='$record_SolucaoEncontrada', Custo='$record_Custo' WHERE id='$id'");
    header('Location:VisualizarManutencao.php');
}

if ($_GET['escolha'] == "remover") {
    $id = $_GET['id'];
    $results = mysqli_query($db,"DELETE FROM tb_manutencao WHERE id='$id'");
    header('Location:VisualizarManutencao.php');
}

?>
