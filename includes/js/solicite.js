
$(function(){
		jQuery("input.telefonesolicite")
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
	$(".solicite form").submit(function(event){
    	event.preventDefault();
		
	
		//RESETA AVISOS
		$(".solicite input:text,.solicite input:radio,.solicite textarea,.solicite select").css("background","#FFF");
		$(".solicite span.errosolicite").hide();
		
		var nomesolicite=$(".solicite input[name='nomesolicite']").val();
		var emailsolicite=$(".solicite input[name='emailsolicite']").val();
		var telefonesolicite=$(".solicite input[name='telefonesolicite']").val();
		var estadosolicite=$(".solicite select[name='estadosolicite']").val();
		var cidadesolicite=$(".solicite select[name='cidadesolicite']").val();
		var actionsolicite=$(".solicite input[name='actionsolicite']").val();

		$.post("includes/php/validacao_solicite.php",{nomesolicite:nomesolicite,emailsolicite:emailsolicite,telefonesolicite:telefonesolicite,estadosolicite:estadosolicite,cidadesolicite:cidadesolicite,actionsolicite:actionsolicite,method:"ajax"},function(data){																									
			var retorno=data.split("|||");
			var camposolicite=retorno[0];
			var mensagemsolicite=retorno[1];
			if(camposolicite=="ok"){
				alert(mensagemsolicite);
				document.location.assign("obrigado-solicitacao-visita.php");
			}
			else if(camposolicite=="falha")
				alert(mensagemsolicite);
			else{
				errossolicite(camposolicite,mensagemsolicite);
				return false;
			}
		});
	});
});

function errossolicite(camposolicite, mensagemsolicite){
	if(camposolicite=="mensagem")
		$(".solicite textarea[name='"+camposolicite+"']").css("background","#FFFF99").focus();
	else
		$(".solicite input[name='"+camposolicite+"']").css("background","#FFFF99").focus();
	$(".solicite span.errosolicite").html(mensagemsolicite).fadeIn("fast");
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