<?php 
function mod($dividendo, $divisor){	
	return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

function cnpj($mask)
{
	$n1  = rand(0,9);
	$n2  = rand(0,9);
	$n3  = rand(0,9);
	$n4  = rand(0,9);
	$n5  = rand(0,9);
	$n6  = rand(0,9);
	$n7  = rand(0,9);
	$n8  = rand(0,9);
	$n9  = 0;//gera_random(n);
	$n10 = 0;//gera_random(n);
	$n11 = 0;//gera_random(n);
	$n12 = 1;//gera_random(n);
	$d1 = $n12*2+$n11*3+$n10*4+$n9*5+$n8*6+$n7*7+$n6*8+$n5*9+$n4*2+$n3*3+$n2*4+$n1*5;
	$d1 = 11 - ( mod($d1,11) );
	if ($d1>=10) $d1 = 0;
	$d2 = $d1*2+$n12*3+$n11*4+$n10*5+$n9*6+$n8*7+$n7*8+$n6*9+$n5*2+$n4*3+$n3*4+$n2*5+$n1*6;
	$d2 = 11 - ( mod($d2,11) );
	if ($d2>=10) $d2 = 0;
	if($mask == "yes"){
		return ''.$n1.$n2.'.'.$n3.$n4.$n5.'.'.$n6.$n7.$n8.'/'.$n9.$n10.$n11.$n12.'-'.$d1.$d2;
	}else{
		return $n1.$n2.$n3.$n4.$n5.$n6.$n7.$n8.$n9.$n10.$n11.$n12.$d1.$d2;
	}
}



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Gerador de CNPJ</title>
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
	<style type="text/css">
		div.container{width: 560px; margin: 0 auto; position: relative; padding-top: 40px;}
		h1{text-align: center; color: #2f2e5f; letter-spacing: -2px; font-size: 36px; font-family: 'Varela Round';  margin: -10px auto 90px;}
		h1 span{color: #f08224;}
		form{width: 173px; margin: 0 auto;}
		input{display: block; margin: 0 auto;}
		label{display: none;}
		#generate[value=""] ~ label{margin: 20px; font-size: 18px; color: #666; text-align: center; font-family: sans-serif; display: block; position: absolute; width: 100%; top: -15px; left: -20px;}
		.botao{margin: 30px 20px; display: inline-block; position: absolute; width: 100px; height: 30px; background-image: linear-gradient(to bottom, #f08224, #ec7820, #d76a09); color: white; border-radius: 3px; border: none;}
		
		@media(max-width: 400px){
			div.container{width: 100%}
		}		
	</style>
</head>
<body>
	<div class="container">
		<h1>Gerador de<span> CNPJ</span></h1>
		<form style="position: relative; width: 100%;" method="GET">
			<input type="hidden" id="passaCampo" name="mask" value="vazio">
			<input type="text" id="generate" value="<?php if(isset($_GET['mask'])){echo cnpj($_GET['mask']);} ?>" style="width: 300px; padding: 5px; border: none; outline: none; border-bottom: 0.09375em solid #f08224; text-align: center; font-size: 22px; color: #444">
			<label for="">Escolha a forma do gerador</label>
			<div style="width: 300px; margin: 0 auto; position: relative;">
			<button type="submit" value="yes" class="botao" style="left: 50%;">Com Mask</button>
			<button type="submit" value="no" class="botao" style="right: 50%;">Sem Mask</button>
			</div>
		</form>
	</div>
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript">
		$(".botao").click(function(){
			if($(this).val() == "yes"){
				$("#passaCampo").val("yes");
			}else{
				$("#passaCampo").val("no");
			}
		})
	</script>
</body>
</html>
