<?php
include_once "../Conexao/conexao.php";

if(count($_POST)>0) {
    mysqli_query($link,"UPDATE projecto set  estado='" . $_POST['estadodoprojecto'] . "' WHERE id='" . $_POST['idproject'] . "'");
    header('location:../view/admin/registarecontrolarestagiodeprojecto.php');
    $message = "Record Modified Successfully";
}
