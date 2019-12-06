
<?php 
include "../Conexao/conexao.php";
$sql = "SELECT * FROM projecto";
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

  <!-- Libraries CSS Files -->
  <link href="../Public/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../Public/lib/animate/animate.min.css" rel="stylesheet">
  <link href="../Public/lib/venobox/venobox.css" rel="stylesheet">
  <link href="../Public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../Public/css/hover.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="../Public/css/style.css" rel="stylesheet">
    <link href="../Public/css/main.css" rel="stylesheet">


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
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><h1>CollabSpace</h1></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">Sobre Nós</a></li>
         
          <li><a href="#contact">Contactos</a></li>
  
        </ul>
      </nav><!-- #nav-menu-container          <li class="buy-tickets"><a href="#buy-tickets">Buy Tickets</a></li> -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">Bem Vindo a Plataforma de <br><span>Collaboracao</span> de da CIUEM</h1>
 
  
      <a href="#about" class="about-btn scrollto">Mais sobre CollabSpace</a>
    </div>
  </section>

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

    <==========================
      Speakers Section
    ============================-->
    <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Projectos</h2>
        </div>
        <div class="row">
          <?php while($dados = mysqli_fetch_array($resultado)){ ?>
            <div class="col-sm-4">
              <div class="card text-white bg-dark mb-3 hvr-grow " style="width: 29rem;max-height: 180px;" >
               <div class="card-header"><?php echo $dados['nome']; ?></div>
                <a href="../view/project.php?id=<?php echo $dados['id']; ?>"> 
                  <div class="card-body" style="height: 134px;">
                    <p class="card-text"><?php echo $dados['descricao']; ?></p>
                  </div>
                </a>
              </div>
            </div>
          <?php } ?>

           

            </div>


            

      </div>

    </section>
   
  </main>


  <!--========================--
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h1>DSM</h1>
            <p>O DSM é um departamento de desenvolvimento de softwares, pertecente ao Centro de Informatica da Universidade Eduardo Mondlane.
                Atualmente trabalha em projetos de analise e desenvolvimento de softwares com empresas
                dos mais variados ramos de atividades, o princípio básico é desenvolver
                softwares adaptados ao processo de cada cliente.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Links Uteis</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">UEM</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">DSMWEBSITE</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">CIUEM</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">CISCO UEM</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">DSM</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
              <h4>Sobre CollabSpace</h4>
              <p style="color: white">É um projecto da DSM que visa oferecer oportunidades a jovens estudantes informaticos que estao a busca de uma expriencia professional no Mercado de trabalho,
                  que queira participar num projecto onde pode adquir muitas habilidades em programacao ou area relacionada.</p>

          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Nossos contactos</h4>
            <p>
                Campus Universitario <br>
                Principal, 3453, UEM <br>
                Maputo - Mocambique<br>
                <strong>Telefone:</strong> 21 49 3724<br>
                <strong>Email:</strong> info@example.com<br></p>

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
</body>

</html>
