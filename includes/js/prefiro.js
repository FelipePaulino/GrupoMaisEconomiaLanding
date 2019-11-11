
$(function(){
		jQuery("input.telefoneprefiro")
        .mask("(99) 9999-9999?9")
        .focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);  
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99) 99999-999?9");  
            } else {  
                element.mask("(99) 9999-9999?9");  
            }  
        });
	//FORM SUBMIT
	$(".prefiro form").submit(function(event){
    	event.preventDefault();
		
	
		//RESETA AVISOS
		$(".prefiro input:text,.prefiro input:radio,.prefiro textarea,.prefiro select").css("background","#FFF");
		$(".prefiro span.erroprefiro").hide();
		
		var nomeprefiro=$(".prefiro input[name='nomeprefiro']").val();
		var telefoneprefiro=$(".prefiro input[name='telefoneprefiro']").val();
		var horarioprefiro=$(".prefiro input[name='horarioprefiro']").val();
		var actionprefiro=$(".prefiro input[name='actionprefiro']").val();

		$.post("includes/php/validacao_prefiro.php",{nomeprefiro:nomeprefiro,telefoneprefiro:telefoneprefiro,horarioprefiro:horarioprefiro,actionprefiro:actionprefiro,method:"ajax"},function(data){																									
			var retorno=data.split("|||");
			var campoprefiro=retorno[0];
			var mensagemprefiro=retorno[1];
			if(campoprefiro=="ok"){
				alert(mensagemprefiro);
				document.location.assign("obrigado-solicitacao-ligacao.php");
			}
			else if(campoprefiro=="falha")
				alert(mensagemprefiro);
			else{
				errosprefiro(campoprefiro,mensagemprefiro);
				return false;
			}
		});
	});
});

function errosprefiro(campoprefiro, mensagemprefiro){
	if(campoprefiro=="mensagem")
		$(".prefiro textarea[name='"+campoprefiro+"']").css("background","#FFFF99").focus();
	else
		$(".prefiro input[name='"+campoprefiro+"']").css("background","#FFFF99").focus();
	$(".prefiro span.erroprefiro").html(mensagemprefiro).fadeIn("fast");
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