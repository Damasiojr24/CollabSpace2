

<?php 
include "../Conexao/conexao.php";
$id= $_GET['id'];
$sql = "SELECT * FROM projecto WHERE id='$id'";
$resultado = mysqli_query($link,$sql); 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>CollabSpace</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../Public/img/favicon.png" rel="icon">
  <link href="../Public/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../Public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../Public/bootstrap/js/dist/modal.js">

  <!-- Libraries CSS Files -->
  <link href="../Public/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../Public/lib/animate/animate.min.css" rel="stylesheet">
  <link href="../Public/lib/venobox/venobox.css" rel="stylesheet">
  <link href="../Public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../Public/css/hover.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="../Public/css/style.css" rel="stylesheet">
    <link href="../Public/css/style2.css" rel="stylesheet">
    <style type="text/css">
      .card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
    max-height: 8rem!important;
}


.modal-title {
  color: #fff!important;
    margin-bottom: 0;
    line-height: 1.5;
    margin-right: 390px!important;
    margin-left: -467px!important;
}

.modal-header {
    background-color: #3ca754!important;
}

    </style>


  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header" class="header-scrolled">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="../view/index.php" class="scrollto"><h1>CollabSpace</h1></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="../view/index.html">Home</a></li>
          <li><a href="#about">Sobre Nós</a></li>
         
          <li><a href="#contact">Contactos</a></li>
  
        </ul>
      </nav><!-- #nav-menu-container          <li class="buy-tickets"><a href="#buy-tickets">Buy Tickets</a></li> -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  
  <main id="main">

    <!--==========================
      About Section
    ============================


    ==========================
      Speakers Section
    ============================-->
    <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="col-sm-12">
          <div class="section-header">

          <?php while($com = mysqli_fetch_array($resultado)){ ?>
            <h2 class="projectname"><?php echo $com['nome']; ?></h2>
          
        </div>


        <div class="row" style="margin-top: -49px;">
             <div class="col-sm-6">
                         <div class="card text-white bg-dark mb-3 ">
  <div class="card-header">Descricao</div>
 <div class="card-body">

    <p class="card-text"> <?php echo $com['descricao']; ?>
    </p>
  </div>
  <?php } ?>

</div>
</div>
           
            <div class="col-sm-6">
                        <div class="card text-white bg-dark mb-3 " >
  <div class="card-header">Objectivo</div>
    <div class="card-body">

    <p class="card-text"  maxlength="10"> Criar uma continuous, customizable flow of articles organized from thousands of publishers and magazinescontentQuick sample text to create the card title and make up the body of the card's contentQuick sample text to create the card title and make up the body of the card's contentQuick sample text to create the card title and make up the.</p>
  </div>

</div>
           
         </div>


<div class="col-sm-12">
                        <div class="card text-white bg-dark mb-3 " >
  <div class="card-header">Mais Detalhes</div>
  <a href="../view/project.php">  <div class="card-body">

    <p class="card-text"> It presents a continuous, customizable flow of articles organized from thousands of publishers and magazinescontentQuick sample text to create the card title and make up the body of the card's contentQuick sample text to create the card title and make up the body of the card's contentQuick sample text to create the card title and make up the body of the card's contentQuick sample text to create the card title and make up the body of the card's contentcreate the card title and make up the body of the card's contentQuick sample text to create the card title and make up the body of the card's content .</p>
  </div>
</a>
</div>
           
         </div>

      
          <div class="col-sm-6">
                <button type="button" class="btn btn-success btn-lg btn-pdf btn-download hvr-grow">Documentation PDF</button>        
          </div>
           
            <div class="col-sm-6">
      
                 <button type="button" onclick="modal()" class="btn btn-success btn-lg btn-colaborar hvr-grow" data-toggle="modal" data-target="#myModal">Colaborar</button>
           </div>
        </div>

            <script>
                function modal() {
                    $('#modale').modal('show');

                }
            </script>




    </section>
<!-- Modal -->
<div id="modale" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="fechar()">&times;</button>
        <h4 class="modal-title">Colaborar</h4>
      </div>
      <div class="modal-body">
          <div class="form-group" >
              <input type="number" name="idprojecto" class="form-control"  value="<?php echo $_GET['id']?>">
          </div>
  <div class="form-group">
    <label for="email">Nome Completo:</label>
    <input type="text" name="username" class="form-control" id="email" required="">
  </div>
  <div class="form-group">
   <label for="email">Assunto</label>
   <input type="text" name="subject" class="form-control" id="email" required="">
  </div>
  <div class="form-group" style="display:none;">
        <input type="email" name="email" class="form-control" id="email" value="damasiojunior7@gmail.com">
  </div>
    <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" name="email2" class="form-control" id="email" required>
  </div>


  <div class="form-group">
    <label for="pwd">Texto:</label>
    <textarea class="form-group" name="message" rows="5" cols="55" placeholder="Subject"required></textarea>
    
  </div>
  <button type="button"  onclick="enviaremail()" class="btn btn-success">Submiter</button>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" onclick="fechar()" data-dismiss="modal">fechar</button>
      </div>
    </div>

  </div>
</div>
   
  </main>









  <div id="modalsucesso" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header header-color-modal bg-color-1">
                  <h4 class="modal-title">Projecto</h4>
                  <div class="modal-close-area modal-close-df">
                      <button  class="close" data-dismiss="modal" href="#">&times;</button>
                  </div>
              </div>
              <div class="modal-body">
                  <i class="educate-icon educate-checked modal-check-pro"></i>
                  <h2>Sucesso!</h2>
                  <p>Projecto actulaizado com sucesso!</p>
              </div>
              <div class="modal-footer">
                  <button data-dismiss="modal" onclick="actualizarPagina()">Sair</button>
              </div>
          </div>
      </div>
  </div>

  <!--========================--
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/logo.png" alt="CollabSpace">
            <p>In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              Maputo, NY 535022<br>
              MOZ <br>
              <strong>Phone:</strong> +258 85589 55488 55<br>
              <strong>Email:</strong> info@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>CollabSpace</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
        -->
        Designed by <a href="https://bootstrapmade.com/">CIUEM</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="../Public/lib/jquery/jquery.min.js"></script>
  <script src="../Public/lib/jquery/jquery-migrate.min.js"></script>
  <script src="../Public/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../Public/lib/easing/easing.min.js"></script>
  <script src="../Public/lib/superfish/hoverIntent.js"></script>
  <script src="../Public/lib/superfish/superfish.min.js"></script>
  <script src="../Public/lib/wow/wow.min.js"></script>
  <script src="../Public/lib/venobox/venobox.min.js"></script>
  <script src="../Public/lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="../contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../Public/js/main.js"></script>


  <script>
      function enviaremail(){


//Metodo para inserir fornecedor via ajax
          $.ajax({
              type:'post',
              url: '../Controller/processaremail.php',
              dataType:'html',
              data:{
                  '_token':$('input[name=_token]').val(),
                  'subject':$('input[name=subject]').val(),
                  'email':$('input[name=email]').val(),
                  'email2':$('input[name=email2]').val(),
                  'message':$('textarea[name=message]').val(),
                  'btn_send':1

              },
              success:function(dataResult){
    
               $('#modalsucesso').modal('show');
               setTimeout(function(){window.location.reload();},3000);  
                  },

              error:function () {
                  alert("Erro ao tentar registar, tente novamente");

              }


          });
      }




      function fechar() {
          window.location.reload();
      }
  </script>
</body>

</html>
