<?php
include "../../Conexao/conexao.php";
$sql = "SELECT * FROM participantes";
$resultado = mysqli_query($link,$sql); 
 ?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <link rel="stylesheet" href="../../Public/bootstrapp/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Public/bootstrapp/css/bootstrap.css">
    <link rel="stylesheet" href="../../Public/bootstrapp/js/bootstrap.min.js">
    <link rel="stylesheet" href="../../Public/bootstrapp/js/bootstrap.js">

  <title>CollabSpace</title>

  <!-- Custom fonts for this template-->
  <link href="../../Public/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../../Public/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link rel="stylesheet" href="../../Public/css/modals.css">

  <!-- Custom styles for this template-->
  <link href="../../Public/admin/css/sb-admin.css" rel="stylesheet">
  <style type="text/css">
    
    .th1{
      width: 124px!important;
    }

    .trc{
      background-color:#087F61!important;
    color: #fff!important;
    }
    .bg-dark {
    background-color: #087F61!important;
}
 .stunner{
  margin-left: 897px;
    padding: 16px;
    font-size: 15px;
    width: 146px;
 }

 .titlex{
      margin-right: 191px;
 }
 .head-title{
  background-color: #28a745;
    color: yellow;
 }
  </style>

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="../admin/">CollabSpace</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">

        <li class="nav-item">
            <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-home"></i>
                <span>Home</span></a>
        </li>

      <li class="nav-item">
        <a class="nav-link" href="verprojectos.php">
          <i class="fas fa-fw fa-hanukiah"></i>
          <span>Ver Projectos</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registarprojecto.php">
          <i class="fas fa-fw fa-save"></i>
          <span>Registrar Projectos</span></a>
      </li>
        <li class="nav-item">
            <a class="nav-link" href="mensagem.php">
                <i class="fas fa-fw fa-envelope-open"></i>
                <span>Mensagens Enviadas</span></a>
        </li>
        <li class="nav-item active ">
            <a class="nav-link active" href="colaboradores.php">
                <i class="fas fa-user-friends"></i>
                <span>Colaboradores</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="registarecontrolarestagiodeprojecto.php">
                      <i class="fas fa-chart-bar"></i>
                <span>Registar e controlar o Estagio de projecto</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="relatorio.php">
                <i class="fas fa-fw fa-chart-bar"></i>
                <span>Relatorio</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="perfil.php">
                <i class="fas fa-fw fa-user"></i>
                <span>Perfil</span></a>
        </li>

    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">


                   <div class="#">
           <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
           Tabela de dados dos projectos <button type="submit"  class="btn stunner badge-primary" data-toggle="modal" data-target="#myModal" >Registrar</button></div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr class="trc">
                    <th class="th1">Nome </th>
                    <th>Projecto</th>
                    <th>Email</th>
                    <th>Contacto</th>
                     <th>Actualizar</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                     <th>Nome do Projecto</th>
                      <th>Projecto</th>
                    <th>Email</th>
                    <th>Contacto</th>
                     <th>Actualizar</th>
                  </tr>
                </tfoot>
              <tbody>
                 <?php while($dados = mysqli_fetch_array($resultado)){ ?>
                  <tr>
                    <td><?php echo $dados['nome']; ?></td>
                    <td><?php echo $dados['nomedoprojecto']; ?></td>
                    <td><?php echo $dados['email']; ?></td>
                     <td><?php echo $dados['contacto']; ?></td>
                      <td><button type="submit" class="btn badge-success"  onclick="buscarParaEditar(<?php echo $dados['id'];?>)" >Actualizar</button>



    

                        


                  </tr>
           <?php } ?>
                </tbody>
              </table>



            </div>
          </div>
        </div>
      </div>
          
        </div>

<!-- Trigger the modal with a button -->


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header head-title">
       
        <h4 class="modal-title titlex">Registrar</h4>
      </div>
      <div class="modal-body">
           <form action="registarprojectocontroller.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nome Completo</label>
    <input type="text" name="nome"class="form-control"  aria-describedby="emailHelp" placeholder="Nome a Registrar">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Projecto</label>
    <input type="text"name="nomedoprojecto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome do Projecto">
  
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contacto</label>
    <input type="number" name="contacto" class="form-control" id="exampleInputPassword1" placeholder="Numero de Telefone">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Sair</button>
      </div>
    </div>

  </div>
</div>



      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!--======================================================================================================-->
  <!-- Bootstrap core JavaScript-->
  <script src="../../Public/admin/vendor/jquery/jquery.min.js"></script>
  <script src="../../Public/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../Public/bootstrap/js/bootstrap.js"></script>
    <script src="../../Public/bootstrap/js/bootstrap.min.js"></script>


  <!-- Core plugin JavaScript-->
  <script src="../../Public/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../../Public/admin/vendor/chart.js/Chart.min.js"></script>
  <script src="../../Public/admin/vendor/datatables/jquery.dataTables.js"></script>
  <script src="../../Public/admin/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../Public/admin/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../../Public/admin/js/demo/datatables-demo.js"></script>
  <script src="../../Public/admin/js/demo/chart-area-demo.js"></script>


  

</body>

</html>
