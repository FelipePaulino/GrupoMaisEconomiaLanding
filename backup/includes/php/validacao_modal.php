<?php
	if($_SERVER['REQUEST_METHOD']=="POST"&&$_POST['actionmodal']=="enviaFormmodal"){	
	
		$nomemodal=trim(addslashes($_POST['nomemodal']));
		$telefonemodal=trim(addslashes($_POST['telefonemodal']));
				
		if($nomemodal=="")
			$retornomodal=$_POST['method']=="ajax"?"nomemodal|||Campo Nome em branco":"Campo Nome em branco";
	
	
		
		else if($telefonemodal=="")
			$retornomodal=$_POST['method']=="ajax"?"telefonemodal|||Campo Telefone em branco":"Campo Telefone em branco";	


		
		else{
			/* PARÂMETROS GERAIS */
			$paraNomemodal="Grupo Mais Economia";
			$paramodal="contato@economizacondominio.com.br";
			
			/* Cabeçalho da mensagem */
			$headersmodal = "MIME-Version: 1.1\n";
			$headersmodal .= "Content-type: text/html; charset=UTF-8\n";
			$headersmodal .= "To: ".$paraNomemodal."<".$paramodal.">\n";
			$headersmodal .= "From: ".$paraNomemodal."<".$paramodal.">\n"; // remetente
			$headersmodal .= "Return-Path: ".$paramodal."\n"; // return-path
			$headersmodal .= "Reply-To: ".$email."\n";
			//$headersmodal .= "Bcc: contato@wlglass.com.br\n";
		
		
			
			$mensagemToSendmodal = '
				Nome = '.$nomemodal.'<br />
				Telefone = '.$telefonemodal.'<br />

			';

			if(@mail($paramodal, "Contato solicitado pelo do Site - Nós te Ligamos", $mensagemToSendmodal, $headersmodal))
				$retornomodal=$_POST['method']=="ajax"?"ok|||Mensagem enviada com sucesso.":"Mensagem enviada com sucesso.";	
			else
				$retornomodal=$_POST['method']=="ajax"?"falha|||Falha na tentativa de envio da mensagem.":"Falha na tentativa de envio da mensagem.";
		}
	}
		
	if($_POST['method']=="ajax")
		echo $retornomodal;
	else
		$retornomodal_php=$retornomodal;
?>