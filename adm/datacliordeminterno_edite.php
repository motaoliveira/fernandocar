<style>
input{
	margin:2px;
}
</style>
	<?php
	@include("globais.php");
	//print_r($_POST);
	@$id = $_POST['id'];
	@$os = $_POST['os'];

	if(@$_POST){
	mysql_query("UPDATE `edicao` SET `atuacao` = '$id', `projeto` = '$os' WHERE `edicao`.`id` = 1;");
	}else{
	//echo "carregue a id ";
	$sql = "SELECT * FROM `edicao` WHERE `id`=1";
	$query = mysql_query($sql);
	while ($banco = mysql_fetch_assoc($query))
	{
		$atuacaoId = $banco['atuacao'];
		$atuacaoOs = $banco['projeto'];
	?>
	<script src="osdetalhe.js"></script>
	<div class="cabecalho"  style="background:white;padding-top:0px;border:0px red dashed;">
			<?php
				$sql = "SELECT * FROM `cliente` WHERE `id` = $atuacaoId";
				$rsd = mysql_query($sql);
				while ($banco = mysql_fetch_assoc($rsd))
				{
					$clientID = $banco["id"];
					$clientNome = $banco["nome"];
					$clientEmail = $banco["email"];
					$clientCel = $banco["celular"];
					$cleintSenha = $banco["senha"];
					$clientRua = $banco["rua"];
					$clientNumero = $banco["numero"];
					$clientBairro = $banco["bairro"];
					$clientCep = $banco["cep"];
					$clientLog = $banco["log"];
					$clientBut = $banco["but"];
			?>
		<!-- Atuação  -->
		 <div class="row" style="padding:4px;background:white">
					 <div class="col-12" >
						 <span class="spandate"><?php echo $clientLog;?></span>
					 </div>
					 <div class="col-4" >
							 <img class="img-fluid"  src="../image/logofcarorc.png" >
					 </div>
					 <div class="col-8" style="padding-left:30px; text-align:center;">
						 <h1><strong>FC FERNANDO CAR</strong></h1>
						<h5>Documentos - Consultas e Serviços:</h5>
							  <p><strong>Endereço: </strong>Maria Quitéria, n.º 3178 <strong>CEP:</strong>440111-111<br>
							 Feira de Santana - Bahia <strong>Telefone:</strong> (75) 3225.7579 / (75) 99175.1233
						 </p>
					 </div>
		 </div>
		 <!-- /.row -->
		 	<?php } ?>
	<span><hr></span>
		<?php
			//echo $atuacaoOs;
				$sqlline= mysql_query("SELECT * FROM `ordserv` WHERE `cod_os` =$atuacaoOs ");
				while ($bank = mysql_fetch_array($sqlline))
					{
						$id_us=$bank['id_us'];
						$data = $bank['data_origem'];
						$cod_os = $bank['cod_os'];
						$placa = $bank['placa'];
						$marca = $bank['marca'];
						$cor= $bank['cor'];
						$renavan= $bank['renavan'];
						$proprietario=$bank['proprietario'];
						$telefone=$bank['telefone'];

						///echo $marca;
					}

		?>
			<div class="container" style="padding:8px;">
				<div class="row" >
						<div class="col-2" >
						<strong>Data:</strong>
						</div>
						<div class="col" >
							<input type="text" disabled class="form-control data" id="data" placeholder="<?php echo $data; ?>" >
						</div>
						<div class="col-2" >
							<strong>Código OS:</strong>
						</div>
						<div class="col" >
							<input type="text"  class="form-control cod_os " id="oscod" placeholder="<?php echo $cod_os; ?>" disabled>
						</div>
				</div>
				<div class="row" >
						<div class="col-2" >
						<strong>Placa:</strong>
						</div>
						<div class="col" >
							<input type="text" class="form-control placa" id="placa" placeholder="<?php echo $placa; ?>" value="<?php echo $placa; ?>" disabled>
						</div>
						<div class="col-2" >
							<strong>Marca/Modelo:</strong>
						</div>
						<div class="col" >
							<input type="text" class="form-control modelo" id="modelo" placeholder="<?php echo $marca; ?>" value="<?php echo $marca; ?>" disabled>
						</div>
				</div>
				<div class="row" >
						<div class="col-2" >
						<strong>Cor:</strong>
						</div>
						<div class="col" >
							<input type="text" class="form-control cor" id="cor" placeholder="<?php echo $cor; ?>" value="<?php echo $cor; ?>" disabled>
						</div>
						<div class="col-2" >
						<strong>Renavan:</strong>
						</div>
						<div class="col" >
							<input type="text" class="form-control renavan" id="renavan" placeholder="<?php echo $renavan; ?>" value="<?php echo $renavan; ?>" disabled>
						</div>
				</div>
				<div class="row" >
						<div class="col-2" >
						<strong>Proprietário: </strong></div>
						<div class="col-10" >
						<input type="text" class="form-control proprietario" id="proprietario" placeholder="<?php echo $proprietario; ?>" disabled>
						</div>
				</div>
				<div class="row" >
						<div class="col-2" >
						<strong>Telefone:</strong></div>
						<div class="col-10" >
						<input type="text" class="form-control celular" id="celular" placeholder="<?php echo $telefone; ?>" disabled>
						</div>
				</div>
			</div>
			<?php
		}
		?>
	<span><hr></span>
		<div class="resultadointerno" style="padding-top:8px">

			<div class="container" style="background:white;padding-top:0px;border:0px red solid;">

			</div>
			<div class="container osdetalhe" style="background:white;padding-top:0px;border:0px yellow dashed;">

				<table class="table table-striped table-bordered ">
				<thead>
					<tr>
						<th scope="col">Serviço</th>
						<th scope="col" class="text-right" >Valor</th>
						<th scope="col" class="text-right" ></th>
					</tr>
				</thead>
				<tbody>
					<?php
							$queryline = "SELECT * FROM `osdetalhe` WHERE `id_us`=$atuacaoId AND `cod_os`=$atuacaoOs";
							$query = mysql_query($queryline);
							$restult = mysql_num_rows($query);

							while($db = mysql_fetch_array($query)){
								$osIdUsuario = $db['id_us'];
								$cod_os = $db['cod_os'];
								$osIdServ = $db['id_serv'];
								$osServico = $db['servico'];
								$osQuantidade = $db['quantidade'];
								$osValor = $db['valor'];
					?>
						<input type="hidden" value="<?php echo $osIdUsuario ?>" class="osusuario">
						<input type="hidden" value="<?php echo $cod_os ?>" class="oscod">
					<tr>
						<th scope="row"><?php echo $osServico; ?></th>
						<th class="text-right"><?php echo "R$".$osValor; ?></th>
						<td class="text-right"><button value="<?php echo $osIdServ; ?>" class="btn btn-link retirar" active> - </button></td>
					</tr>
					<?php
						}
						$querysoma = "SELECT SUM(valor) AS 'geral' FROM `osdetalhe` WHERE `id_us`=$atuacaoId AND `cod_os`=$atuacaoOs";
						$soma = mysql_query($querysoma);
						while($dba = mysql_fetch_array($soma)){
							$geral = $dba['geral'];
						}
					?>
					<tr>
						<th scope="row"></th>
						<th class="text-right" >Total: R$ <?php echo $geral; ?></th>
						<th class="text-left"></th>
					</tr>
				</tbody>
			</table>
			</div>

		</div>
		<br>
			<input type="hidden" class="idusuario" value="<?php echo $atuacaoId; ?>" >
		<?php

	}
	?>
		<div class="container manipulador no-print">
			<div class="row">
				<div class="col-6">


						<input type="text" class="form-control col-10 servico" id="servico" placeholder="Serviço">
				</div>
				<div class="col">
						<input type="text" class="form-control valor" id="valor" placeholder="Valor">
				</div>
				<div class="col">
					<button class="btn btn-outline-<?php echo $corMenuAdm; ?> inluir" >Incluir Serviço</button>

				</div>
				<div class="col" >
							<button class="btn btn-outline-<?php echo $corMenuAdm; ?> print" active> Print </button>
				</div>
				<!--div class="col" >
							<button class="btn btn-outline-<?php echo $corMenuAdm; ?> salvar" active> Gravar </button>
				</div-->
			</div>
		</div>
	</div>
