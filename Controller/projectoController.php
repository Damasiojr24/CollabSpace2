<?php
include_once "../Conexao/conexao.php";
include_once "../Modelo/projecto.php";



$projeto=new projecto();

function salvar(){
  global $projeto, $link;

    $projeto->setNome($_POST['nome']);
    $nome=$projeto->getNome();

    $projeto->setDescricao($_POST['descricao']);
    $descricao=$projeto->getDescricao();

    $projeto->setDetalhes($_POST['detalhes']);
    $detalhes=$projeto->getDetalhes();

    $projeto->setObjectivo($_POST['objectivo']);
    $objectivo=$projeto->getObjectivo();
    $sql = "INSERT INTO projecto(nome,objectivo,descricao,detalhes,usuario_id) VALUES ('".$nome."','".$objectivo."','".$descricao."','".$detalhes."','1')";
    mysqli_query($link,$sql);
    echo json_decode(array("statusCode"=>200));
    mysqli_close($link);

}

if(isset($_POST['salvar'])){
    salvar();
}

if(isset($_POST['buscarparaeditar'])){
    $id=$_POST['id'];
    $sql = "SELECT * FROM projecto where id=$id";
    $resultado= mysqli_query($link,$sql);
    while ($row=mysqli_fetch_assoc($resultado)){
        $id=$row['id'];
        $nome=$row['nome'];
        $objectivo=$row['objectivo'];
        $descricao=$row['descricao'];
        $detalhes=$row['detalhes'];

        $result[]=array("id"=>$id,
            "nome"=>$nome,
            "objectivo"=>$objectivo,
            "descricao"=>$descricao,
            "detalhes"=>$detalhes);
    }
    echo json_encode($result);
    mysqli_close($link);
}



if(isset($_POST['buscarparardetalhes'])){
    $id=$_POST['id'];
    $sql = "SELECT * FROM projecto where id=1";
    $resultado= mysqli_query($link,$sql);
    while ($row=mysqli_fetch_assoc($resultado)){
        $id=$row['id'];
        $nome=$row['nome'];
        $objectivo=$row['objectivo'];
        $descricao=$row['descricao'];
        $detalhes=$row['detalhes'];

        $result[]=array("id"=>$id,
            "nome"=>$nome,
            "objectivo"=>$objectivo,
            "descricao"=>$descricao,
            "detalhes"=>$detalhes);
    }
    echo json_encode($result);
    mysqli_close($link);
}




if(isset($_POST['buscarpararemover'])){
    $id=$_POST['id'];
    $sql = "SELECT * FROM projecto where id=$id";
    $resultado= mysqli_query($link,$sql);
    while ($row=mysqli_fetch_assoc($resultado)){
        $id=$row['id'];
        $nome=$row['nome'];
        $objectivo=$row['objectivo'];
        $descricao=$row['descricao'];
        $detalhes=$row['detalhes'];

        $result[]=array("id"=>$id,
            "nome"=>$nome,
            "objectivo"=>$objectivo,
            "descricao"=>$descricao,
            "detalhes"=>$detalhes);
    }
    echo json_encode($result);
    mysqli_close($link);
}





if(isset($_POST['remover'])){
    $id=$_POST['idremoverp'];
    $sql = "DELETE FROM projecto WHERE id=$id";
    $resultado= mysqli_query($link,$sql);
    echo json_encode($resultado);
    mysqli_close($link);
}





function actualizar(){
    global $projeto, $link;
      $id=$_POST['id'];
    $projeto->setNome($_POST['nome']);
    $nome=$projeto->getNome();

    $projeto->setDescricao($_POST['descricao']);
    $descricao=$projeto->getDescricao();

    $projeto->setDetalhes($_POST['detalhes']);
    $detalhes=$projeto->getDetalhes();

    $projeto->setObjectivo($_POST['objectivo']);
    $objectivo=$projeto->getObjectivo();

    $sql="UPDATE projecto set nome='".$nome."', descricao='".$descricao."', detalhes='".$detalhes."', objectivo='".$objectivo."' WHERE id='".$id."'";
    mysqli_query($link,$sql);
    echo json_decode(array("statusCode"=>200));
    mysqli_close($link);

}

if (isset($_POST['actualizar'])){
    actualizar();
}









