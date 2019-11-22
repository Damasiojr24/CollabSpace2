<?php
include_once "../Conexao/conexao.php";
require_once '../Public/mailer/class.phpmailer.php';
// creates object
$mail = new PHPMailer(true);
if(isset($_POST['btn_send']))
{
    $email      = strip_tags($_POST['email']);
    $email2      = strip_tags($_POST['email2']);
    $subject    = strip_tags($_POST['subject']);
    $text_message    = "Hello";
    $message  = strip_tags($_POST['message']);
    $idprojecto=strip_tags($_POST['idprojecto']);



    try
    {
        $mail->IsSMTP();
        $mail->isHTML(true);
        $mail->SMTPDebug  = 0;
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host       = "smtp.gmail.com";
        $mail->Port        = '465';
        $mail->AddAddress($email);
        $mail->Username   ="edmilsondavid2@gmail.com";
        $mail->Password   ="25800000david";
        $mail->SetFrom('edmilsondavid2@gmail.com','Edmilson David Novela');
        $mail->AddReplyTo("edmilsondavid2@gmail.com","Edmilson David Novela");
        $mail->Subject    = $subject;
        $mail->Body    = $message.'</br></br></br>'.$email2;
        $mail->AltBody    = $message;

        $sql = "INSERT INTO pedidosercolaborador(email,nome,cv,projecto_id) VALUES ('".$_POST['email']."','".$_POST['subject']."','".$_POST['message']."','5')";
        mysqli_query($link,$sql);
        mysqli_close($link);

        if($mail->Send())
        {


            $msg = "Hi, Your mail successfully sent to".$email." ";
            echo $msg;
            echo json_encode(array("statusCode"=>200));

        }
    }
    catch(phpmailerException $ex)
    {
        $msg = "<div class='alert alert-warning'>".$ex->errorMessage()."</div>";
        echo $msg;
    }
}