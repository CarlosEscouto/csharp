<section class="content" style="top:80px; position: relative;">
	<div class="row">
		<div class="col s12 compensa">
			<div class="col s12" style="padding: 0 20px;">
				<style type="text/css">
					.span_forms{ padding: 0 10px; font-size: 16px;}
					.span_forms.ativo{ color: #444; }
					.picker__day--selected, .picker__day--selected:hover, .picker--focused .picker__day--selected, .picker__date-display{background: #039be5;}
				</style>
				<ul class="tab" style="margin-top: 0;">
					<li class="tab col s12 " style="background-color: #f6f6f6; padding: 10px 5px; border-radius: 10px;" >
						<a class="" href="?<?php echo $login ?>&page=home">
							<span class="span_forms">Home</span>
						</a>
						/
						<a class="" href="?<?php echo $login ?>&page=frm_buscar_condominio">
							<span class="span_forms">Buscar condominio</span>
						</a>	
						/						
						<a class="span_forms ativo" href="#">
							<span class="span_forms">Cadastrar condominio</span>
						</a>					
					</li>
				</ul>
			</div>
			<div class="row">
				<div class="col s12 " style="padding: 22px;">
					<div class="cadastroForm">
					<form class="">
						<h5 style="">Cadastro de condominío</h5>
						<div class="row">
							<div class="input-field col s12 m4" >
								<input id="icon_prefix" type="text" class="validate">
								<label for="icon_prefix">Nome</label>
							</div>
							<div class="input-field col s12 m4" >
								<input id="icon_prefix" type="text" class="validate">
								<label for="icon_prefix">CNPJ</label>
							</div>
							<div class="input-field col s12 m4" >
								<input id="icon_prefix" type="text" class="validate">
								<label for="icon_prefix">Proprietário</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12 m3" >
								<input type="text" id="icon_prefix" class="datepicker">
								<label for="icon_prefix">Data de Inauguração</label>
							</div>
							<div class="input-field col s12 m3" >
								<input id="icon_prefix" type="number" class="validate">
								<label for="icon_prefix">Blocos</label>
							</div>
							<div class="input-field col s12 m3" >
								<input id="icon_prefix" type="number" class="validate">
								<label for="icon_prefix">Unidades</label>
							</div>	
							<div class="input-field col s12 m3" >
								<input id="icon_prefix" type="tel" class="validate">
								<label for="icon_prefix">CEP</label>
							</div>														
						</div>
						<div class="row">
							<div class="input-field col s12 m3" >
								<input id="icon_prefix" type="text" class="validate">
								<label for="icon_prefix">Logradouro</label>
							</div>
							<div class="input-field col s12 m3" >
								<input id="icon_prefix" type="tel" class="validate">
								<label for="icon_prefix">Numero</label>
							</div>
							<div class="input-field col s12 m3" >
								<input id="icon_prefix" type="text" class="validate">
								<label for="icon_prefix">Cidade</label>
							</div>	
							<div class="input-field col s12 m3" >
								<input id="icon_prefix" type="text" class="validate">
								<label for="icon_prefix">Estado</label>
							</div>															
						</div>			
						<div class="row">
							<div class="input-field col s12 m4" >
								<input id="icon_prefix" type="text" class="validate">
								<label for="icon_prefix">Complemento</label>
							</div>
							<div class="input-field col s12 m4" >
								<input id="icon_prefix" type="text" class="validate">
								<label for="icon_prefix">Descrição</label>
							</div>
						</div>
						<div class="row">
							<div class="col s3">
								<a class="btn botao">Salvar</a>
							</div>
						</div>						
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="fundo"></div>