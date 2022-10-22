<?php

   session_start();

   $_SESSION['submit'] = @trim(stripslashes($_POST['name'])); 

    $name = @trim(stripslashes($_POST['name'])); 

    $email = @trim(stripslashes($_POST['email'])); 

    $subject = 'Assign My Work'; 

	 $phone = @trim(stripslashes($_POST['pn']));

    $message = @trim(stripslashes($_POST['msg']));

	// $cntryCode = @trim(stripslashes($_POST['pc']));

	 



    $email_from = $email;

    $email_to = 'info@assignmywork.co.uk';



    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Message: ' . $message . "\n\n" . 'Phone: '. $phone;



    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    

    //echo json_encode($status);

	//echo 'Your request has be received. Your account will be activated shortly';

	header("Location: thankyou.php");

	die;	

?>