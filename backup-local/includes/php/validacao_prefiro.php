<?php
	if($_SERVER['REQUEST_METHOD']=="POST"&&$_POST['actionprefiro']=="enviaFormprefiro"){	
	
		$nomeprefiro=trim(addslashes($_POST['nomeprefiro']));
		$telefoneprefiro=trim(addslashes($_POST['telefoneprefiro']));
		$horarioprefiro=trim(addslashes($_POST['horarioprefiro']));
				
		if($nomeprefiro=="")
			$retornoprefiro=$_POST['method']=="ajax"?"nomeprefiro|||Campo Nome em branco":"Campo Nome em branco";
	
	
		
		else if($telefoneprefiro=="")
			$retornoprefiro=$_POST['method']=="ajax"?"telefoneprefiro|||Campo Telefone em branco":"Campo Telefone em branco";	

		else if($horarioprefiro=="")
			$retornoprefiro=$_POST['method']=="ajax"?"horarioprefiro|||Campo Melhor Horário em branco":"Campo Melhor Horário em branco";


		
		else{
			/* PARÂMETROS GERAIS */
		$paraNomeprefiro="Grupo Mais Economia";
			$paraprefiro="contato@economizacondominio.com.br";
			
			/* Cabeçalho da mensagem */
			$headersprefiro = "MIME-Version: 1.1\n";
			$headersprefiro .= "Content-type: text/html; charset=UTF-8\n";
			$headersprefiro .= "To: ".$paraNomeprefiro."<".$paraprefiro.">\n";
			$headersprefiro .= "From: ".$paraNomeprefiro."<".$paraprefiro.">\n"; // remetente
			$headersprefiro .= "Return-Path: ".$paraprefiro."\n"; // return-path
			$headersprefiro .= "Reply-To: ".$email."\n";
			$headersprefiro .= "Bcc: contato@wlglass.com.br\n";
		
		
			
			$mensagemToSendprefiro = '
				Nome = '.$nomeprefiro.'<br />
				Telefone = '.$telefoneprefiro.'<br />
				Melhor Horario = '.$horarioprefiro.'<br />

			';

			if(@mail($paraprefiro, "Contato solicitado pelo do Site - Solicite uma ligação", $mensagemToSendprefiro, $headersprefiro))
				$retornoprefiro=$_POST['method']=="ajax"?"ok|||Mensagem enviada com sucesso.":"Mensagem enviada com sucesso.";	
			else
				$retornoprefiro=$_POST['method']=="ajax"?"falha|||Falha na tentativa de envio da mensagem.":"Falha na tentativa de envio da mensagem.";
		}
	}
		
	if($_POST['method']=="ajax")
		echo $retornoprefiro;
	else
		$retornoprefiro_php=$retornoprefiro;
?>