<?php

if(isset($_POST['buscarparardados'])){
   $idp=$_POST['id'];

 $sql = "SELECT  pedidosercolaborador.nome as nome, projecto.nome as projectonome, pedidosercolaborador.id as id
          FROM pedidosercolaborador
          INNER JOIN projecto ON pedidosercolaborador.projecto_id=projecto.id where pedidosercolaborador.id=$idp";
    $resultado = mysqli_query($link,$sql);


    while ($row=mysqli_fetch_assoc($resultado)){
        $id=$row['id'];
        $nome=$row['nome'];
        $projectonome=$row['projectonome'];


        $result[]=array("id"=>$id,
            "nome"=>$nome,
            "projectonome"=>$projectonome
        );

    }

    echo json_encode($result);
}