

<?php 
include "../modal/conexao.php";
$id= $_GET['id'];
$sql = "SELECT * FROM table1 WHERE id='$id'";
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
  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/venobox/venobox.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../css/hover.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style2.css" rel="stylesheet">
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
          <li><a href="#about">About</a></li>
         
          <li><a href="#contact">Contact</a></li>
  
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
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>About The Event</h2>
            <p>Sed nam ut dolor qui repellendus iusto odit. Possimus inventore eveniet accusamus error amet eius aut
              accusantium et. Non odit consequatur repudiandae sequi ea odio molestiae. Enim possimus sunt inventore in
              est ut optio sequi unde.</p>
          </div>
          <div class="col-lg-3">
            <h3>Where</h3>
            <p>Downtown Conference Center, New York</p>
          </div>
          <div class="col-lg-3">
            <h3>When</h3>
            <p>Monday to Wednesday<br>10-12 December</p>
          </div>
        </div>
      </div>
    </section>

    ==========================
      Speakers Section
    ============================-->
    <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="col-sm-12">
          <div class="section-header">

          <?php while($com = mysqli_fetch_array($resultado)){ ?>
            <h2 class="projectname"><?php echo $com['name']; ?></h2>
          
        </div>


        <div class="row" style="margin-top: -49px;">
             <div class="col-sm-6">
                         <div class="card text-white bg-dark mb-3 ">
  <div class="card-header">Descricao</div>
 <div class="card-body">

    <p class="card-text"> <?php echo $com['description']; ?>
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
                 <button type="button" class="btn btn-success btn-lg btn-colaborar hvr-grow" data-toggle="modal" data-target="#myModal">Colaborar</button>      
           </div>
        </div>


        


    </section>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Colaborar</h4>
      </div>
      <div class="modal-body">
       <form action="project.php" enctype="multupart/form-data">
  <div class="form-group">
    <label for="email">Nome Completo:</label>
    <input type="name" name="username" class="form-control" id="email" required="">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" name="email" class="form-control" id="email" required>
  </div>
  <div class="form-group">
    <label for="pwd">CV:</label>
    <input type="file" name="attachment" class="form-control" id="pwd"required>
  </div>
  <div class="form-group">
    <label for="pwd">Text:</label>
    <textarea class="form-group" name="msg" placeholder="Subject"required></textarea>
    
  </div>
  <button type="submit" name="submit" value="Send Email" class="btn btn-success">Submiter</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">fechar</button>
      </div>
    </div>

  </div>
</div>
   
  </main>


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
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/superfish/hoverIntent.js"></script>
  <script src="../lib/superfish/superfish.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/venobox/venobox.min.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="../contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>
</body>

</html>
