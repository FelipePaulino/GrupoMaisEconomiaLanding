<?php
	if($_SERVER['REQUEST_METHOD']=="POST"&&$_POST['action']=="enviaForm"){	
	
		$nome=trim(addslashes($_POST['nome']));
		$telefone=trim(addslashes($_POST['telefone']));
		$email=trim(addslashes($_POST['email']));
		$endereco=trim(addslashes($_POST['endereco']));
		$numero=trim(addslashes($_POST['numero']));
		$tipo=trim(addslashes($_POST['tipo']));
	
		
		$mensagem=trim(addslashes($_POST['mensagem']));
				
		if($nome=="")
			$retorno=$_POST['method']=="ajax"?"nome|||Campo Nome em branco":"Campo Nome em branco";
	
	
		
		else if($telefone=="")
			$retorno=$_POST['method']=="ajax"?"telefone|||Campo Telefone em branco":"Campo Telefone em branco";	


		else if($email==""||!preg_match("/^[0-9a-zA-Z_.-]{1,64}@([a-z0-9_]{2,64}\.)([a-z]{3}(\.[a-z]{2})?|[a-z]{2})$/",$email)){
			if($email=="")
				$retorno=$_POST['method']=="ajax"?"email|||Campo E-mail em branco":"Campo E-mail em branco";
			else
				$retorno=$_POST['method']=="ajax"?"email|||O E-mail digitado não é válido":"O E-mail digitado não é válido";
		}	
			
		
		else{
			/* PARÂMETROS GERAIS */
		$paraNomesolicite="Grupo Mais Economia";
			$para="contato@economizacondominio.com.br";
			
			/* Cabeçalho da mensagem */
			$headers = "MIME-Version: 1.1\n";
			$headers .= "Content-type: text/html; charset=UTF-8\n";
			$headers .= "To: ".$paraNome."<".$para.">\n";
			$headers .= "From: ".$paraNome."<".$para.">\n"; // remetente
			$headers .= "Return-Path: ".$para."\n"; // return-path
			$headers .= "Reply-To: ".$email."\n";
			//e$headers .= "Bcc: contato@wlglass.com.br\n";
		
		
			
			$mensagemToSend = '
				'.$nome.' enviou uma mensagem através do site<br /><br />
				Email = '.$email.'<br />
				Telefone = '.$telefone.'<br />
				Endereço = '.$endereco.'<br />
				Numero = '.$numero.'<br />
				Tipo de Empreendimento = '.$tipo.'<br />
				Mensagem = '.$mensagem.'<br />

			';

			if(@mail($para, "Contato solicitado pelo do Site - Formulário Completo", $mensagemToSend, $headers))
				$retorno=$_POST['method']=="ajax"?"ok|||Mensagem enviada com sucesso.":"Mensagem enviada com sucesso.";	
			else
				$retorno=$_POST['method']=="ajax"?"falha|||Falha na tentativa de envio da mensagem.":"Falha na tentativa de envio da mensagem.";
		}
	}
		
	if($_POST['method']=="ajax")
		echo $retorno;
	else
		$retorno_php=$retorno;
?>