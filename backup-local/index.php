<?php

	include_once "includes/php/validacao_modal.php";
	include_once "includes/php/validacao_home.php";
	include_once "includes/php/validacao_news.php";
	include_once "includes/php/validacao_prefiro.php";
	include_once "includes/php/validacao_solicite.php";

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, localtreechildrenuser-scalable=no"> 
<meta name="robots" content="index, follow">

<link rel="canonical"   href="<?php echo $canonnical; ?>">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="description" content="<?php echo $description; ?>">
<title>Economia de Água | Grupo Mais Economia</title>


<!-- Última versão JavaScript compilada e minificada -->
<link rel="stylesheet"   href="includes/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css"   href="includes/slick/slick.css"/>
<link rel="stylesheet"   href="includes/css/stylesheet.css">
<link rel="stylesheet"   href="includes/bootstrap/css/bootstrap.min.css">
<!-- Tema opcional -->
<link rel="stylesheet"   href="includes/bootstrap/css/bootstrap-theme.min.css">
<link rel="stylesheet"   href="includes/css/geral.css">

 <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MMLWGGD');</script>
<!-- End Google Tag Manager -->
<!-- Última versão JavaScript compilada e minificada -->
</head>
<body>

<div class="modal">
		<div class="fundo"></div>
		<div class="form-modal">
		<img src="images/modal.png" class="img-modal">
		<i class="fa fa-times" aria-hidden="true"></i>
			<p>Preencha os campos abaixo e entraremos em contato o mais breve possível.</p>
			<form action="" method="post" id="form">
    		<div>
            	<label>Nome:</label>
            	<input name="nomemodal"  type="text" class="nome" value="" />
           </div>
			<div>
            	<label>Telefone:</label>
            	<input name="telefonemodal" class="telefone" type="text" value="" />
			</div>
			<input type="hidden" name="actionmodal" value="enviaFormmodal" />                            
            <input name="enviarmodal" type="submit" value="Enviar" class="botao" />
            <span class="erromodal">
                <?php
                if($retornomodal_php!=""){
                echo $retornomodal_php;
                }
                ?>
            </span>
        </form>
		</div>
	</div>
	<div class="whats">
		<i class="fa fa-times" aria-hidden="true"></i>
		<a href="https://api.whatsapp.com/send?phone=5511991075421"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
		<a href="https://api.whatsapp.com/send?phone=5511991075421"><h4><span>Manda um</span>Whatsapp!</h4></a>
	</div>

<nav>
	<div class="container">
		<a href="index.php" class="logo"><img src="images/logo.png"></a>
			<div id="nav-icon1">
	  <span></span>
	  <span></span>
	  <span></span>
	</div>
	<div class="menu">
		<div class="links">
			<a href="#como-funciona" class="scroll">Como Funciona<span></span></a>
			<a href="#nossos-resultados" class="scroll">Nossos Resultados<span></span></a>
			<a href="#depoimentos" class="scroll">Depoimentos<span></span></a>
			<a href="#contato" class="scroll">Contato<span></span></a>
		</div>
		<div class="telefones">
			<a href="tel:1122684589"><i class="fa fa-phone" aria-hidden="true"></i>11 2268.4589</a><br class="quebra">
			<a href="https://api.whatsapp.com/send?phone=5511991075421"><i class="fa fa-whatsapp" aria-hidden="true"></i>11 99107.5421</a>
			
		</div>
		<a href="#" class="nos-ligamos abrir-modal">Nós te Ligamos</a>
	</div>
	</div>
</nav>
<div class="carrosel">
	<div class="banner banner1">
		<div class="container">
			<h2>Reduza Despesas</h2>
			<h3>com água em seu Condomínio</h3>
			<p>Conheça nossa metodologia de trabalho e
entenda porque alcançamos níveis de
economia tão expressivos.</p>
			<a href="#contato" class="scroll" alt="" title="">Quero Economizar!</a>
		</div>
	</div>
	<div class="banner banner2">
		<div class="container">
			<h2>Mais de 122 mil reais</h2>
			<h3>economizados em um ano</h3>
			<p>A quantia economizada pode ser reaproveitada
em melhorias para o condomínio.</p>
			<a href="#contato" class="scroll" alt="" title="">Quero Economizar!</a>
		</div>
	</div>
	<div class="banner banner3">
		<div class="container">
			<h2>Redução de Água</h2>
			<h3 style="color: #fff;">com ZERO investimento</h3>
			<p>Já pensou em economizar água em seu condomínio
ou estabelecimento sem gastar 1 centavo?</p>
			<a href="#contato" class="scroll" alt="" title="">Quero Economizar!</a>
		</div>
	</div>
</div>
<div class="container">
	
		<a href="#processo" class="scroll">
		<div class="mouse">	
			<span class="pontinho"></span>
			<p>Desça</p>
		</div></a>
	
	<div class="formularios">
		<h4 class="ativo">SOLICITE UMA VISITA</h4>
		<h4 class="inativo">Prefiro uma Ligação</h4>
		<div class="solicite">
			
			<form>
				<input type="text" name="nomesolicite" placeholder="Nome">
				<input type="text" name="emailsolicite" placeholder="E-mail">
				<input type="text" name="telefonesolicite" placeholder="Telefone">
				<select id="estados" name="estadosolicite">
					<option value=""></option>
				</select>
				<span class="inf-estado" >*Selecione seu estado</span>
				
				<select id="cidades" name="cidadesolicite"></select>
				<span class="inf-cidade">*Selecione sua cidade</span>
				<input type="hidden" name="actionsolicite" value="enviaFormsolicite" />                            
            	<input name="enviarsolicite" type="submit" value="Enviar" class="botao" />
	            <span class="errosolicite">
	                <?php
	                if($retornosolicite_php!=""){
	                echo $retornosolicite_php;
	                }
	                ?>
	            </span>
			</form>
		</div>
		<div class="prefiro">
			
			<form>
				<input type="text" name="nomeprefiro" placeholder="Nome">
				<input type="text" name="telefoneprefiro" placeholder="Telefone">
				<input type="text" name="horarioprefiro" placeholder="Melhor Horário">
				<input type="hidden" name="actionprefiro" value="enviaFormprefiro" />                            
            	<input name="enviarprefiro" type="submit" value="Enviar" class="botao" />
	            <span class="erroprefiro">
	                <?php
	                if($retornoprefiro_php!=""){
	                echo $retornoprefiro_php;
	                }
	                ?>
	            </span>
			</form>
		</div>
	</div>
	<div class="textos">
		<h2 id="processo" name="processo">NOSSO PROCESSO</h2>
	
			<p class="subtitulo">Confira nosso vídeo explicativo e entenda como alcançamos
		níveis de <b style="font-size: 20px;">economia de 20% até 60%</b> para nossos clientes.</p>
		<iframe class="video" class="col-md-7" width="600" height="338" src="https://www.youtube.com/embed/qgX0OOKM_rQ" frameborder="0" gesture="media" allowfullscreen></iframe>
			<div class="col-md-5">

			<h1>ECONOMIA INSPECIONADA</h1>
			<p>Para promover economia de água, há vários mecanismos que utilizamos. O primeiro passo é a identificação de todos os vazamentos dos apartamentos e áreas comuns do condomínio. Em seguida, inspecionamos, com sistema eletrônico, a rede de água que vai do hidrômetro até a caixa inferior, com o objetivo de detectar vazamentos, mesmo que estejam ocultos sobre o concreto.</p>

			<p>Em complemento, instalamos restritores de vazão nas torneiras dos apartamentos e áreas comuns do condomínio, deixando-as econômicas, porém confortáveis, evitando o desperdício. Além disso, instalamos também uma válvula bloqueadora de ar na rede do condomínio, caso isso seja possível.</p>
		</div>
		
			<p>Também é importante realizar a inspeção da caixa d’água inferior para verificar se há transbordamentos. Ajustamos, ainda, a vazão das descargas acopladas para uma posição mais econômica, eliminando os transbordamentos, além de verificarmos a pressão de água do prédio.Também é importante realizar a inspeção da caixa d’água inferior para verificar se há transbordamentos. Ajustamos, ainda, a vazão das descargas acopladas para uma posição mais econômica, eliminando os transbordamentos, além de verificarmos a pressão de água do prédio.</p>
			<h3>CONSCIENTIZAÇÃO</h3>
			<p>Além das medidas práticas, entendemos também que a informação e a comunicação a todos os moradores são parte do processo.
		Por isso, ao finalizar o processo, realizamos uma campanha de conscientização no local, reforçando a importância do uso consciente da água.</p>

	</div><br class="quebra">
	<div class="container">
		<h2 >COMO FUNCIONA</h2>
		<p class="subtitulo">Confira nosso passo a passo e entenda como alcançamos níveis de economia tão expressivos para nossos clientes.</p>
		<div class="como-funciona" >
			<ul>
				<div class="left" id="como-funciona" name="como-funciona">
					<li><span>1.</span> Inspeção completa de vazamentos, área comum e apartamentos</li>
				  	<li><span>2.</span> Vistoria eletrônica de vazamentos ocultos na rede pressurizada</li>
				  	<li><span>3.</span> Instalação de restritores de vazão ECOMAIS </li>
				  	<li><span>4.</span> Instalação de bloqueadora de ar.(Caso seja possível)</li>
				  	<li><span>5.</span> Teste de vazamento no reservatório inferior.</li>
			  	</div>
			  	<div class="right">
				  	
				  	<li><span>6.</span> Teste de vazamento no reservatório superior.</li>
				  	<li><span>7.</span> Ajuste de vazão e eliminação de transbordamentos nas descargas</li>
				  	<li><span>8.</span> Campanha de conscientização do uso racional da água.</li>
				  	<li><span>9.</span> Relátorio técnico da situação hidráulica atual, e ações propostas.</li>
			  	</div>
			</ul>
			<a href="#contato" class="chamada scroll">QUERO ECONOMIZAR também!</a>
		</div>
		<div class="atuacao">
			<h2>ÁREAS DE ATUAÇÃO</h2>
			<p class="subtitulo">É possível economizar água em residências, 
condomínios e estabelecimentos diversos.</p>
			<div class="atuacao-itens">
				<div class="item">
					<img src="images/sprytes.jpg">
					<h4>Condomínios Residênciais</h4>
					<p>+1.000 atendidos</p>
				</div>
				<div class="item">
					<img src="images/sprytes.jpg">
					<h4>Condomínínios Empresáriais</h4>
					<p>+100 atendidos</p>
				</div>
				<div class="item">
					<img src="images/sprytes.jpg">
					<h4>Hotéis / Motéis</h4>
					<p>+50 atendidos</p>
				</div>
				<div class="item">
					<img src="images/sprytes.jpg">
					<h4>Colégios / Creches</h4>
					<p>+20 atendidos</p>
				</div>
				<div class="item">
					<img src="images/sprytes.jpg">
					<h4>Faculdades</h4>
					<p>+20 atendidos</p>
				</div>
				<div class="item">
					<img src="images/sprytes.jpg">
					<h4>Hospitais / Clínicas</h4>
					<p>+100 atendidos</p>
				</div>
				<div class="item">
					<img src="images/sprytes.jpg">
					<h4>Indústrias</h4>
					<p>+20 atendidos</p>
				</div>
				<div class="item">
					<img src="images/sprytes.jpg">
					<h4>Residênciais</h4>
					<p>+50.000 atendidos</p>
				</div>

			</div>
			</div>
			<p class="deslize"><< Deslize para ver mais >></p>
			<div class="container">
				<h2><span>MOTIVOS PARA</span> ECONOMIZAR ÁGUA</h2>
				<p class="subtitulo">Aqui você confere os valores economizados a cada conta,
antes e depois do processo aplicado pelo <b>Grupo Mais Economia.</b></p>
				<div class="motivos">
				<div class="motivo">
					<div class="img">
						<img src="images/sprytes.jpg">
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="title">
						<h4>Ecológico e Sustentavel</h4>
						<p>Sistema de negócios que protege o meio ambiente, economizando água, o bem mais precioso da terra.</p>
					</div>
				</div>
				<div class="motivo">
					<div class="img">
						<img src="images/sprytes.jpg">
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="title">
						<h4>Sem Custos</h4>
						<p>O cliente não paga pela aplicação dos produtos e serviços.</p>
					</div>
				</div>
				<div class="motivo">
					<div class="img">
						<img src="images/sprytes.jpg">
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="title">
					<h4>Economia Comprovada</h4>
					<p>Os mecanismos adotados reduzem consideravelmente o consumo de água e, consequentemente, diminuem os gastos.</p>
					</div>
				</div>
				<div class="motivo">
					<div class="img">
						<img src="images/sprytes.jpg">
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="title">
					<h4>Mais Dinheiro no seu Bolso</h4>
					<p>Qualquer pessoa gosta de ter dinheiro sobrando. A quantia economizada com a redução no uso da água pode ser aplicada em outras finalidades.</p>
					</div>
				</div>
				<div class="motivo">
					<div class="img">
						<img src="images/sprytes.jpg">
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="title">
					<h4>Sucesso no seu Estabelecimento</h4>
					<p>Além das residências e condomínios, o dinheiro economizado também pode ser investido em outras áreas de seu estabelecimento, melhorando os seus negócios.</p>
					</div>
				</div>
				<div class="motivo">
					<div class="img">
						<img src="images/sprytes.jpg">
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="title">
					<h4>Profissionais Experientes</h4>
					<p>O Grupo Mais Economia conta com equipes de profissionais qualificados, com todo o conhecimento necessário para implementar ações de economia de água.</p>
					</div>
				</div>
				<div class="motivo">
					<div class="img">
						<img src="images/sprytes.jpg">
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="title">
					<h4>Tecnologia Avançada</h4>
					<p>Contamos, ainda, com equipamentos eletrônicos modernos na detecção de vazamentos, infiltrações e outros problemas que possam estar causando o desperdício de água.</p>
					</div>
				</div>
				<div class="motivo">
					<div class="img">
						<img src="images/sprytes.jpg">
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="title">
					<h4>Fim do Desperdício</h4>
					<p>As ações do Grupo Mais Economia visam não só à redução do consumo de água, mas também ao fim do desperdício, colaborando com o uso mais racional do recurso.</p>
					</div>
				</div>
				<div class="motivo">
					<div class="img">
						<img src="images/sprytes.jpg">
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="title">
					<h4>Preservação de Mananciais</h4>
					<p>A redução no consumo de água ajuda a preservar as nascentes, garantindo um uso sustentável de água.</p>
					</div>
				</div>
				<div class="motivo">
					<div class="img">
						<img src="images/sprytes.jpg">
						<div></div>
						<div></div>
						<div></div>
					</div>
					<div class="title">
					<h4>Gerações Futuras</h4>
					<p>Preservar a água é contribuir com o futuro do planeta e das próximas gerações que nele viverão. Para isso, no entanto, é preciso começar a economizar agora.</p>
					</div>
				</div>
				</div>
			</div><p class="deslize"><< Deslize para ver mais >></p>
			<div class="resultados" >
				<h2 >NOSSOS RESULTADOS</h2>
				<p class="subtitulo">Aqui você confere os valores economizados a cada conta,
antes e depois do processo aplicado pelo <b>Grupo Mais Economia.</b></p>
				<div class="carrosel-resultados" id="nossos-resultados" name="nossos-resultados">
					<div class="box-resultados">
						<div class="gota">49% <span>de economia</span></div>
						<h4>Máximo Club Residence</h4>
						<p>Projeção Anual de Economia<span>R$ 122.171,40</span></p>
						<!--<p>Valor da conta em 12/14:<span><sup>R$ 61.762,32</sup></span></span></p>
						<p>Valor da conta em 12/15:<span>R$ 31.762,32</span></p>-->
					</div>
					<div class="box-resultados">
						<div class="gota">40% <span>de economia</span></div>
						<h4>Grande Hotel da Barra</h4>
						<p>Projeção Anual de Economia<span>R$ 110.992,00</span></p>
						<!--<p>Valor da conta em 12/14:<span><sup>R$ 61.762,32</sup></span></span></p>
						<p>Valor da conta em 12/15:<span>R$ 31.762,32</span></p>-->
					</div>
					<div class="box-resultados">
						<div class="gota">54% <span>de economia</span></div>
						<h4>Edifício Ícone</h4>
						<p>Projeção Anual de Economia<span>R$ 40.905,00</span></p>
						<!--<p>Valor da conta em 12/14:<span><sup>R$ 61.762,32</sup></span></span></p>
						<p>Valor da conta em 12/15:<span>R$ 31.762,32</span></p>-->
					</div>
					<div class="box-resultados">
						<div class="gota">32% <span>de economia</span></div>
						<h4>Condomínio da Barra</h4>
						<p>Projeção Anual de Economia<span>R$ 67.244,64</span></p>
						<!--<p>Valor da conta em 12/14:<span><sup>R$ 61.762,32</sup></span></span></p>
						<p>Valor da conta em 12/15:<span>R$ 31.762,32</span></p>-->
					</div>
					<div class="box-resultados">
						<div class="gota">25% <span>de economia</span></div>
						<h4>Edifício Verde Mar II</h4>
						<p>Projeção Anual de Economia<span>R$ 33.150,48</span></p>
						<!--<p>Valor da conta em 12/14:<span><sup>R$ 61.762,32</sup></span></span></p>
						<p>Valor da conta em 12/15:<span>R$ 31.762,32</span></p>-->
					</div>
					<div class="box-resultados">
						<div class="gota">29% <span>de economia</span></div>
						<h4>Cond. Mansão Muniz Barreto</h4>
						<p>Projeção Anual de Economia<span>R$ 61.453,08</span></p>
						<!--<p>Valor da conta em 12/14:<span><sup>R$ 61.762,32</sup></span></span></p>
						<p>Valor da conta em 12/15:<span>R$ 31.762,32</span></p>-->
					</div>
					<div class="box-resultados">
						<div class="gota">33% <span>de economia</span></div>
						<h4>Cond Liz Empresarial</h4>
						<p>Projeção Anual de Economia<span>R$ 24.992,88</span></p>
						<!--<p>Valor da conta em 12/14:<span><sup>R$ 61.762,32</sup></span></span></p>
						<p>Valor da conta em 12/15:<span>R$ 31.762,32</span></p>-->
					</div>
					<div class="box-resultados">
						<div class="gota">45% <span>de economia</span></div>
						<h4>Ed. Vila Margarida</h4>
						<p>Projeção Anual de Economia<span>R$ 61.762,32</span></p>
						<!--<p>Valor da conta em 12/14:<span><sup>R$ 61.762,32</sup></span></span></p>
						<p>Valor da conta em 12/15:<span>R$ 31.762,32</span></p>-->
					</div>

				</div>
				<p class="deslize"><< Deslize para ver mais >></p>
				<a href="#contato" class="chamada scroll">QUERO ECONOMIZAR também!</a>
			</div>

		</div>	
	</div>

</div>
	<div class="depoimentos" >
		<div class="container">
			<h2 >O QUE DIZEM SOBRE NÓS</h2>
			<p class="subtitulo">Conheça os depoimentos de quem já conhece nossos serviços.</p>
			<div class="carrosel-depoimentos" id="depoimentos" name="depoimentos">
				<div class="box-depoimentos">
					<p>"Fiz o serviço de economia de água com o Grupo Mais Economia e a conta do meu condomínio caiu 43%. E o melhor é que eu não precisei pagar pelo serviço. Só um maluco não fecharia contrato com eles." </p>
					<h5>André</h5>
					<p class="nome">Síndico</p>
				</div>
				<div class="box-depoimentos">
					<p>"Fizemos o serviço de economia de água em 3 escolas de idioma da nossa rede e já estamos a vários meses economizando água e dinheiro graças ao Grupo Mais Economia."</p>
					<h5>Sérgio</h5>
					<p class="nome">Diretor de escola</p>
				</div>
					<div class="box-depoimentos">
					<p>"Fechamos o contrato de economia de água no nosso Hotel com o Grupo Mais Economia e estamos muito satisfeitos, alem da redução na conta de água posso dizer que essa é uma empresa séria, confiável e idônea, todos os profissionais são atenciosos e sabem o que estão fazendo. Eu recomendo!"</p>
					<h5>Ubiratã  </h5>
					<p class="nome">Diretor de operações de Hotel</p>
				</div>
								<div class="box-depoimentos">
					<p>"Fiz o serviço de economia de água com o Grupo Mais Economia e a conta do meu condomínio caiu 43%. E o melhor é que eu não precisei pagar pelo serviço. Só um maluco não fecharia contrato com eles." </p>
					<h5>André</h5>
					<p class="nome">Síndico</p>
				</div>
				<div class="box-depoimentos">
					<p>"Fizemos o serviço de economia de água em 3 escolas de idioma da nossa rede e já estamos a vários meses economizando água e dinheiro graças ao Grupo Mais Economia."</p>
					<h5>Sérgio</h5>
					<p class="nome">Diretor de escola</p>
				</div>
					<div class="box-depoimentos">
					<p>"Fechamos o contrato de economia de água no nosso Hotel com o Grupo Mais Economia e estamos muito satisfeitos, alem da redução na conta de água posso dizer que essa é uma empresa séria, confiável e idônea, todos os profissionais são atenciosos e sabem o que estão fazendo. Eu recomendo!"</p>
					<h5>Ubiratã  </h5>
					<p class="nome">Diretor de operações de Hotel</p>
				</div>

			</div>
		<p class="deslize"><< Deslize para ver mais >></p><br class="quebra">
		<a href="#contato" class="chamada scroll">QUERO ECONOMIZAR também!</a>

		</div>
	</div>
	<div class="fundo-azul" style="background: #baedfc;">
	<div class="container" >
		<div class="contato" >
			<h2 id="contato" name="contato">ENTRE EM CONTATO</h2>
			<p class="subtitulo">Entre em contato através do formulário abaixo para tirar suas dúvidas ou solicitar um orçamento ou visita técnica.
Se preferir, entre em contato através do telefone ou whatsapp.</p>
			<div class="telefones">
				<p><a href="tel:1122684589"><i class="fa fa-phone" aria-hidden="true"></i> 11 2268.4589</a></p>
				<p><a href="https://api.whatsapp.com/send?phone=5511991075421"><i class="fa fa-whatsapp" aria-hidden="true"></i>11 99107.5421</a></p>
			</div>
    		<form action="" method="post" id="form">

    		<div>
            	<label>Nome:</label>
            	<input name="nome"  type="text" class="nome" value="" />
           </div>
			<div>
            	<label>Telefone:</label>
            	<input name="telefone" class="telefone" type="text" value="" />
			</div>
			<div>
            	<label>E-mail:</label>
            	<input name="email" type="text" value="" />
			</div>
 
			<div>
            	<label>Endereço:</label>
            	<input name="endereco" type="text" value="" />
			</div>
			<div>
            	<label>Número:</label>
            	<input name="numero" type="text" value="" />
			</div>
			<div>
            	<label>Tipo de Empreendimento:</label>
            	<select name="tipo">
            		<option value="" selected="selected">Selecione...</option>           		
            		<option value="Condomínios Residências">Condomínios Residências</option>
            		<option value="Condomínios Empresariais">Condomínios Empresariais</option>
            		<option value="Hoteis/Motéis">Hoteis/Motéis</option>
            		<option value="Colégios/Creches">Colégios/Creches</option>
            		<option value="Faculdades">Faculdades</option>
            		<option value="Hospitais/Clinicas">Hospitais/Clinicas</option>
            		<option value="Industrias">Industrias</option>
            		<option value="Residências">Residências</option>
            	</select>
			</div>
  
            <label>Mensagem:</label>
            <textarea name="mensagem" cols="" rows=""></textarea>
            <br class="quebra" /><br />
            <input type="hidden" name="action" value="enviaForm" />                            
            <input name="enviar" type="submit" value="Enviar" class="botao" />

            <span class="erro2">

                <?php

                if($retorno_php!=""){

                echo $retorno_php;

                }

                ?>

            </span>

        	</form>
		</div>

		<h2>LOCALIZAÇÃO</h2>
			<p class="subtitulo">No mapa abaixo você confere as regiões atendidas lorem ipsum sit dolor amet
	no mapa abaixo você confere as regiões atendidas.</p>
			<p class="endereco">Rua Turiassu, 127 - Conj. 13
	Perdizes | São Paulo - SP</p>
	</div>
</div>



<div id="map">

</div>


<footer>
	<div class="container">
		<div class="col-md-4">
			<img src="images/logo-rodape.png" class="logo-rodape">
			<p>O Grupo Mais Economia é uma rede de franquias de serviços de economia de água, aplicando tecnologias de redução de consumo em diferentes tipos de empreendimentos.</p>
		</div>
		<div class="col-md-4">
			<p class="telefone-rodape"><a href="tel:1122684589"><img src="images/icone-telefone.png">11 2268.4589</a><span>Seg. a Sex. - 8 às 17h</span></p>
			<p class="email-rodape"><img src="images/icone-email.png"><a href="mailto:contato@grupomaiseconomia.com">contato@grupomaiseconomia.com</a></p>
			<h5>Institucional</h5>
			<ul>
				<li><i class="fa fa-play" aria-hidden="true"></i><a href="#como-funciona" class="scroll">Como funciona</a></li>
				<li><i class="fa fa-play" aria-hidden="true"></i><a href="#nossos-resultados" class="scroll">Antes e Depois</a></li>
				<li><i class="fa fa-play" aria-hidden="true"></i><a href="#depoimentos" class="scroll">Depoimentos</a></li>
				<li><i class="fa fa-play" aria-hidden="true"></i><a href="#contato" class="scroll">Contato</a></li>
			</ul>
		</div>
		<div class="col-md-4">
			<img src="images/img-rodape.png" class="img-rodape">
			<h5>Redes Sociais</h5>
			<a href="https://www.facebook.com/grupomaiseconomia/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
			<a href="https://www.linkedin.com/company/grupomaiseconomia/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
			<h5>Assine nossa Newsletter</h5>
			<p>Preencha o campo abaixo e saiba
mais sobre como economizar água.</p>
			<form action="" method="post" id="form">
            <input name="news" placeholder="Insira seu E-mail"  type="text" class="nome" value="" />
            <input type="hidden" name="actionnews" value="enviaFormnews" />                            
            <input name="enviarnews" type="submit" value="" class="botao" />

            <span class="erronews">

                <?php

                if($retornonews_php!=""){

                echo $retornonews_php;

                }

                ?>

            </span>

        </form>
		</div><br class="quebra">
		<div class="corte">
			<p>Copyright © 2018 Grupo Mais Economia.</p>
			<span class="assinatura">
            	<a href="https://www.3xceler.com.br/criacao-de-sites" title="Criação de Sites: Agência 3xceler" class="pull-left" target="_blank" style="color:#fff;">Criação de sites</a> : 
            	<img src="images/logo-3xceler.png" alt="Logo Agência 3xceler" title="Logo Agência 3xceler">
   		 	</span>
		</div>
	</div>

</footer>
<div class="footer-fixo-mobile">
	<a href="#" class="abrir-modal"><i class="fa fa-phone" aria-hidden="true"></i>Nós te ligamos!</a>
	<a href="https://api.whatsapp.com/send?phone=5511991075421"><i class="fa fa-whatsapp" aria-hidden="true"></i>Whatsapp</a>
</div>


<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbdbC7L6WH9DUFrzWOeL6ET3kPX0rf9cs&callback=initMap">
    //MAPA DO GOOGLE//
 </script>
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
    //MAPA DO GOOGLE//

    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 16,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(-23.5345914, -46.6646441), // New York

            // How you would like to style the map. 
            // This is where you would paste any style found on Snazzy Maps.
            styles: [
    {
        "stylers": [
            {
                "hue": "#007fff"
            },
            {
                "saturation": 89
            }
        ]
    },
    {
        "featureType": "water",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "administrative.country",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    }
]
        };

        // Get the HTML DOM element that will contain your map 
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
          var image = 'https://www.economizacondominio.com.br/images/marcador.png';
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(-23.5345914, -46.6646441),
            map: map,
            icon: image
        });
        
    }
</script>












<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MMLWGGD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<script type="text/javascript" src="includes/js/jquery.js"></script>
<script type="text/javascript" src="includes/js/modal.js"></script>
<script type="text/javascript" src="includes/js/home.js"></script>
<script type="text/javascript" src="includes/js/news.js"></script>
<script type="text/javascript" src="includes/js/prefiro.js"></script>
<script type="text/javascript" src="includes/js/solicite.js"></script>
  

<script src="includes/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="includes/slick/slick.min.js"></script>
<script type="text/javascript" src="includes/js/efeitos.js"></script>
<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?5RwPnxVmFDOTMd10m3iuspIjPsUBti75";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->

</body>




</html>