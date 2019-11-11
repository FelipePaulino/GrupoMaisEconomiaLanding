<?php
	if($_SERVER['REQUEST_METHOD']=="POST"&&$_POST['actionsolicite']=="enviaFormsolicite"){	
	
		$nomesolicite=trim(addslashes($_POST['nomesolicite']));
		$emailsolicite=trim(addslashes($_POST['emailsolicite']));
		$telefonesolicite=trim(addslashes($_POST['telefonesolicite']));
		$estadosolicite=trim(addslashes($_POST['estadosolicite']));
		$cidadesolicite=trim(addslashes($_POST['cidadesolicite']));
				
		if($nomesolicite=="")
			$retornosolicite=$_POST['method']=="ajax"?"nomesolicite|||Campo Nome em branco":"Campo Nome em branco";
	
		else if($emailsolicite==""||!preg_match("/^[0-9a-zA-Z_.-]{1,64}@([a-z0-9_]{2,64}\.)([a-z]{3}(\.[a-z]{2})?|[a-z]{2})$/",$emailsolicite)){
			if($emailsolicite=="")
				$retornosolicite=$_POST['method']=="ajax"?"emailsolicite|||Campo E-mail em branco":"Campo E-mail em branco";
			else
				$retornosolicite=$_POST['method']=="ajax"?"emailsolicite|||O E-mail digitado não é válido":"O E-mail digitado não é válido";
		}	

		
		else if($telefonesolicite=="")
			$retornosolicite=$_POST['method']=="ajax"?"telefonesolicite|||Campo Telefone em branco":"Campo Telefone em branco";	



		
		else{
			/* PARÂMETROS GERAIS */
			$paraNomesolicite="Grupo Mais Economia";
			$parasolicite="contato@economizacondominio.com.br";
			
			/* Cabeçalho da mensagem */
			$headerssolicite = "MIME-Version: 1.1\n";
			$headerssolicite .= "Content-type: text/html; charset=UTF-8\n";
			$headerssolicite .= "To: ".$paraNomesolicite."<".$parasolicite.">\n";
			$headerssolicite .= "From: ".$paraNomesolicite."<".$parasolicite.">\n"; // remetente
			$headerssolicite .= "Return-Path: ".$parasolicite."\n"; // return-path
			$headerssolicite .= "Reply-To: ".$email."\n";
			$headerssolicite .= "Bcc: contato@wlglass.com.br\n";
		
		
			
			$mensagemToSendsolicite = '
				Nome = '.$nomesolicite.'<br />
				Email = '.$emailsolicite.'<br />
				Telefone = '.$telefonesolicite.'<br />
				Estado = '.$estadosolicite.'<br />
				Cidade = '.$cidadesolicite.'<br />

			';

			if(@mail($parasolicite, "Contato solicitado pelo do Site - Solicite uma visita", $mensagemToSendsolicite, $headerssolicite))
				$retornosolicite=$_POST['method']=="ajax"?"ok|||Mensagem enviada com sucesso.":"Mensagem enviada com sucesso.";	
			else
				$retornosolicite=$_POST['method']=="ajax"?"falha|||Falha na tentativa de envio da mensagem.":"Falha na tentativa de envio da mensagem.";
		}
	}
		
	if($_POST['method']=="ajax")
		echo $retornosolicite;
	else
		$retornosolicite_php=$retornosolicite;
?>