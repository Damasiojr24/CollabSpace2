<?php
    $servername = "us-cdbr-iron-east-05.cleardb.net";
    $username = "b466cf3c5d19aa";
    $password = "5b0d294c";    
    $dbname = "collab";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $nome = $_POST['nome'];
    $nomedoprojecto = $_POST['nomedoprojecto'];
    $email = $_POST['email'];
    $contacto = $_POST['contacto'];
    //$documento = $_POST['doc'];

    $string_sql = "INSERT INTO `participantes`(`nome`, `email`, `contacto`, `nomedoprojecto`) VALUES ('".$nome."','".$email."','".$contacto."','".$nomedoprojecto."')";
      

    if ($conn->query($string_sql) === TRUE) {
    header("Location:colaboradores.php");
    } else {
    echo "Error: " . $string_sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>
