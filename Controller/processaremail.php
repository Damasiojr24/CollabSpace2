<?php
require_once '../Public/mailer/class.phpmailer.php';
// creates object
$mail = new PHPMailer(true);
if(isset($_POST['btn_send']))
{
    $email      = strip_tags($_POST['email']);
    $subject    = strip_tags($_POST['subject']);
    $text_message    = "Hello";
    $message  = strip_tags($_POST['message']);



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
        $mail->Body    = $message;
        $mail->AltBody    = $message;

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