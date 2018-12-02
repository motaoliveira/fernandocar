	<?php
	include('protect.php');
	include("globais.php");
	//print_r($_POST);
	@$id = $_POST['id'];
	//@$id = $_POST['id'];
	if(@$_POST){
	mysql_query("UPDATE `edicao` SET `atuacao` = '$id' WHERE `edicao`.`id` = 1;");
	}
	else{
	//echo "carregue a id ";
	$sql = "SELECT * FROM `edicao` WHERE `id`=1";
	$query = mysql_query($sql);
	while ($banco = mysql_fetch_assoc($query))
	{
	//echo "entrou aqui";
		$atuacaoId = $banco['atuacao'];}
		// echo $atuacaoId;
	?>
	<style>
	input{
		margin:2px;
	}
	</style>
	<div class="cabecalho"  style="background:white;padding-top:0px;border:1px red dashed;">

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
		$sql = "SELECT * FROM `ordserv` WHERE `id` = (SELECT MAX(`id`) FROM `ordserv`)";
		$rsd = mysql_query($sql);
		if(!$rsd){
			$cod_os=0000;
		}else{
		while ($banco = mysql_fetch_assoc($rsd))
			{
			$cod_os = $banco["cod_os"];
			}
		}
			$cod_os++;
			$id_us = $clientID;
			$data= date('d/m/Y');
			$proprietario = $clientNome;
			$clientCel;
			mysql_query("INSERT INTO `ordserv` (`id_us`, `data_origem`, `cod_os`, `placa`, `marca`, `cor`, `renavan`, `proprietario`, `telefone`) VALUES ('$id_us', '$data', '$cod_os', NULL, NULL, NULL, NULL, '$proprietario', '$clientCel');");
			mysql_query("INSERT INTO `osdetalhe` (`id_us`, `cod_os`, `id_serv`, `servico`, `quantidade`, `valor`) VALUES ('$id_us', '$cod_os', NULL, NULL, NULL, NULL);");
		?>
			<div class="container" style="padding:8px;">
				<div class="row" >
						<div class="col-2" >
						<strong>Data:</strong>
						</div>
						<div class="col" >
							<input type="text" readonly class="form-control placa" id="placa" placeholder="<?php echo $data; ?>" value="<?php echo $data; ?>">
						</div>
						<div class="col-2" >
							<strong>Código OS:</strong>
						</div>
						<div class="col" >
							<input type="text" readonly class="form-control placa" id="placa" placeholder="<?php echo $cod_os; ?>" value="<?php echo $cod_os; ?>">
						</div>
				</div>
				<div class="row" >
						<div class="col-2" >
						<strong>Placa:</strong>
						</div>
						<div class="col" >
							<input type="text" class="form-control placa" id="placa" placeholder="Placa">
						</div>
						<div class="col-2" >
							<strong>Marca/Modelo:</strong>
						</div>
						<div class="col" >
							<input type="text" class="form-control modelo" id="modelo" placeholder="Modelo">
						</div>
				</div>
				<div class="row" >
						<div class="col-2" >
						<strong>Cor:</strong>
						</div>
						<div class="col" >
							<input type="text" class="form-control cor" id="cor" placeholder="Cor">
						</div>
						<div class="col-2" >
						<strong>Renavan:</strong>
						</div>
						<div class="col" >
							<input type="text" class="form-control renavan" id="renavan" placeholder="Renavan">
						</div>
				</div>
				<div class="row" >
						<div class="col-2" >
						<strong>Proprietário: </strong></div>
						<div class="col-10" >
						<input type="text" class="form-control placa" id="placa" placeholder="<?php echo $proprietario; ?>" value="<?php echo $proprietario; ?>">
						</div>
				</div>
				<div class="row" >
						<div class="col-2" >
						<strong>Telefone:</strong></div>
						<div class="col-10" >
						<input type="text" class="form-control placa" id="placa" placeholder="<?php echo $clientCel; ?>" value="<?php echo $clientCel; ?>">
						</div>
				</div>
			</div>
	<span><hr></span>
		<div class="resultadointerno" style="padding-top:8px">

			<div class="container arquivos" style="background:white;padding-top:0px;border:0px red solid;">
					<?php
						$sql = "SELECT * FROM `clientefile` WHERE `cliente` = $atuacaoId AND `view` = 1" ;
						$rsd = mysql_query($sql);
						$cor = "white";
					while ($banco = mysql_fetch_assoc($rsd)){
							$cliID = $banco["id"];
							$cliNome = $banco["nome"];
							$cliCargo = $banco["cargo"];
							$cliDocuent = $banco["documento"];
							$cliView = $banco["view"];
							$cliObs = $banco["obs"];
							$client = $banco["cliente"];
					}

					?>
			</div>
			<div class="container osdetalhe" style="background:white;padding-top:0px;border:0px yellow dashed;">
					<script src="incluir.js"></script>
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
							$queryline = "SELECT * FROM `osdetalhe` WHERE `id_us`=$clientID AND `cod_os`=$cod_os";
							$query = mysql_query($queryline);
							$restult = mysql_num_rows($query);

							while($db = mysql_fetch_array($query)){
								$osIdUsuario = $db['id_us'];
								$osCodigo = $db['cod_os'];
								$osIdServ = $db['id_serv'];
								$osServico = $db['servico'];
								$osQuantidade = $db['quantidade'];
								$osValor = $db['valor'];
					?>
						<input type="hidden" value="<?php echo $osIdUsuario ?>" class="osusuario">
						<input type="hidden" value="<?php echo $osCodigo ?>" class="oscod">
					<tr>
						<th scope="row"><?php echo $osServico; ?></th>
						<th class="text-right" ><?php if(!$osValor){echo "R$".$osValor;} ?></th>
						<td class="text-right" ><button value="<?php echo $osIdServ; ?>" class="btn btn-link retirar" active> - </button></td>
					</tr>
					<?php
						}

						$querysoma = "SELECT SUM(valor) AS 'geral' FROM `osdetalhe` WHERE `id_us`=$osIdUsuario AND `cod_os`=$osCodigo";
						$soma = mysql_query($querysoma);
						$resultb = mysql_num_rows($soma);

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
			<?php
		}
		?>
		</div>
		<br>
		<div class="container">
			<div class="row">
				<div class="col-4">
						<input type="text" class="form-control col-10 servico" id="servico" placeholder="Serviço">
				</div>
				<div class="col">
						<p><input type="text" class="form-control valor" id="valor" placeholder="Valor"></p>
				</div>
				<div class="col">
					<button class="btn btn-outline-<?php echo $corMenuAdm; ?> inluir" >Incluir Serviço</button>

				</div>
				<div class="col" >
							<button class="btn btn-outline-<?php echo $corMenuAdm; ?> retirar" active> Print </button>
				</div>
				<div class="col" >
							<button class="btn btn-outline-<?php echo $corMenuAdm; ?> salvar" active> salvar </button>
				</div>
			</div>
		</div>
	</div>
