<section class="content">
	<div class="row">
		<div class="col s12 compensa" style="" >
			<ul class="tabs" style="">
				<li class="tab col s6 m4 l3 xl2" ><a class="active" href="#tab1"><i class="material-icons" style="position: relative; left: -10px; top: 5px;"><?php if($_GET['user'] == "carlos"){echo "build";}elseif($_GET['user'] == "henrique"){echo "perm_identity"; } ?></i><span><?php if($_GET['user'] == "carlos"){echo "Administrador";}elseif($_GET['user'] == "henrique"){echo "Morador"; } ?></span></a></li>
				<!-- <li class="tab col s2" ><a href="#tab2"><i class="material-icons" style="position: relative; left: -10px; top: 5px;">domain</i><span>Operação</span></a></li> -->
				<!-- <li class="tab col s2" ><a href="#tab3"><i class="material-icons" style="position: relative; left: -10px; top: 5px;">perm_identity</i><span>Condômino</span></a></li> -->

				<li class="tab col s6 m4 offset-m4 l2 xl2 offset-l6 offset-xl8" >
					<span class="" style="text-transform: capitalize; "><?php echo $_GET['user']; ?>
						<i class="material-icons" style="top: 6px; left: 5px; position: relative;">person</i>
					</span>
				</li>

			</ul>

			<!--Primeiro tab-->

			<div id="tab1" class="col s12 modais">
				<div class="fundo"></div>
				<div class="row" >

					<div class="column " id="coluna1">
						<?php $controle->leitorCards(1); ?>	
					</div>

					<div class="column " id="coluna2">
						<?php $controle->leitorCards(2); ?>	
					</div>

					<div class="column " id="coluna3">
						<?php $controle->leitorCards(3); ?>	
					</div>

					<div class="column " id="coluna4">
						<?php $controle->leitorCards(4); ?>	
					</div>
				</div>
			</div>
			
			<!--Segunda tab-->

<!-- 			<div id="tab2" class="col s12 modais">
				<div class="fundo"></div>
				<div class="row">
				
				</div>
			</div> -->				
			
			<!--Terceiro tab-->

<!-- 			<div id="tab3" class="col s12 modais">
				<div class="fundo"></div>
				<div class="row">
				
				</div>
			</div>	 -->			
		</div>
	</div>
</section>

