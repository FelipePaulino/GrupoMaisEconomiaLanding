
$(function(){ 

	//FORM SUBMIT
	$(".contato form").submit(function(event){
    	event.preventDefault();
		
	
		//RESETA AVISOS
		$(".contato input:text,.contato input:radio, .contato textarea,.contato select").css("background","#FFF");
		$(".contato span.erro2").hide();
		
		var nome=$(".contato input[name='nome']").val();
		var telefone=$(".contato input[name='telefone']").val();
		var email=$(".contato input[name='email']").val();
		var endereco=$(".contato input[name='endereco']").val();
		var numero=$(".contato input[name='numero']").val();
		var tipo=$(".contato select[name='tipo']").val();
		var mensagem=$(".contato textarea[name='mensagem']").val();
		var action=$(".contato input[name='action']").val();

		$.post("includes/php/validacao_home.php",{nome:nome,telefone:telefone,email:email,endereco:endereco,numero:numero,tipo:tipo,mensagem:mensagem,action:action,method:"ajax"},function(data){																									
			var retorno=data.split("|||");
			var campo=retorno[0];
			var mensagem=retorno[1];
			if(campo=="ok"){
				alert(mensagem);
				document.location.assign("obrigado-form-completo.php");
			}
			else if(campo=="falha")
				alert(mensagem);
			else{
				erros(campo,mensagem);
				return false;
			}
		});
	});
});

function erros(campo, mensagem){
	if(campo=="mensagem")
		$(".contato textarea[name='"+campo+"']").css("background","#FFFF99").focus();
	else
		$(".contato input[name='"+campo+"']").css("background","#FFFF99").focus();
	$(".contato span.erro2").html(mensagem).fadeIn("fast");
}

function soNum(inputData, e){
	if(document.all) // Internet Explorer
		var tecla = event.keyCode;
	else //Outros Browsers
		var tecla = e.which;
	
	if(!(tecla > 47 && tecla < 58)&&tecla!=8&&tecla!=0){
		alert("Digite somente números");
		return false;
	}
}