<?php
if (isset($_POST['submit'])) {
	$mail->isSMTP();
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$msg = $_POST['msg'];




    $to = "damasiojunior7@gmail.com";
    $subject="Form Submisssion";
    $message="Name: ".$name."\n"."Phone: ".$phone."\n". "Wrote the following: "."\n\n".$msg;
    $headers="From: ".$email;

    if (mail($to,$subject,$message,$headers)) {
    	echo "<h1>Sent Successfully Thank U "." ".$name.", We will contact Shortly!!!</h1>";
    }

    else{
    	echo "Something Went Wrong!";
    }


    



	
}


  ?>