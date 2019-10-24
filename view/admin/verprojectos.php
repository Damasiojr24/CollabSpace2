<?php
include "../../Conexao/conexao.php";
$sql = "SELECT * FROM projecto";
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
        <a class="nav-link" href="verprojectos.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Ver Projectos</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registrar.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Registrar Projectos</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">


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
                    <th class="th1">Nome do Projecto</th>
                    <th>Objectivos do projecto</th>
                    <th>Detalhes</th>
                    <th>Actualizar</th>
                     <th>Remover</th>

                  </tr>
                </thead>
                <tfoot>
                  <tr>
                     <th>Nome do Projecto</th>
                    <th>Descricao</th>
                    <th>Documentos</th>
                 <th>Edit</th>
                     <th>Delete</th>
                  </tr>
                </tfoot>
              <tbody>
                 <?php while($dados = mysqli_fetch_array($resultado)){ ?>
                  <tr>
                    <td><?php echo $dados['nome']; ?></td>
                    <td><?php echo $dados['objectivo']; ?></td>
                      <td><button type="submit" class="btn badge-primary" onclick="buscarParaDetalhes(<?php echo $dados['id'];?>)">Detalhes</button></td>
                      <td><button type="submit" class="btn badge-success"  onclick="buscarParaEditar(<?php echo $dados['id'];?>)">Actualizar</button></td>
                      <td><button class="btn btn-danger"  onclick="buscarParaRemover(<?php echo $dados['id'];?>)">Remover</button></td>


                  </tr>
           <?php } ?>
                </tbody>
              </table>
            </div>
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




  <!--===============================Modal para editar os dados============================-->

  <div class="modal fade" id="modaleditar" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Actualizar dados do projecto</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form>
                      <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Nome </label>
                          <input type="text"  class="form-control" id="nome" name="atnome">
                      </div>
                      <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Objectivo</label>
                          <input type="text" class="form-control" id="objectivo" name="atobjectivo">
                      </div>

                      <div class="form-group">
                          <label for="message-text" class="col-form-label">Descricao</label>
                          <textarea class="form-control" id="descricao" name="atobjectivo"></textarea>
                      </div>
                      <div class="form-group">
                          <label for="message-text" class="col-form-label">Detalhes</label>
                          <textarea class="form-control" id="detalhes" name="atdetalhes"></textarea>
                      </div>
                      <input type="number" class="form-control" id="idp" name="atid" hidden>
                  </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="button" class="btn btn-primary" onclick="actualizar()">Salvar</button>
              </div>
          </div>
      </div>
  </div>




  <!--============================================================================================-->



  <!--=================================== Detalhes====================================================-->
  <div class="modal fade" id="modaldetalhes" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Mais detalhes</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <p id="detalhesdetalhes"></p>
                  <p id="descricaodetalhes"></p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              </div>
          </div>
      </div>
  </div>
  <!--==========================================================================================================-->


  <!--===================================== modal para remover=========================================================-->
  <div class="modal fade" id="modalremover" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Remover</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <h6>Tens certeza que pretendes remover o projecto</h6>
                  <h3 id="nomeremover"></h3>
              </div>
              <input type="number" id="idremover" name="idremoverp" hidden>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Nao</button>
                  <button type="button" class="btn btn-primary" onclick="remover()">Sim</button>
              </div>
          </div>
      </div>
  </div>












  <div id="modalsucessoremovido" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header header-color-modal bg-color-1">
                  <h4 class="modal-title">Projecto</h4>
                  <div class="modal-close-area modal-close-df">
                      <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                  </div>
              </div>
              <div class="modal-body">
                  <i class="educate-icon educate-checked modal-check-pro"></i>
                  <h2>Sucesso!</h2>
                  <p>Projecto removido com sucesso!</p>
              </div>
              <div class="modal-footer">
                  <a data-dismiss="modal" onclick="actualizarPagina()">Sair</a>
              </div>
          </div>
      </div>
  </div>


  <div id="modalsucessoactualizado" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header header-color-modal bg-color-1">
                  <h4 class="modal-title">Projecto</h4>
                  <div class="modal-close-area modal-close-df">
                      <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                  </div>
              </div>
              <div class="modal-body">
                  <i class="educate-icon educate-checked modal-check-pro"></i>
                  <h2>Sucesso!</h2>
                  <p>Projecto actulaizado com sucesso!</p>
              </div>
              <div class="modal-footer">
                  <a data-dismiss="modal" onclick="actualizarPagina()">Sair</a>
              </div>
          </div>
      </div>
  </div>
  <!--======================================================================================================-->
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


  <script>
      function buscarParaEditar(data){
          $.ajax({
              type:'post',
              url: '../../Controller/projectoController.php',
              dataType: 'JSON',
              data:{
                  '_token':$('input[name=_token]').val(),
                  'id':data,
                  'buscarparaeditar' :1
              },
              success:function(data){
                  document.getElementById("idp").value=data[0].id;
                  document.getElementById("nome").value=data[0].nome;
                  document.getElementById("objectivo").value=data[0].objectivo;
                  document.getElementById("detalhes").value=data[0].detalhes;
                  document.getElementById("descricao").value=data[0].descricao;
                  $('#modaleditar').modal('show');
                  console.log(data);

                  console.log(data[0].nome);


              },
              error:function () {
                  alert("Erro ao tentar registar, tente novamente");

              }
          });

      }



      function buscarParaDetalhes(data) {
          $.ajax({
              type:'post',
              url: '../../Controller/projectoController.php',
              dataType: 'JSON',
              data:{
                  '_token':$('input[name=_token]').val(),
                  'id':data,
                  'buscarparardetalhes' :1
              },
              success:function(data){
                  document.getElementById("detalhesdetalhes").innerHTML=data[0].detalhes;
                  document.getElementById("descricaodetalhes").innerHTML=data[0].descricao;
                  $('#modaldetalhes').modal('show');
                  console.log(data);

                  console.log(data[0].nome);


              },
              error:function () {
                  alert("Erro ao tentar registar, tente novamente");

              }
          });

      }





      function buscarParaRemover(data) {
          $.ajax({
              type:'post',
              url: '../../Controller/projectoController.php',
              dataType: 'JSON',
              data:{
                  '_token':$('input[name=_token]').val(),
                  'id':data,
                  'buscarpararemover' :1
              },
              success:function(data){
                  document.getElementById("nomeremover").innerHTML=data[0].nome+"?";
                  document.getElementById("idremover").value=data[0].id;
                  $('#modalremover').modal('show');
                  console.log(data);

                  console.log(data[0].nome);


              },
              error:function () {
                  alert("Erro ao tentar buscar projecto, tente novamente");

              }
          });

      }










      function remover(){


//Metodo para inserir fornecedor via ajax
          $.ajax({
              type:'post',
              url: '../../Controller/projectoController.php',
              dataType:'html',
              data:{
                  '_token':$('input[name=_token]').val(),
                  'idremoverp':$('input[name=idremoverp]').val(),
                  'remover':1

              },
              success:function(data){
                  $('#modalsucessoremovido').modal('show');
                  setTimeout(function(){  window.location.reload(); }, 4000);


              },
              error:function (data) {
                  console.log(data);
                  alert("Erro ao tentar remover projecto, tente novamente");

              }
          });
      }













      function actualizar(){


//Metodo para inserir fornecedor via ajax
          $.ajax({
              type:'post',
              url: '../../Controller/projectoController.php',
              dataType:'html',
              data:{
                  '_token':$('input[name=_token]').val(),
                  'nome':$('input[name=atnome]').val(),
                  'objectivo':$('input[name=atobjectivo]').val(),
                  'descricao':$('textarea[name=atdescricao]').val(),
                  'detalhes':$('textarea[name=atdetalhes]').val(),
                  'id':$('input[name=atid]').val(),
                  'actualizar':1

              },
              success:function(data){
                 $('#modalsucessoactualizado').modal('show');
                  setTimeout(function(){  window.location.reload(); }, 4000);


              },
              error:function (data) {
                  console.log(data);
                  alert("Erro ao tentar registar projecto, tente novamente");

              }
          });
      }


      function actualizarPagina() {
          window.location.reload();
      }

  </script>

</body>

</html>
