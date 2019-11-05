<?php
include "../Conexao/conexao.php";
session_start();
$message="";
if(count($_POST)>0) {

    $result = mysqli_query($link,"SELECT * FROM usuario WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
    $row  = mysqli_fetch_array($result);
    if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['username'];

    } else {
        header('location:../view/admin/login.php');
    }
}
if(isset($_SESSION["id"])) {
    header('location:../view/admin/index.php');
}





?>