<?php
	
	session_start();

 	require("lib/conexao/conexao_mysql.php");
        $conexao = new MyDatabase();
        $conn = $conexao->connect();
	

	// FROM
	$nome = $_POST['nome']; 
	$email = $_POST['email'];
	$message = $_POST['mensagem'];
	$itens_pedidos = implode(", ", $_SESSION['array_item_carrinho']);
	$total_pagar = $_SESSION['teste'];
	
	// SQL
	$tabela = "pedidos";
	$campos = "";
	$query_pedidos = "INSERT INTO $tabela (`id_pedido`, `nome_cliente`, `email_cliente`, `descricao_pedido`, `itens_pedido`, `total_pagar`) VALUES (NULL, '$nome', '$email', '$message', '$itens_pedidos', '$total_pagar')";
	
	if(isset($nome) && isset($email) && isset($message)){
		$conn->query($query_pedidos);
	}else{
		echo "Carrinho vazio";
	}
	





	// PHP Mailer
	require_once("phpmailer/class.phpmailer.php");

	$mail = new PHPMailer();                              // Passing `true` enables exceptions
	try {
	    //Server settings
	    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
	    $mail->isSMTP();                                      // Set mailer to use SMTP
	    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth = true;                               // Enable SMTP authentication
	    $mail->Username = 'arthurpedroweb@gmail.com';                 // SMTP username
	    $mail->Password = '1772004516Ap.';                           // SMTP password
	    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	    $mail->Port = 587;                                    // TCP port to connect to
	    //Recipients
	    $from = "arthurpedroweb@gmail.com";
	    $mail->setFrom($from, $nome);
	    $mail->addAddress($from, $nome);     // Add a recipient
	    /*//Attachments
	    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	*/
	    //Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = "Cliente creativelab: ".$nome;
	    $mail->Body    = 'Email enviado de '.$email.' para '.$from.'<br /><br />'.$message;
	    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	    $mail->send();
	    // echo 'Message has been sent';
	    
	    // session_destroy();
	    
	    // header("Location: /HTML/portfolio/email_enviado.html");
	  
	} catch (Exception $e) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	}

?>