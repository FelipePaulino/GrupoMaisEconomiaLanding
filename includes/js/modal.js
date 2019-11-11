
$(function(){
		jQuery("input.telefonemodal")
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
	$(".modal form").submit(function(event){
    	event.preventDefault();
		
	
		//RESETA AVISOS
		$(".modal input:text,.modal input:radio,.modal textarea,.modal select").css("background","#FFF");
		$(".modal span.erromodal").hide();
		
		var nomemodal=$(".modal input[name='nomemodal']").val();
		var telefonemodal=$(".modal input[name='telefonemodal']").val();
		var actionmodal=$(".modal input[name='actionmodal']").val();

		$.post("includes/php/validacao_modal.php",{nomemodal:nomemodal,telefonemodal:telefonemodal,actionmodal:actionmodal,method:"ajax"},function(data){																									
			var retorno=data.split("|||");
			var campomodal=retorno[0];
			var mensagemmodal=retorno[1];
			if(campomodal=="ok"){
				alert(mensagemmodal);
				document.location.assign("obrigado-nos-teligamos.php");
			}
			else if(campomodal=="falha")
				alert(mensagemmodal);
			else{
				errosmodal(campomodal,mensagemmodal);
				return false;
			}
		});
	});
});

function errosmodal(campomodal, mensagemmodal){
	if(campomodal=="mensagem")
		$(".modal textarea[name='"+campomodal+"']").css("background","#FFFF99").focus();
	else
		$(".modal input[name='"+campomodal+"']").css("background","#FFFF99").focus();
	$(".modal span.erromodal").html(mensagemmodal).fadeIn("fast");
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