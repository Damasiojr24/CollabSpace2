<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bootflat-Admin Template</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="favicon_16.ico"/>
    <link rel="bookmark" href="favicon_16.ico"/>
    <!-- site css -->
    <link rel="stylesheet" href="../../Public/login/site.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>

    <![endif]-->
    <script type="text/javascript" src="../../Public/login/site.min.js"></script>
    <style>
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #303641;
            color: #C1C3C6
        }
    </style>
</head>
<body style="background: #1c7430 !important;">
<div class="container" style="background: #1c7430 !important;">
    <form class="form-signin" method="post" role="form" action="../../Controller/loginController.php">
        <h3 class="form-signin-heading">Introduza suas Credenciais</h3>
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="glyphicon glyphicon-user"></i>
                </div>
                <input type="text" class="form-control" name="username" id="username" placeholder="nome do usuario" style="background-color: white; color: black" autocomplete="off" />
            </div>
        </div>
        <br>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class=" glyphicon glyphicon-lock "></i>
                </div>
                <input type="password" class="form-control" name="password" id="password" placeholder="palavra-passe" style="background-color: white; color: black" autocomplete="off" />
            </div>
        </div>
        <br>
        <br>

        <input  class="btn btn-lg btn-primary btn-block" type="submit" value="Entrar">
    </form>
    <br><br>
   <center> <a href="" style="color: white">Esqueceu-se da password?</a></center>

</div>



</body>
</html>
