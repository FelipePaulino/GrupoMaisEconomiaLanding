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
<meta name="google-site-verification" content="k2zQo9fGTglNopPocCgOU59yQOA8ohZSAEPjpFYMjNs" />
<meta name="viewport" content="width=device-width, localtreechildrenuser-scalable=no"> 
<meta name="robots" content="noindex, follow">

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
			<a href="index.php#como-funciona">Como Funciona<span></span></a>
			<a href="index.php#nossos-resultados">Nossos Resultados<span></span></a>
			<a href="index.php#depoimentos">Depoimentos<span></span></a>
			<a href="index.php#contato">Contato<span></span></a>
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
	<div class="banner banner1" style="height: 800px;">
		<div class="container">
			<h2 style="margin-top: 150px; margin-bottom: 50px;">Obrigado pelo <br> contato</h2>
			<p>Volte para a página inicial</p>
			<a href="index.php" alt="" title="" class="" style="margin-top: 0;">Clicando aqui!</a>
		</div>
	</div>
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
          var image = 'https://serv3xceler.com.br/grupo/marcador.png';
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(-23.5345914, -46.6646441),
            map: map,
            icon: image
        });
        
    }
</script>













</body>
<script type="text/javascript" src="includes/js/jquery.js"></script>
<script type="text/javascript" src="includes/js/modal.js"></script>
<script type="text/javascript" src="includes/js/home.js"></script>
<script type="text/javascript" src="includes/js/news.js"></script>
<script type="text/javascript" src="includes/js/prefiro.js"></script>
<script type="text/javascript" src="includes/js/solicite.js"></script>
     

<script src="includes/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="includes/slick/slick.min.js"></script>
<script type="text/javascript" src="includes/js/efeitos.js"></script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MMLWGGD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


</html>