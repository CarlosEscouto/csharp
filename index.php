<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Geradores</title>
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<style type="text/css">
		html, body {height: 100%;}
		body {display: flex;align-items: center;justify-content: center;}
		.spinner {animation: rotator 1.4s linear infinite;position: relative;left: calc(50% - 33px);top: calc(50vh - 33px);}
		@keyframes rotator {
			0% {transform: rotate(0deg);}
			100% {transform: rotate(270deg);}
		}
		.path {stroke-dasharray: 187;stroke-dashoffset: 0;transform-origin: center;animation: dash 1.4s ease-in-out infinite, colors 5.6s ease-in-out infinite;}
		@keyframes colors {
			0% {stroke: #4285F4;}
			25% {stroke: #DE3E35;}
			50% {stroke: #F7C223;}
			75% {stroke: #1B9A59;}
			100% {stroke: #4285F4;}
		}
		@keyframes dash {
			0% {stroke-dashoffset: 187;}
			50% {stroke-dashoffset: 46.75;transform: rotate(135deg);}
			100% {stroke-dashoffset: 187;transform: rotate(450deg);}
		}
		h1{position: absolute; top:30px; text-align: center; color: #2f2e5f; letter-spacing: -1px; font-size: 36px; font-family: "Varela Round"; }
		h1 span{color: #f08224;}
		
		div.container{ display: block; position: relative; width:449px; height: 200px; margin: 0 auto; top: -30vh;}
		div.container div{ position: absolute; bottom: 0; border:1px solid #2f2e5f; transition: .3s;}
		div.container div:hover{border:1px solid #2f2e5f; transform: scale(1.03); transition: .3s; box-shadow: 0px 0px 70px 0px #ccc;}
		div.container div:nth-child(odd){left: 0; width: 210px; height: 160px; background-color: #;}
		div.container div:nth-child(even){right: 0; width: 210px; height: 160px; background-color: #;}
		div.container img{text-align: center; display: block; margin: 0 auto; margin-top: 20px;}
		div.container p{font-family: "Varela Round"; text-align: center; font-weight: normal; font-size: 18px;}
		/*.segundaLinha{top: 225px;}*/
		
		@media(max-width: 400px){
			div.container{ width:95%; height: auto; margin: 0 auto; top: -30vh;}
			div.container div:nth-child(odd){left: calc(50% - 105px); top: 65px;}
			div.container div:nth-child(even){left: calc(50% - 105px); top: 245px;}
		}
	</style>
</head>
<body>
	<h1>Menu dos <span>Helpers</span></h1>
		
		<div class="container">
		<?php /*
			<div id="decoder">
				<img src="testes/img/icon.png" width="80" height="80" alt="">
				<p style="margin-top: 23px;" >Decoder</p>
			</div>
			<div id="leitorDeDominios">
				<img style="margin-top: 28px;" src="testes/img/bitbucket.png" alt="" width="70">
				<p style="margin-top: 25px;" >Repositórios</p>
			</div
		*/ ?>
			<div id="geradorCNPJ" class="segundaLinha">
				<img style="margin-top: 10px; border:none;" src="images/cnpj.png" alt="" width="95">
				<p style="margin-top: 18px;">Gerador de CNPJ</p>
			</div>
			<div id="geradorCPF" class="segundaLinha">
				<img style="margin-top: 20px;" src="images/cpf.png" alt="" width="80">
				<p style="margin-top: 23px;" >Gerador de CPF</p>
			</div>
		</div>
	

	

	
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script language= "JavaScript">
		var helpers = document.querySelectorAll(".container div");
		$(".container div").click(function(){
			var diretorio = $(this).attr('id');
			$('#spinner').show('fade');
			setTimeout(function(){
				$('#spinner').hide('fade');
				location.href="http://carlosescouto.azurewebsites.net/"+diretorio+".php";
			}, 1200)
		})
	</script>
	<div id="spinner" style="width: 100%; height: 100vh; background: rgba(180,180,180,.5); position: absolute; z-index: 99; display: none;">
		<svg class="spinner" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
	   <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
   </div>
</body>
</html>
