<?php
  if(isset($_POST['nome'] && !empty($_POST['nome'])) {

	$nome = addslasches($_POST['nome']);
	$email = addslasches($_POST['email']);
	$msg = addslasches($_POST['msg']);


	$para ="dev.pedroeduardo@gmail.com";
	$assunto ="Contato Via Site";
	$corpo ="Nome:".$nome."- E-mail: ".$email." - Mensagem: ".$msg;
	$cabeçalho = "From: pedroeduardopereiradasilva@gmail.com"."\r\n".
		     "Reply-To: ".$email."\r\n".
		     "X-Mailer: PHP/".phpversion();

	mail($para, $assunto, $corpo, $cabeçalho);
	echo"<h2>E-mail enviado com sucesso!</h2>";
	exit;
}
?>
