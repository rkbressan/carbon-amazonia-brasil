<?php

if(isset($_POST['email'])) && !empty($_POST['email']) {

$name = addslashes($_POST['name']);
$company = addslashes($_POST['company']);
$phone = addslashes($_POST['phone']);
$email = addslashes($_POST['email']);
$message = addslashes($_POST['message']);

$to = "imoveisteixeira@gmail.com";
$subject = "Contato - Carbon Amazonia Brasil";
$body = "Name : ".$nome. "\r\n".
        "Company: ".$company. "\r\n".
        "Phone: ".$phone. "\r\n".
        "Email: ".$email. "\r\n".
        "Message: ".$message. "\r\n".
$header = "From:imoveisteixeira@gmail.com"."\r\n".
            "Reply-To:".$email."\r\n".
            "X-Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

    echo("Email successfully sent");

}else{

    echo("Error: email was not sent");
}

}

?>