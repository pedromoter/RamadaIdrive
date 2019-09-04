
<!doctype html>
<html>



<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="global.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
	
body{background-color:#005ca8;margin:0}.container{z-index: 10001; position:absolute;width:100%;height:100%;overflow:hidden;background-color: #005ca8;}.hide{height:100%;width:150px;z-index:2}.circle,.circle-container{position:absolute;height:75px;width:150px;top:40%;left: 50%}.circle{border:3px solid #fff;border-radius:50%/100% 100% 0 0;border-bottom:none;transform-origin:0 50%;transform:translate(-50%,-50%);animation:magic 1.8s ease infinite}@keyframes magic{0%{transform:rotate(-170deg) translate(-50%,-50%)}50%{transform:rotate(0) translate(-50%,-50%)}100%{transform:rotate(180deg) translate(-50%,-50%)}}.circle-container{left:50%;transform-origin:0 50%;transform:translate(-50%,-50%);animation:power 1.8s ease-out infinite}.hidden{display:none;}
</style>
<style>

	</style>
	
	
<div id="loader" class='container'>
    <div class='circle'></div>
  </div>
</div>

<title>Guia Local Channel</title>
	<script src="js/player.js"></script>
</head>
	
<script src="jq/jquery.min.js"></script>
<body>
<script>
	$( window ).load(function() {
$("#loader").addClass('hidden');
		console.log("Load COmpleTe@!")

});
	</script>
	<menu class="" id="menu"> 
	<menulogo>
	<img id="logo" src="logo.png" class="logo">
	</menulogo>

	<ul id="ls">
		<li><a href="#prog"><div class="btn">Programação</div></a></li>
		<li><a href="#gd"><div class="btn">Guia de Ofertas</div></a></li>
		<li><a href="#on"><div class="btn">Live</div></a></li>
		<li><a href="#cob"><div class="btn">Cobertura</div></a></li>
		<li><a href="#an"><div class="btn">Anuncie</div></a></li>
		
		<li><a href="#con"><div class="btn">Contato</div></a></li>
		</ul>
	
	
	</menu>

	<div class="card1">
			<div class="title">Olá</div>
	<div class="card" id="1">
		<div class="title2" style="margin-bottom: 60px;">
		
		<img src="anuncio.png" style="max-width: 400px; margin-left: auto; margin-right: auto; display: block;margin-bottom: 15px;width: 100%;">
Somos o único canal de Tv 100% turístico em PORTUGUÊS e ESPANHOL, atualmente o maior provedor de
conteúdo  turístico nas TVs de hotéis em Orlando e Miami. Desde 2009 nosso trabalho tem sido informar ao turísta as opções de consumo e entretenimento, tornando assim sua viagem muito mais prática e divertida.
		</div>
	
	</div>
	</div>
		
		<a name="prog">
		<div class="">
			<div class="title">Programação</div>
			
	<div class="card"  >
		<div class="title2" style="margin-bottom: 20px;">
		
			<div style="margin-bottom: 20px;">Nosso conteúdo é dividido em seguimentos que são estratégicamente elaborados para informar as mais diversas opções em Orlando e Miami.</div>
		
		<img src="pg2.png" style="max-width: 400px; width: 100%" >
		<img src="pg3.png" style="max-width: 400px; width: 100%" >
			</div>
		
		
		
		</div>
	
	</div>
	</div>
	<a name="gd">
	<div class="">
			<div class="title">Guia de Ofertas</div>
	<div class="card"  >
		<div class="title2">
		<div class="lct" style="font-size: 30pt;margin-top: 25px;margin-bottom:25px;">Baixe nosso aplicativo e tenha acesso à diversas ofertas e vantagens exclusivas!</div>	  
		
		
		
			<div style="margin-bottom: 40px;">
				<img src="ios.png" style="max-width: 250px;">
				<img src="icons/Guia Local - Logotipo PDF@0,25x.png" style="max-width: 100px; margin-left: 25px; margin-right: 25px;border-radius: 15px;">
				<img src="gplay.png" style="max-width: 250px;">
			</div>
		
		
		
				</div>
	
	</div>
	</div>
	<a name="on">
	<div class="">
			<div class="title">Live</div>
	<div class="card"  >
		<div class="title2">
			<div style="margin-bottom: 40px;">Você pode assistir nossa programação nas TVs dos Hóteis em Orlando ou Miami gratuítamente, em nosso aplicativo por Live Streaming para celuales tablets e TVs, e também por aqui.</div>
		
		
			<div id="myElement" class="centalign" style="margin-top: 40px;height: 500px; margin-left: auto; margin-right: auto"><p align="center">Loading...</p></div>
		
<script type="text/javaScript">
var playerInstance = jwplayer("myElement");
playerInstance.setup({
    file: "https://pedromoter.ddns.net/stream/f.m3u8",type:'hls',height:600,
    
});
	
</script>
		</div>
		</div>
		</div>
	<a name="cob">
	<div class="">
	<div class="title">Cobertura</div>

	<div class="card" >
		
<div id="map" class="map" style=""></div>
  <script  src="//maps.googleapis.com/maps/api/js?v=3&key=AIzaSyA9e4pfDupOSXl2qaofBk0LvR8lEz9CTf4&sensor=false&"
        type="text/javascript"></script>
    <script>
 function initialize() {
	 
      var map = new google.maps.Map(
        document.getElementById('map'), {
          center: new google.maps.LatLng(27.0084922, -80.733950),
          zoom: 7,
scrollwheel: false,streetViewControl: false,styles: [{ featureType: "poi", elementType: "labels", stylers: [{ visibility: "off" }]}]
      })
	 
	 var data = [{"title":"rosen inn at pointe orlando","lat":"28.4338","long":"-81.4729"}, {"title":"hampton inn orlando near universal blvd \/INTERNATIONAL DR","lat":"28.4593","long":"-81.4593"}, {"title":"doubletree by hilton hotel at the entrance to universal orlando","lat":"28.4791","long":"-81.457"}, {"title":"comfort suites","lat":"28.4814","long":"-81.453"}, {"title":"holiday inn express & suites nearest universal orlando","lat":"28.4821","long":"-81.4547"}, {"title":"quality inn & suites universal studios area","lat":"28.4863","long":"-81.4565"}, {"title":"wingate by wyndham convention ctr closest universal orlando","lat":"28.4863","long":"-81.4572"}, {"title":"clarion inn and suites","lat":"28.4764","long":"-81.4544"}, {"title":"best western orlando gateway hotel","lat":"28.4578","long":"-81.4633"}, {"title":"grand hotel orlando","lat":"28.4513","long":"-81.4648"}, {"title":"the enclave hotel & suites","lat":"28.4566","long":"-81.4681"}, {"title":"comfort inn and suites universal - convention center","lat":"28.4533","long":"-81.4676"}, {"title":"quality suites near orange county convention center","lat":"28.454","long":"-81.4689"}, {"title":"crowne plaza orlando-downtown","lat":"28.5522","long":"-81.3836"}, {"title":"calypso cay resort","lat":"28.3389","long":"-81.4816"}, {"title":"the inn at calypso cay hotel orlando","lat":"28.3385","long":"-81.4842"}, {"title":"rodeway inn maingate","lat":"28.3335","long":"-81.5245"}, {"title":"claremont kissimmee hotel","lat":"28.3351","long":"-81.5253"}, {"title":"red lion hotel orlando-kissimmee maingate","lat":"28.3318","long":"-81.5834"}, {"title":"park inn by radisson orlando - celebration","lat":"28.3371","long":"-81.5874"}, {"title":"quality inn & suites by the parks","lat":"28.3342","long":"-81.5922"}, {"title":"maingate lakeside resort","lat":"28.3412","long":"-81.5952"}, {"title":"destiny palms hotel","lat":"28.3452","long":"-81.6287"}, {"title":"clarion suites maingate","lat":"28.3425","long":"-81.6017"}, {"title":"quality inn and suites by the lake","lat":"28.3425","long":"-81.6017"}, {"title":"legacy vacation club lake buena vista","lat":"28.3872","long":"-81.5006"}, {"title":"clarion inn lake buena vista","lat":"28.387","long":"-81.498"}, {"title":"quality suites","lat":"28.4302","long":"-81.4768"}, {"title":"holiday inn resort orlando-lake buena vista","lat":"28.3721","long":"-81.5024"}, {"title":"radisson hotel orlando-lake buena vista","lat":"28.38","long":"-81.504"}, {"title":"fairfield inn & suites orlando lake buena vista","lat":"28.3879","long":"-81.5052"}, {"title":"blue tree resort","lat":"28.3882","long":"-81.5022"}, {"title":"westgate blue tree resort","lat":"28.3885","long":"-81.5033"}, {"title":"days inn orlando international drive","lat":"28.462","long":"-81.4608"}, {"title":"la quinta inn orlando international drive north","lat":"28.4637","long":"-81.4596"}, {"title":"super 8","lat":"28.464","long":"-81.4612"}, {"title":"homewood suites by hilton","lat":"28.4657","long":"-81.4623"}, {"title":"hilton garden inn orlando international drive north","lat":"28.4657","long":"-81.461"}, {"title":"orlando continental plaza hotel","lat":"28.4629","long":"-81.4665"}, {"title":"monumental movieland hotel","lat":"28.4617","long":"-81.467"}, {"title":"rosen inn","lat":"28.4607","long":"-81.4692"}, {"title":"floridian express international drive","lat":"28.4614","long":"-81.4681"}, {"title":"international palms resort & conference center orlando","lat":"28.4588","long":"-81.4706"}, {"title":"the m hotel i-drive near universal studios","lat":"28.4576","long":"-81.4719"}, {"title":"econo lodge international drive","lat":"28.4563","long":"-81.473"}, {"title":"heart of i-drive hotel by universal studios","lat":"28.4563","long":"-81.4716"}, {"title":"hampton inn & suites orlando intl dr n","lat":"28.4531","long":"-81.4733"}, {"title":"rosen inn international","lat":"28.4522","long":"-81.4723"}, {"title":"drury inn & suites orlando","lat":"28.4512","long":"-81.477"}, {"title":"wyndham orlando resort international drive","lat":"28.4486","long":"-81.4683"}, {"title":"Quality Inn at International Drive Orlando","lat":"28.4455","long":"-81.4733"}, {"title":"ramada orlando near convention center","lat":"28.4446","long":"-81.4736"}, {"title":"ramada plaza resort and suites orlando international drive","lat":"28.4577","long":"-81.4684"}, {"title":"orlando metropolitan resort","lat":"28.4424","long":"-81.4722"}, {"title":"Allure Resort","lat":"28.4434","long":"-81.4722"}, {"title":"courtyard orlando international drive\/convention center","lat":"28.4415","long":"-81.4731"}, {"title":"avanti resort orlando","lat":"28.4392","long":"-81.472"}, {"title":"la quinta inn & suites orlando convention center","lat":"28.4411","long":"-81.4686"}, {"title":"hyatt place orlando\/convention center","lat":"28.4383","long":"-81.4683"}, {"title":"residence inn orlando convention center","lat":"28.4378","long":"-81.4688"}, {"title":"days inn orlando convention center\/international drive","lat":"28.4229","long":"-81.4612"}, {"title":"clarion inn & suites at international drive","lat":"28.4225","long":"-81.4625"}, {"title":"red roof inn orlando convention center","lat":"28.4227","long":"-81.4631"}, {"title":"hawthorn suites","lat":"28.4197","long":"-81.4655"}, {"title":"parc corniche condominium suite hotel","lat":"28.3994","long":"-81.4636"}, {"title":"monumental hotel orlando","lat":"28.3901","long":"-81.4728"}, {"title":"days inn orlando near millenia mall","lat":"28.5076","long":"-81.4161"}, {"title":"red roof inn orlando south - florida mall","lat":"28.4448","long":"-81.4028"}, {"title":"econo lodge inn & suites near florida mall","lat":"28.4386","long":"-81.4047"}, {"title":"baymont inn & suites florida mall","lat":"28.437","long":"-81.4049"}, {"title":"la quinta inn orlando universal","lat":"28.4813","long":"-81.4529"}, {"title":"regency hotel","lat":"25.7819","long":"-80.265"}, {"title":"the colony hotel","lat":"25.7775","long":"-80.1316"}, {"title":"comfort suites miami airport north","lat":"25.809","long":"-80.2751"}, {"title":"courtyard by marriott miami aventura mall","lat":"25.9532","long":"-80.144"}, {"title":"courtyard cadillac miami beach\/oceanfront","lat":"25.8121","long":"-80.1229"}, {"title":"courtyard by marriott miami coral gables","lat":"25.7539","long":"-80.2625"}, {"title":"courtyard by marriott miami downtown\/brickell area","lat":"25.7725","long":"-80.1903"}, {"title":"doubletree by hilton grand hotel biscayne bay","lat":"25.7916","long":"-80.1866"}, {"title":"fairfield inn & suites by marriott miami airport south","lat":"25.7827","long":"-80.2632"}, {"title":"hampton inn miami-airport west","lat":"25.8074","long":"-80.3257"}, {"title":"hampton inn miami dadeland","lat":"25.6941","long":"-80.307"}, {"title":"hampton inn ft. lauderdale airport north cruise port","lat":"26.093","long":"-80.1574"}, {"title":"hilton garden inn miami airport west","lat":"25.8079","long":"-80.3183"}, {"title":"holiday inn express miami airport doral area","lat":"25.8093","long":"-80.3337"}, {"title":"holiday inn express miami-arpt ctrl-miami springs","lat":"25.8084","long":"-80.279"}, {"title":"holiday inn miami-international airport","lat":"25.8092","long":"-80.2635"}, {"title":"holiday inn port of miami-downtown","lat":"25.7778","long":"-80.1888"}, {"title":"holiday inn miami west - airport area","lat":"25.8677","long":"-80.3241"}, {"title":"ramada plaza marco polo beach resort","lat":"25.9544","long":"-80.1198"}, {"title":"quality inn miami airport","lat":"25.8109","long":"-80.3227"}, {"title":"red roof plus+ miami airport","lat":"25.8051","long":"-80.2633"}, {"title":"suites on south beach","lat":"25.7847","long":"-80.1312"}, {"title":"the kent hotel","lat":"25.7824","long":"-80.1312"}, {"title":"miami beach intracoastal apartments by globe quarters*","lat":"25.932","long":"-80.1269"}, {"title":"best western plus hollywood\/aventura*","lat":"25.9859","long":"-80.1648"}, {"title":"staybridge suites ft. lauderdale-plantation*","lat":"26.1257","long":"-80.2615"}, {"title":"courtyard by marriott fort lauderdale plantation*","lat":"26.1133","long":"-80.2547"}, {"title":"intown suites*","lat":"26.1943","long":"-80.2588"}, {"title":"days inn miami airport north*","lat":"25.8083","long":"-80.275"}, {"title":"clarion hotel orlando international airport*","lat":"28.4527","long":"-81.3354"}, {"title":"the florida hotel & conference center*","lat":"28.4447","long":"-81.3956"}]; 
data.forEach(function(item){
	
	var t = item.title +"CATV:SPCTM"+ Math.random()
	var marker = new google.maps.Marker({
    position: new google.maps.LatLng(item.lat, item.long),
    title: t.toUpperCase()
});
	marker.setMap(map);	
})	 


					  
 }		
 $( document ).load(initialize());


</script>
		</div>
 			
				<div class="card">
	<div class="title2">
	
		<div>Através de nossa rede Guia Local Channel e também  distribuida via operadoras de tv a cabo possuímos uma extensa área de cobertura geográfica cobrindo centenas de hóteis nas cidades de Orlando e Miami, ultrapassando a marca de 30.000 quartos e alcançando um universo de mais de 5 milhões de turístas ano.</div>
	
	
	
		<div class="sbs">
		
<div class="tech-slideshow">
  <div class="mover-1"></div>
</div>
			
			</div>
		</div>
	</div>
	
		
		</div>

	</div>
	<a name="an">
	<div class="">
			<div class="title">Anuncie</div>
	<div class="card"  >
		<div class="title2">
		
		<div class="lct" style="font-size: 30pt;margin-bottom:15px;">Nós falamos a sua língua, Nossotros hablamos tu idioma.</div>
			
	Este é o nosso slogan e traduz perfeitamente nosso objetivo, que é levar aos hóspedes as informações de
maneira simples e direta para que conheça as dicas e ofertas em seu próprio idioma e assim se sinta
seguro em adquirir opções de lazer, entretenimento e consumo.
	Nosso canal de TV está direcionado para um segmento turístico muito forte na Flórida, confira aqui
alguns dados :
	
	<div>
		
		<div class="sbs" style="">
		<img src="anunc.png" style="width: 100%; max-width: 800px;margin-top:45px;">
			</div>
	
	
	
		<div class="lct" style="font-size: 30pt;margin-top: 25px;margin-bottom:25px;">Nosso alcance, seu resultado.</div>
	
		<div class="destaque"><strong>7 dias </strong> é a média de permanência dos turistas.</div>
		
		<div class="destaque"><strong>4 semanas </strong>por mês é o total do ciclo, 30.000 x 4 sem. = 120.000 quartos ocupados/mês</div>
		
		<div class="destaque"><strong>3.4 pessoas </strong>por família é a média por quarto, por semana</div>
		
		<div class="destaque"><strong>408.000 </strong>pessoas no mínimo são alcançadas mensalmente em nossa rede.</div>
		
		<div class="destaque"><strong>5.000.000 </strong>de turistas ao ano, em média.</div>
		
		<div class="lct" style="font-size: 30pt;margin-top: 25px;margin-bottom:25px;">Temos a solução completa para o seu negócio</div>
	
		<div class="destaquem"><div><sstrong style="alig">Orçamento limitado? </sstrong></div>Oferecemos preços compatíveis com a realidade do empresário, também somos, e sabemos que cada
centavo de seu orçamento deve ser honrado com resultado. Mais exposição, mais resultados!</div>
		
		<div class="destaquem"><div><sstrong style="alig">Não possui o comercial/vídeo?</sstrong></div>Nossa empresa oferece a solução com produções de vídeo por uma fração do custo tradicional, com
áudios em português e espanhol nativos, traduzidos, legendados com gravação e edição de vídeo em
formato hd, você escolhe!</div>
		
		
	
			
			<div class="form" style="margin-top: 35px;margin-bottom: 25px;">
			<form id="form" onsubmit="event.preventDefault();validate();">
				<div class="lct" style="font-size: 30pt; color: white;" id="qt">Quer anunciar?</div>
				<div id="qt2" class="lci" style="color: white; max-width: 100%;height: auto;">Preencha os campos para ser contactado por um de nossos representantes.</div>
			<div class="title" id="thk" style="display: none">Obrigado!</div> 
			<div id="thk2" style="display: none; color: white;">Você recebera um email em breve de um de nossos representantes com mais detalhes!</div>
				<input type="text" id="name" placeholder="Nome" required>
				<input type="email" id="email" placeholder="Email" required>
				<input type="text" id="num" placeholder="Telefone" required>
				<input type="submit" id="sub" placeholder="" value="Enviar" class="sub">
				
				<div class="error" id="error"> Um erro ocorreu, por favor tente novamente!</div>
</div>
				
				
			</form>
			
			
			</div>
			
			
			
			
			
			
		</div>
	
	</div>
	</div>
	
	<script>
		function validate(){
			$("#error").css("display","none");
			if(document.getElementById("name").value == ""){
				//css
				ocument.getElementById("name").css("color","crimson")
				return false;
			}else{}
			if(document.getElementById("email").value == ""){
				//css
				$("#email").css("color","crimson")
				return false;
			}else{
				
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById("email").value))  
  {  
     
  }  else{
	  //css
	  $("#email").css("color","crimson")
	  return false;
  }
				
			}
			
			function error(){
			
				$("#sub").css("display","")
		console.log("error called");
				//css error
				$("#error").css("display","block");
		}
			
		function complete(){
		
			$("#thk").css("display","block");
				$("#thk2").css("display","block");
				$("#sub").css("display","none");
				$("#error").css("display","none");
			$("#name").css("display","none");
			$("#email").css("display","none");
			$("#num").css("display","none");
			$("#qt").css("display","none");
			$("#qt2").css("display","none");
		}
			
			
			
			
			
			$("#sub").css("display","none")
			//send xhr
			var xhr = new XMLHttpRequest()
			xhr.timeout = 20000;
			xhr.open("POST","email.php");
			var data = new FormData();
			var name = $("#name").val()
			var email = $("#email").val()
			var num = $("#num").val()
			data.append("name",name)
			data.append("email",email);
			data.append("num",num);
			console.log(data);
			xhr.send(data)
			xhr.addEventListener("load",complete,false)
			xhr.addEventListener("error",error)
			xhr.addEventListener("timeout",error)
		console.log("#1")
			
		
		
		
			
		
		}
		
		
		
</script>
	

	
	
	<a name="con">
	<div class="">
			<div class="title">Contato</div>
	<div class="card" id="1">
		<div class="title2">
			<div>Telefone: (407)-374-7684</div>
			<div>Email: <a style="text-decoration: underline; color: blue;"href="mailto:orlando@guialocalchannel.tv">orlando@guialocalchannel.tv</a></div>
			<div>11795 Barletta Drive 32827  Orlando FL</div>
		</div>
		<div>
	
	</div>
	
	</div>

	<div style="text-align: center">
		<img src="fb.png" style="max-width: 48px;">
			
		<img src="ig.png" style="max-width: 48px;">
			
		<img src="yt.png" style="max-width: 48px;">
			
		</div>
<div style="text-align: center;color: white;font-family: ak;">
©2017/2018 Guia Local Channel LLC. Todos os Direitos Reservados 
		</div>
		<div style="text-align: center;color: white;font-family: ak;">
PHWEBGROUP - phwebgroup@gmail.com
		</div>
<script>
	var minh = $("#1").offset().top ;
	$(window).scroll(function(){console.log("scroll");
								
if($(document).scrollTop()>minh){
	$("#menu").addClass('mini');
		$("#logo").addClass('logomini');
	$("#ls").addClass('ulh');
}else{
	$("#menu").removeClass('mini');
		$("#logo").removeClass('logomini');
	$("#ls").removeClass('ulh');
}
							   })
	</script>
	<script>
		// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top-200
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
</script>

		

</body>
</html>