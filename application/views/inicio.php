<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<script type="text/javascript">

	$(document).ready(function(){
			//$('#funcionario_cpf').mask('000.000.000-00',{placeholder:'999.999.999-99'});
			$('#telefone').mask('(99) 99999-9999',{placeholder:'(XX) XXXXX-XXXX'}); 

		});
	function EnviarDadosPorEmail(){
		let nome = $('#nome').val();
		let email = $('#email').val();
		let telefone = $('#telefone').val().replace('(', '').replace(')', '').replace(' ', '').replace('-', '');
		let mensagem = $('#mensagem').val();
		console.log(telefone);
		if(nome=="" || nome.length < 5){
			alert( "Preencha o Nome corretamente!" );
		}else if (email=="" || email.indexOf('@')== -1 || email.indexOf('.')==-1){
			alert( "Prencha o E-mail corretamente!" );
		}else if(telefone == '' || telefone.length < 11){
			alert( "Prencha o telefone corretamente!" );
		} else if (mensagem=="" || mensagem.length < 5){
			alert( "Escreva uma mensagem!" );
		}else {
			$('#enviado').html('');
			$('#enviado').append('<div class="alert alert-success alert-dismissible fade show" role="alert" id="enviado"><strong>Mensagem Enviada!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>');
			setTimeout(function () {  
				$('#enviado').html('');
			}, 8 * 1000);
			$.ajax({
				url: "<?php echo base_url()?>welcome/EnviarDadosPorEmail",
				dataType: 'json',
				type: 'post',
				data: {nome:nome,email:email,telefone:telefone,mensagem:mensagem},
				cache:false,
				success: function(data){
				},
				error: function(d){

					return false;
				}
			});
		}
		
	}
</script>


<!-- Facebook Pixel Code -->
<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
			'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '1250502708667192');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=1250502708667192&ev=PageView&noscript=1"
		/></noscript>
		<!-- End Facebook Pixel Code -->


		<nav class="navbar navbar-expand-lg site-navbar navbar-light bg-light" id="pb-navbar">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample09">
					<ul class="navbar-nav">
						<li class="nav-item"><a class="nav-link" href="#inicio">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="#servicos">Servi??os</a></li>
						<li class="nav-item"><a class="nav-link" href="#resultados">Resultados</a></li>
						<li class="nav-item"><a class="nav-link" href="#mais">Mais informa????es</a></li>
						<li class="nav-item"><a class="nav-link" href="#feed">Feed</a></li>
						<li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
						<li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<section class="site-hero" style="background-image: url(images/My.jpeg); background-repeat:no-repeat; background-size:contain;background-position:center;" id="inicio" data-stellar-background-ratio="0.5">

			<div class="container">
				<div class="row intro-text align-items-center justify-content-center">
					<div class="col-md-10 text-center pt-5">
						<h1 class="site-heading site-animate">Ol??, eu sou <strong class="d-block">Fabio Henrique</strong></h1>
						<strong class="d-block text-white text-uppercase letter-spacing">e por meio deste venho lhe mostrar um pouco do meu trabalho</strong>
					</div>
				</div>
			</div>
		</section> 


		<section class="site-section pb-0" id="servicos">
			<div class="container">
				<div class="row mb-4">
					<div class="col-md-12">
						<div class="section-heading text-center">
							<h2>Nossos <strong>Servi??os</strong></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-4 text-center mb-5">
						<div class="site-service-item site-animate" data-animate-effect="fadeIn">
					<!--
					<span class="icon">
						<span class="fas fa-globe"></span>
					</span>
				-->
				<h3 class="mb-4">Higieniza????o de sof??s</h3>
				<object width="300" height="350">
					<param name="movie" value="https://player.vimeo.com/video/500587101" />
					<embed src="https://player.vimeo.com/video/500587101" type="application/x-shockwave-flash" width="425" height="350" />
				</object>
				<p>A limpeza e higieniza????o de sof??s ?? necess??ria para  remover o acumulo de gorduras, poeira, bact??rias  e  fungos, ??caros  e poss??veis  odores desagrad??veis.
				A Higieniza????o ?? realizada com produtos em base de per??xido de hidrog??nio que elimina  bact??rias, fungos e vir??s, dispomos de produtos eficazes esteriliza????o, alem de limpar e real??ar a cor do estofado,erradicamos os microorganismos invs??veis causadores de doen??as, mantendo seu sof?? limpo conservado e ampliando sua vida ??til por mais tempo. </p>

				<p><a href="#contato" class="site-link">Saber mais</a></p>
			</div>
		</div>
		<div class="col-md-6 col-lg-4 text-center mb-5">
			<div class="site-service-item site-animate" data-animate-effect="fadeIn">
					<!--	
					<span class="icon">
						<span class="fa fa-mobile"></span>
					</span>
				-->
				<h3 class="mb-4">Higieniza????o de Colch??o</h3>
				<object width="300" height="350">
					<param name="movie" value="https://player.vimeo.com/video/500587596" />
					<embed src="https://player.vimeo.com/video/500587596" type="application/x-shockwave-flash" width="425" height="350" />
				</object>
				<p>A higieniza????o de colch??o ?? indicada para pessoas al??rgicas e tamb??m para manter a est??tica do colch??o, pois com o suor os colchoes v??o perdendo a sua cor original e acabam ficando com manchas amareladas e isso tamb??m ajuda a enfraquecer as fibras do tecido, diminuindo a vida ??til do mesmo.
				o ideal ?? realizar a limpeza e higieniza????o de no minimo de 6 em 6 meses para prevenir que isso ocorra!</p>

				<p><a href="#contato" class="site-link">Saber mais</a></p>
			</div>
		</div>
		<div class="col-md-6 col-lg-4 text-center mb-5">
			<div class="site-service-item site-animate" data-animate-effect="fadeIn">
					<!-- 
					<span class="icon">
						<span class="fa fa-mobile"></span>
					</span>
				-->
				<h3 class="mb-4">Impermeabiliza????o e prote????o de estofados</h3>
				<object width="300" height="350">
					<param name="movie" value="https://player.vimeo.com/video/500589442" />
					<embed src="https://player.vimeo.com/video/500589442" type="application/x-shockwave-flash" width="425" height="350" />
				</object>
				<p>A impermeabiliza????o de estofados ocorre pela  aplica????o de produtos impermeabilizantes (n??o inflam??veis)  resinas que permite o  bloqueio dos poros do tecido , que tem a fun????o de  proteger-lo de  penetra????o de l??quidos de consist??ncia oleosa ou aquosa, evitando impregna????o nas fibras do tecido dos estofados .
				Tamb??m ira  proteger contra os raios UV  que desbotam e ressecam o tecido, a limpeza tamb??m se torna mais f??cil al??m de evitar a prolifera????o dos ac??ros!</p>

				<p><a href="#contato" class="site-link">Saber mais</a></p>
			</div>
		</div>
	</div>
</div>
</section>
<div class="form-group">
	<a target="_blank" href="https://whats.link/aliancahigieni"><input type="button" style="width:100%;" class="btn btn-primary  px-4 py-3" value="Or??amento"></a>
</div>

<section class="site-section" id="resultados">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-5">
				<div class="section-heading text-center">
					<h2><strong>Transforma????o</strong></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-lg-4 mb-4">
				<div class="blog-entry">
					<a href="https://mcusercontent.com/8e79fcd2d4500b3959d9dca1d/images/bdab7ce2-73d9-45d4-9892-7bc805e5f810.jpeg"><img src="https://mcusercontent.com/8e79fcd2d4500b3959d9dca1d/images/bdab7ce2-73d9-45d4-9892-7bc805e5f810.jpeg" alt="Image placeholder" class="img-fluid"></a>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4 mb-4">
				<div class="blog-entry">
					<a href="sofa.jpeg"><img src="images/sofa.jpeg" alt="Image placeholder" class="img-fluid"></a>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4 mb-4">
				<div class="blog-entry">
					<a href="https://mcusercontent.com/8e79fcd2d4500b3959d9dca1d/images/690abf30-289e-4642-a927-a4ac97892312.jpeg"><img src="https://mcusercontent.com/8e79fcd2d4500b3959d9dca1d/images/690abf30-289e-4642-a927-a4ac97892312.jpeg" alt="Image placeholder" class="img-fluid"></a>
				</div>
			</div>
		</div>
	</div>
</section>


<div class="form-group">
	<a target="_blank" href="https://whats.link/aliancahigieni"><input type="button" style="width:100%;" class="btn btn-primary  px-4 py-3" value="Or??amento"></a>
</div>

<section class="site-section pb-0" id="mais">
	<div class="container">
		<div class="row mb-4">
			<div class="col-md-12">
				<div class="section-heading text-center">
					<h2>Mais <strong>Informa????es</strong></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-6 text-center mb-5">
				<div class="site-service-item site-animate" data-animate-effect="fadeIn">
					<h3 class="mb-4">Produtos que eliminam
					bact??rias, fungos e Vir??s</h3>

					<p>Muito importante trabalhar com  produtos profissionais  e que  n??o danificam o tecido, pois existem muitos produtos no mercado que podem  ressecar ou at?? mais, manchar ou desbotar o seu estofado.
						ATEN????O

					Muitas vezes por falta de conhecimento t??cnico isso pode acontecer, ent??o tenha cuidado e saiba qual os produtos e t??cnicas ir??o aplicar no seu estofado antes de contratar o servi??o!</p>
					<div class="blog-entry">
						<a href="https://mcusercontent.com/8e79fcd2d4500b3959d9dca1d/images/b49b14e4-9dad-4835-85b2-50070a6ea6ca.jpeg"><img src="https://mcusercontent.com/8e79fcd2d4500b3959d9dca1d/images/b49b14e4-9dad-4835-85b2-50070a6ea6ca.jpeg" alt="Image placeholder" class="img-fluid"></a>
					</div>

					<p><a href="#contato" class="site-link">Saber mais</a></p>
				</div>
			</div>
			<div class="col-md-6 col-lg-6 text-center mb-5">
				<div class="site-service-item site-animate" data-animate-effect="fadeIn">
					<h3 class="mb-4">Cuidado dobrado com os pequenos</h3>

					<p>Voc?? sabia que a exposi????o de beb??s e crian??as ao mofo aumenta o risco de problemas respirat??rios como rinite, sinusite, bronquite, pode agravar a asma e transmite bact??rias que podem causar at?? infec????es?</p>
					<div class="blog-entry">
						<a href="https://mcusercontent.com/8e79fcd2d4500b3959d9dca1d/images/5063c4db-fe56-499d-9f73-ff9a95e69c74.jpeg"><img src="https://mcusercontent.com/8e79fcd2d4500b3959d9dca1d/images/5063c4db-fe56-499d-9f73-ff9a95e69c74.jpeg" alt="Image placeholder" class="img-fluid"></a>
					</div>

					<p><a href="#contato" class="site-link">Saber mais</a></p>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="form-group">
	<a target="_blank" href="https://whats.link/aliancahigieni"><input type="button" style="width:100%;" class="btn btn-primary  px-4 py-3" value="Or??amento"></a>
</div>

<section class="site-section" id="feed">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-5">
				<div class="section-heading text-center">
					<h2>Feed do <strong>Whatsapp</strong></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-lg-4 mb-4">
				<div class="blog-entry">
					<a href="https://mcusercontent.com/8e79fcd2d4500b3959d9dca1d/images/e9468d40-c2ba-48b9-a0b3-e9d364a7abb2.jpeg"><img src="https://mcusercontent.com/8e79fcd2d4500b3959d9dca1d/images/e9468d40-c2ba-48b9-a0b3-e9d364a7abb2.jpeg" alt="Image placeholder" class="img-fluid"></a>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4 mb-4">
				<div class="blog-entry">
					<a href="https://mcusercontent.com/8e79fcd2d4500b3959d9dca1d/images/b1ac78e2-887b-4e31-892a-6e013d066ae5.jpeg"><img src="https://mcusercontent.com/8e79fcd2d4500b3959d9dca1d/images/b1ac78e2-887b-4e31-892a-6e013d066ae5.jpeg" alt="Image placeholder" class="img-fluid"></a>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4 mb-4">
				<div class="blog-entry">
					<a href="https://mcusercontent.com/8e79fcd2d4500b3959d9dca1d/images/f3896846-dbbe-40aa-afcd-0c20326bd233.jpeg"><img src="https://mcusercontent.com/8e79fcd2d4500b3959d9dca1d/images/f3896846-dbbe-40aa-afcd-0c20326bd233.jpeg" alt="Image placeholder" class="img-fluid"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-lg-4 mb-4">
					<div class="blog-entry">
						<a href="https://mcusercontent.com/8e79fcd2d4500b3959d9dca1d/images/094bb132-5f2d-4712-85da-cc923fecca58.jpeg"><img src="https://mcusercontent.com/8e79fcd2d4500b3959d9dca1d/images/094bb132-5f2d-4712-85da-cc923fecca58.jpeg" alt="Image placeholder" class="img-fluid"></a>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 mb-4">
					<div class="blog-entry">
						<a href="https://mcusercontent.com/8e79fcd2d4500b3959d9dca1d/images/f63fefd2-85e9-4920-8467-d095748d3ec6.jpeg"><img src="https://mcusercontent.com/8e79fcd2d4500b3959d9dca1d/images/f63fefd2-85e9-4920-8467-d095748d3ec6.jpeg" alt="Image placeholder" class="img-fluid"></a>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 mb-4">
					<div class="blog-entry">
						<a href="https://mcusercontent.com/8e79fcd2d4500b3959d9dca1d/images/a5f3ba15-5a3b-44c8-bda5-2766448f2718.jpeg"><img src="https://mcusercontent.com/8e79fcd2d4500b3959d9dca1d/images/a5f3ba15-5a3b-44c8-bda5-2766448f2718.jpeg" alt="Image placeholder" class="img-fluid"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="form-group">
	<a target="_blank" href="https://whats.link/aliancahigieni"><input type="button" style="width:100%;" class="btn btn-primary  px-4 py-3" value="Or??amento"></a>
</div>

<section class="site-section" id="sobre">
	<div class="container">
		<div class="row mb-5 align-items-center">
			<div class="col-lg-7 pr-lg-5 mb-5 mb-lg-0">
				<img src="https://mcusercontent.com/8e79fcd2d4500b3959d9dca1d/images/763caeb5-e497-4eaa-a4ee-d72f078ac867.jpeg" alt="Image placeholder" class="img-fluid">
			</div>
			<div class="col-lg-5 pl-lg-5">
				<div class="section-heading">
					<h2>Sobre <strong></strong></h2>
				</div>
				<p class="lead">Nosso Compromisso e miss??o principal ?? manter a sua fam??lia e quem voc?? ama saud??veis, mantendo o seu estofado limpo, livre de agentes causadores de diversas doen??as, tais causadas por germes, ??caros, fungos, bact??rias e v??rus, levamos a voc?? uma experi??ncia satisfat??ria com nossos servi??os e atendimento diferenciado.
					Deixamos o seu estofado limpo, higienizado, agrad??vel, cheiroso e bonito novamente, ajudando voc?? a cuidar bem do que ?? seu. 

				Se Voc?? pensa em SA??DE e BEM-ESTAR Nos pensamos em voc??!</p>
				<p>
					<a href="#contato" class="btn btn-primary px-4 py-2 btn-sm smoothscroll">Entrar em Contato</a>
				</p>
			</div>
		</div>
	</div>
</section>

<footer id="contato" class="site-footer">
	<div class="container">
		<div class="row mb-5">
		</div>
		<div class="row mb-5">
			<div class="col-md-12 text-center">
				<p>
					<a href="https://www.facebook.com/Aliancahigieeni" target="_blank" class="social-item"><span class="fab fa-facebook-f"></span></a>
					<a href="https://www.instagram.com/aliancalimpeza/" target="_blank" class="social-item"><span class="fab fa-instagram"></span></a>
					<a href="mailto:aliancahigieni021@gmail.com" target="_blank" class="social-item"><span class="fas fa-envelope-square"></span></a>
					<a href="https://whats.link/aliancahigieni" target="_blank" class="social-item"><span class="fa fa-whatsapp"></span></a>
				</p>
			</div>
		</div>
	</div>
</footer>


<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-23581568-13');
</script>
