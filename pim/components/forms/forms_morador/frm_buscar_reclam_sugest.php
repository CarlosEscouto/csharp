<section class="content " style="top:80px; position: relative;">
	<div class="row">
		<div class="col s12 compensa">
			<div class="col s12" style="padding: 0 20px;">
				<style type="text/css">
					.span_forms{ padding: 0 10px; font-size: 16px;}
					.span_forms.ativo{ color: #444; }
				</style>
				<ul class="tab" style="margin-top: 0;">
					<li class="tab col s12 " style="background-color: #f6f6f6; padding: 10px 5px; border-radius: 10px;" >
						<a class="" href="?<?php echo $login ?>&page=home">
							<span class="span_forms">Home</span>
						</a>
						/
						<a class="span_forms ativo" >
							<span class="span_forms">Buscar reclamação</span>
						</a>					
					</li>
				</ul>
			</div>
		</div>
	</div >

	<div class=" compensa">
		<section class="row gutter_form">
			<div class="row">
				<div class="col s12 " style="padding: 10px 0px; border-radius: 10px;">
					<div class="col s12" style="">
						<form class="">
							<div class="row">
								<div class="input-field col s12 m6 l4" style="top: 10px; position: relative;">
									<i class="material-icons prefix" style="font-size: 38px;">search</i>
									<input id="icon_prefix" type="text" class="validate">
									<label for="icon_prefix">Procurar reclamação</label>
								</div>
							</div>
						</form>
						<div class="input-field col s5 m4 l3" style="top: -10px; position: relative;">
							<a href="?<?php echo $login ?>&page=frm_cadastrar_reclam_sugest" class="btn botao" >Novo</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m12 l12 ">
					<div style="padding: 0 22px; overflow: scroll;" class="table_form" >
						<table class="striped">
							<thead>
								<tr>
									<th>Nome</th>
									<th>Endereço</th>
									<th>Blocos</th>
									<th>Unidades</th>
									<th>Data de inauguração</th>
									<th>Proprietáario</th>
									<th>CNPJ</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Bouna Vitta</td>
									<td>Julio Buono</td>
									<td>1</td>
									<td>64</td>
									<td>12/06/2001</td>
									<td>ASK</td>
									<td>27.948.894.00001</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

		</section>
	</div>
</section>
<div class="fundo"></div>