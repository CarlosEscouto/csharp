<?php 
$servidor = $_SERVER['SERVER_NAME'];
$arquivo = $_SERVER['SCRIPT_NAME'];
$text = "#";
$arquivo = explode("/", $arquivo);

for($i=0; $i<sizeof($arquivo); ++$i) {
	$implodeArquivo[] = $arquivo[$i];
	if(($i + 2) == sizeof($arquivo)){
		break;
	}
}

$arquivo = implode("/", $implodeArquivo);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Relead de Texte - O verdadeiro boladão!</title>
<style type="text/css">
	.redes > h3{font-size: 24px; margin: 20px auto; text-align: center; text-transform: none;}
	.redes .rede-social{text-decoration: none; text-align: center; color: #fff; text-transform: none; box-shadow: none; display: block; box-sizing: border-box; max-width: 330px; padding:10px; border-radius: 5px; margin: 10px auto; font-size: 16; line-height: 1.5em;}
	.redes .rede-social .fa{position: relative; left: 20px; font-size: 24px; float: left;}
	.redes .facebook{background-color:#4a6ea9;}
	.redes .twitter{background-color:#20b8ff;}
	.redes .google{background-color:#E04A39;}
	.redes .facebook:hover{background-color: #3683df;}
	.redes .twitter:hover{background-color: #01cfff;}
	.redes .google:hover{background-color: #EE3B01;}
</style>
<script src="https://use.fontawesome.com/0e3190ddf3.js"></script>
</head>
	<body>
		<div class="redes">
			<h3>Aproveite e compartilhe com os amigos</h3>
			<!-- facebook share -->
			<a href="https://www.facebook.com/sharer/sharer.php?u=http://<?=$servidor,$arquivo?>?utm_source=fb_share_sucess" target="_blanck" class="rede-social facebook"><i class="fa fa-facebook" aria-hidden="true"></i>Compartilhe no Facebook</a>
			<!-- Twitter share -->
			<a href="https://twitter.com/intent/tweet?text=#&url=http://<?=$servidor,$arquivo?>?utm_source=tw_share_sucess" target="_blanck" class="rede-social twitter"><i class="fa fa-twitter" aria-hidden="true"></i>Compartilhe no Twitter</a>
			<!-- google share -->
			<a href="https://plus.google.com/share?url=http://<?=$servidor,$arquivo?>?utm_source=gl_share_sucess &t=# " target="_blanck" class="rede-social google"><i class="fa fa-google-plus" aria-hidden="true"></i>Compartilhe no Google+</a>
				<!-- Posicione esta tag onde você deseja que o botão compartilhar apareça. -->
				<div style="overflow: hidden; width: 1px; height: 1px; position: absolute;" ><div class="g-plus" data-action="share"></div></div>
				
				<!-- Posicione esta tag no cabeçalho ou imediatamente antes da tag de fechamento do corpo. -->
				<script src="https://apis.google.com/js/platform.js" async defer>
				{lang: 'pt-BR'}
				</script>
			<!-- Final google share -->	
			<script type='text/javascript'>
			function atribuiTexto(element, attributeText){
				var obj = document.querySelector(element);
				var res = obj.href.split(attributeText);
				var titulo = document.querySelector('title').text;
				var obj = res[0]+titulo+res[1];
				document.querySelector(element).href = obj;
			}	

			atribuiTexto('.twitter','#');
			atribuiTexto('.google','#');
			</script>
		</div>
	</body>
</html>