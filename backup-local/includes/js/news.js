
$(function(){ 

	//FORM SUBMIT
	$("footer form").submit(function(event){
    	event.preventDefault();
		
	
		//RESETA AVISOS
		$("footer input:text").css("background","#FFF");
		$("footer span.erronews").hide();
		
		var news=$("footer input[name='news']").val();
		var actionnews=$("footer input[name='actionnews']").val();

		$.post("includes/php/validacao_news.php",{news:news,actionnews:actionnews,method:"ajax"},function(data){																									
			var retorno=data.split("|||");
			var camponews=retorno[0];
			var mensagemnews=retorno[1];
			if(camponews=="ok"){
				alert(mensagemnews);
				document.location.assign("cadastro-newsletter.php");
			}
			else if(camponews=="falha")
				alert(mensagemnews);
			else{
				errosnews(camponews,mensagemnews);
				return false;
			}
		});
	});
});

function errosnews(camponews, mensagemnews){
	if(camponews=="mensagem")
		$("footer textarea[name='"+camponews+"']").css("background","#FFFF99").focus();
	else
		$("footer input[name='"+camponews+"']").css("background","#FFFF99").focus();
	$("footer span.erronews").html(mensagemnews).fadeIn("fast");
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