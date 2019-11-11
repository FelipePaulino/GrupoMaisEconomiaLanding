<?php
	if($_SERVER['REQUEST_METHOD']=="POST"&&$_POST['actionnews']=="enviaFormnews"){	
	
		$news=trim(addslashes($_POST['news']));
				
		if($news==""||!preg_match("/^[0-9a-zA-Z_.-]{1,64}@([a-z0-9_]{2,64}\.)([a-z]{3}(\.[a-z]{2})?|[a-z]{2})$/",$news)){
			if($news=="")
				$retornonews=$_POST['method']=="ajax"?"news|||Campo E-mail em branco":"Campo E-mail em branco";
			else
				$retornonews=$_POST['method']=="ajax"?"news|||O E-mail digitado não é válido":"O E-mail digitado não é válido";
		}	


		
		else{
			/* PARÂMETROS GERAIS */
		$paraNomesolicite="Grupo Mais Economia";
			$paranews="contato@economizacondominio.com.br";
			
			/* Cabeçalho da mensagem */
			$headersnews = "MIME-Version: 1.1\n";
			$headersnews .= "Content-type: text/html; charset=UTF-8\n";
			$headersnews .= "To: ".$paraNomenews."<".$paranews.">\n";
			$headersnews .= "From: ".$paraNomenews."<".$paranews.">\n"; // remetente
			$headersnews .= "Return-Path: ".$paranews."\n"; // return-path
			$headersnews .= "Reply-To: ".$email."\n";
			//$headersnews .= "Bcc: contato@wlglass.com.br\n";
		
		
			
			$mensagemToSendnews = '
				Email = '.$news.'<br />


			';

			if(@mail($paranews, "Contato solicitado pelo do Site - Cadastro Newsletter", $mensagemToSendnews, $headersnews))
				$retornonews=$_POST['method']=="ajax"?"ok|||Mensagem enviada com sucesso.":"Mensagem enviada com sucesso.";	
			else
				$retornonews=$_POST['method']=="ajax"?"falha|||Falha na tentativa de envio da mensagem.":"Falha na tentativa de envio da mensagem.";
		}
	}
		
	if($_POST['method']=="ajax")
		echo $retornonews;
	else
		$retornonews_php=$retornonews;
?>