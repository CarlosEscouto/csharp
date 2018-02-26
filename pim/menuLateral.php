<style type="text/css">

</style>
<div class="row" style="margin-bottom: 0; " >
	<div class="col s12 compensa" style="" >
		<ul id="slide-out" class="side-nav fixed" style="overflow: scroll; height: 100%;">
			<li>
				<div class="user-view">
					<div class="background">
						<img src="images/smartLogoW.jpg" width="300" style="right: 0px; position: absolute; filter: brightness(.5);">
					</div>
					<?php if($_GET['user'] == "carlos"){ ?>
						<a href="#!user"><img class="circle" src="images/person1.jpg"></a>
					<?php }elseif($_GET['user'] == "henrique"){ ?>
						<a href="#!user"><img class="circle" src="images/person2.jpg"></a>
					<?php } ?>
					<a href="#!name"><span class="white-text name">Carlos Henrique</span></a>
					<a href="#!email"><span class="white-text email">carloshenriqueescouto@gmail.com</span></a>
				</div>
			</li>
			<li><a href="?user=<?php echo ($_GET['user'].'&pass='. $_GET['pass']); ?>&page=home" class="waves-effect"><i class="material-icons">home</i>Home</a></li>

			<li><div class="divider"></div></li>
			<li><a class="subheader">menu</a></li>

			<li class="no-padding">
				<ul class="collapsible collapsible-accordion">
					<li>
						<a class="collapsible-header menus_drop"><i class="material-icons">domain</i>Condomínio<i class="material-icons right">arrow_drop_down</i></a>
						<div class="collapsible-body">
							<ul>
								<li><a href="?user=<?php echo ($_GET['user'].'&pass='. $_GET['pass']); ?>&page=frm_buscar_condominio" class="waves-effect"><i class="material-icons">subdirectory_arrow_right</i>Condomínio</a></li>
								<li><a href="?user=<?php echo ($_GET['user'].'&pass='. $_GET['pass']); ?>&page=frm_buscar_bloco" class="waves-effect"><i class="material-icons">subdirectory_arrow_right</i>Blocos</a></li>
								<li><a href="?user=<?php echo ($_GET['user'].'&pass='. $_GET['pass']); ?>&page=frm_buscar_unidade" class="waves-effect"><i class="material-icons">subdirectory_arrow_right</i>Unidades</a></li>
								<li><a href="?user=<?php echo ($_GET['user'].'&pass='. $_GET['pass']); ?>&page=frm_buscar_area" class="waves-effect"><i class="material-icons">subdirectory_arrow_right</i>Áreas</a></li>
								<li><a href="?user=<?php echo ($_GET['user'].'&pass='. $_GET['pass']); ?>&page=frm_buscar_aviso" class="waves-effect"><i class="material-icons">subdirectory_arrow_right</i>Avisos</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</li>

			<li class="no-padding">
				<ul class="collapsible collapsible-accordion">
					<li>
						<a class="collapsible-header menus_drop"><i class="material-icons">person</i>Moradores<i class="material-icons right">arrow_drop_down</i></a>
						<div class="collapsible-body">
							<ul>
								<li><a href="?user=<?php echo ($_GET['user'].'&pass='. $_GET['pass']); ?>&page=frm_buscar_morador" class="waves-effect"><i class="material-icons">subdirectory_arrow_right</i>Moradores</a></li>
								<li><a href="?user=<?php echo ($_GET['user'].'&pass='. $_GET['pass']); ?>&page=frm_buscar_evento" class="waves-effect"><i class="material-icons">subdirectory_arrow_right</i>Eventos</a></li>
								<li><a href="?user=<?php echo ($_GET['user'].'&pass='. $_GET['pass']); ?>&page=frm_buscar_correspondencia" class="waves-effect"><i class="material-icons">subdirectory_arrow_right</i>Correspondências</a></li>
								<li><a href="?user=<?php echo ($_GET['user'].'&pass='. $_GET['pass']); ?>&page=frm_buscar_enquete" class="waves-effect"><i class="material-icons">subdirectory_arrow_right</i>Enquetes</a></li>
								<li><a href="?user=<?php echo ($_GET['user'].'&pass='. $_GET['pass']); ?>&page=frm_buscar_reclam_sugest" class="waves-effect"><i class="material-icons">subdirectory_arrow_right</i>Reclações & Sugestões</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</li>

			<li class="no-padding">
				<ul class="collapsible collapsible-accordion">
					<li>
						<a class="collapsible-header menus_drop"><i class="material-icons">group</i>Funcionários<i class="material-icons right">arrow_drop_down</i></a>
						<div class="collapsible-body">
							<ul>
								<li><a href="?user=<?php echo ($_GET['user'].'&pass='. $_GET['pass']); ?>&page=frm_buscar_interno" class="waves-effect"><i class="material-icons">subdirectory_arrow_right</i>Internos</a></li>
								<li><a href="?user=<?php echo ($_GET['user'].'&pass='. $_GET['pass']); ?>&page=frm_buscar_terceiro" class="waves-effect"><i class="material-icons">subdirectory_arrow_right</i>Terceiros</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</li>
			
			<li class="no-padding">
				<ul class="collapsible collapsible-accordion">
					<li>
						<a class="collapsible-header menus_drop"><i class="material-icons">transfer_within_a_station</i>Visitas<i class="material-icons right">arrow_drop_down</i></a>
						<div class="collapsible-body">
							<ul>
								<li><a href="?user=<?php echo ($_GET['user'].'&pass='. $_GET['pass']); ?>&page=frm_buscar_visita" class="waves-effect"><i class="material-icons">subdirectory_arrow_right</i>Visitas</a></li>
								<li><a href="?user=<?php echo ($_GET['user'].'&pass='. $_GET['pass']); ?>&page=frm_buscar_visitante" class="waves-effect"><i class="material-icons">subdirectory_arrow_right</i>Visitantes</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</li>
			
			<li class="no-padding" style="margin-bottom: 55px;">
				<ul class="collapsible collapsible-accordion">
					<li>
						<a class="collapsible-header menus_drop"><i class="material-icons">attach_money</i>Contas<i class="material-icons right">arrow_drop_down</i></a>
						<div class="collapsible-body">
							<ul>
								<li><a href="?user=<?php echo ($_GET['user'].'&pass='. $_GET['pass']); ?>&page=frm_buscar_contas_a_pagar" class="waves-effect"><i class="material-icons">subdirectory_arrow_right</i>Contas a Pagar</a></li>
								<li><a href="?user=<?php echo ($_GET['user'].'&pass='. $_GET['pass']); ?>&page=frm_buscar_contas_a_receber" class="waves-effect"><i class="material-icons">subdirectory_arrow_right</i>Contas a Receber</a></li>
								<li><a href="?user=<?php echo ($_GET['user'].'&pass='. $_GET['pass']); ?>&page=frm_buscar_fornecedor" class="waves-effect"><i class="material-icons">subdirectory_arrow_right</i>Fornecedores</a></li>
								<li><a href="?user=<?php echo ($_GET['user'].'&pass='. $_GET['pass']); ?>&page=frm_buscar_obra" class="waves-effect"><i class="material-icons">subdirectory_arrow_right</i>Obras</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</li>

			
			<!--<li><a href="#" class="waves-effect"><i class="material-icons">format_paint</i>Obras</a></li>// conta
			<li><a href="#" class="waves-effect"><i class="material-icons">map</i>Áreas</a></li> // cond
			<li><a href="#" class="waves-effect"><i class="material-icons">event</i>Eventos</a></li> // mor
			<li><a href="#" class="waves-effect"><i class="material-icons">drafts</i>Correspondências</a></li> // mor
			<li><a href="#" class="waves-effect"><i class="material-icons">flag</i>Avisos</a></li> // cond
			<li><a href="#" class="waves-effect"><i class="material-icons">gavel</i>Enquetes</a></li> // mor
			<li><a href="#" class="waves-effect"><i class="material-icons">forum</i>Reclações & Sugestões</a></li> // mor-->

		</ul>
		<a href="#" style="z-index: 999999; color: #000; position: fixed; left: 20px; top: 20px;" data-activates="slide-out" class="button-collapse"><i class="material-icons" style="font-size: 24px;">menu</i></a>
		<!-- TESTE DE PADDING -->
		<!-- <div class="col s12" style="background: #f00; height: 300px"></div> -->
	</div>
</div>

