<?php
include "../../Conexao/conexao.php";
/*$sql = "SELECT * FROM pedidosercolaborador";
$resultado = mysqli_query($link,$sql);*/




$sql = "SELECT pedidosercolaborador.email as email, pedidosercolaborador.nome as assunto, pedidosercolaborador.cv as mensagem, projecto.nome as projectonome, projecto.objectivo as objectivo
FROM pedidosercolaborador
INNER JOIN projecto ON pedidosercolaborador.projecto_id=projecto.id";
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

  <title>CollabSpace</title>

  <!-- Custom fonts for this template-->
  <link href="../../Public/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../../Public/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

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

    <a class="navbar-brand mr-1" href="index.html">CollabSpace</a>

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
                <?php
                if($_SESSION["name"]) {
                    ?>
                    <a class="dropdown-item" href="#"><?php echo $_SESSION["name"]; ?></a>
                    <?php
                }else echo "<h1>Please login first .</h1>";
                ?>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../../Controller/logout.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
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
        <li class="nav-item active">
            <a class="nav-link active" href="mensagem.php">
                <i class="fas fa-fw fa-envelope-open"></i>
                <span>Mensagens Enviadas</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="colaboradores.php">
                <i class="fas fa-fw fa-table"></i>
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

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

          <div class="#">
              <div class="card mb-3">
                  <div class="card-header">
                      <i class="fas fa-table"></i>
                      Tabela de dados dos projectos</div>
                  <div class="card-body">
                      <div class="table-responsive">
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                              <tr class="trc">
                                  <th class="th1">Assunto</th>
                                  <th>Email</th>
                                  <th>Mensagem</th>
                                  <th>Nome do projecto</th>
                                  <th>Objectivos do projecto</th>
                                  <th>Admitir</th>
                                  <th>Nao admitir</th>
                              </tr>
                              </thead>
                              <tfoot>
                              <tr>
                                  <th class="th1">Assunto</th>
                                  <th>Email</th>
                                  <th>Mensagem</th>
                                  <th>Nome do projecto</th>
                                  <th>Objectivos do projecto</th>
                                  <th>Admitir</th>
                                  <th>Nao admitir</th>
                              </tr>
                              </tfoot>
                              <tbody>
                              <?php while($dados = mysqli_fetch_array($resultado)){ ?>
                                  <tr>
                                      <td><?php echo $dados['assunto']; ?></td>
                                      <td><?php echo $dados['email']; ?></td>
                                      <td><?php echo $dados['mensagem']; ?></td>
                                      <td><?php echo $dados['projectonome']; ?></td>
                                      <td><?php echo $dados['objectivo']; ?></td>
                                      <th><button type="submit" class="btn btn-success">Admitir</button></th>
                                      <th><button type="submit" class="btn btn-danger">Nao Admitir</button></th>


                                  </tr>
                              <?php } ?>
                              </tbody>
                          </table>



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

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../../Public/admin/vendor/jquery/jquery.min.js"></script>
  <script src="../../Public/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

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
