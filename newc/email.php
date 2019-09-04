<?


		require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'phwebgroup@gmail.com';                 // SMTP username
$mail->Password = 'phweb123';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('phwebgroup@gmail.com', 'GLC SITE');
$mail->addAddress("pedromoter@me.com");
	//$mail->addCC("henriquemoter@serratv.com.br");// Add a recipient


      // Add attachments
 // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = "Novo form de contato preenchido!";


$nome  = $_POST['name'];
$email = $_POST['email'];
$num = $_POST['num'];

		$txt = "Nova Form de Contato preenchida!\n Nome: $nome \n Email: $email \n \n Número: $num";
		
						   
$mail->Body  =  $txt;
		
if(!$mail->send()) {
	$error = $mail->ErrorInfo;
    die(json_encode(array("status"=>"error","detail"=>$error)));
} else {
    
}
	//complete

		 die(json_encode(array("status"=>"ok","detail"=>"ok")));
	
	
?>