<?php 

$login = 'user='.$_GET['user'].'&pass='. $_GET['pass'];

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SmartUP - Soluções inteligentes para condomínios!</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/normalize.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/jquery-ui.css"  media="screen,projection"/>
	<meta charset="utf-8">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<?php 
		require "controllers/controleIndex.php";
		require "controllers/controleDash.php";
		require "Model/Usuario.php";
		if(isset($_GET['user']) && isset($_GET['pass'])){
			if(($_GET['user'] == "carlos" && $_GET['pass'] == "morango") || ($_GET['user'] == "henrique" && $_GET['pass'] == "kiwi")	){
				include "menuSuperior.php"; 
				include "menuLateral.php";
				if($_GET['user'] == "carlos"){
					$user = new Usuario($_GET['user'], $_GET['pass']);
					$arrayConfig = array(
						array('id' => 3, 'posX' => 1), array('id' => 2, 'posX' => 2), array('id' => 3, 'posX' => 3), array('id' => 3, 'posX' => 4)
					);
					$user->setConfig($arrayConfig);
				}
				if($_GET['user'] == "henrique"){
					$user = new Usuario($_GET['user'], $_GET['pass']);
					$arrayConfig = array(
						array('id' => 2,'posX' => 2), array('id' => 1,'posX' =>1), array('id' => 3,'posX' => 4),
						array('id' => 1,'posX' => 3), array('id' => 2,'posX' =>3), array('id' => 3,'posX' => 3),
					);
					$user->setConfig($arrayConfig);
				}

				$controle = new ControleDash();
				$controle->filtraColunas($user->getConfig());
				//	include "dash.php";
					
				if($_GET['page']) {
					include "components/forms/".$_GET['page'].".php";																		
				}	
			}else{
				include "login.php";
			}
		}else{
			include "login.php";
		}
	?>

	<!--Import jQuery before materialize.js-->
	<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
	
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<?php if(isset($_GET['user'])){ ?>
		<script type="text/javascript">$(".erro").addClass("errado");</script>
	<?php } ?>
	
<!-- 	<script>
		$("body").click(function(){
			$("#selecao_mobile").removeClass('active');
		})
	</script> -->



	<script type="text/javascript">
		
		
		console.log($(".conteudo").parent());
		if(idCont3 = 'coluna3'){
			var arrayCont3 = $(".conteudo");
			var passaArrayCol3 = [];
			for (i = 0; i<arrayCont3.length; ++i){
				passaArrayCol3[i] = {'id':3, 'posX':3};
			}
		}
		console.log($(".conteudo3").parent().attr('id'));
		



		console.log(passaArrayCol3);

	$(document).ready(function() {
		$('select').material_select();
	});
	</script>

</body>
</html>
