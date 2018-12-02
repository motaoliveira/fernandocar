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
	<!--script src="interno.js" type="text/javascript"></script-->
	<script src="incluir.js"></script>
	<span class="resultadofixo" >
			<?php
				$sql = "SELECT * FROM `cliente` WHERE `id` = $atuacaoId";
				$rsd = mysql_query($sql);
					//echo "entrou aqui";
				while ($banco = mysql_fetch_assoc($rsd))
				{
					//echo "entrou aqui";
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
					 <div class="col-2" >
							 <img class="img-responsive img-hover"  src="../clientes/<?php echo $clientID;?>/img/<?php echo $clientBut;?>" alt="" style="height:140px">
					 </div>
					 <div class="col-8" style="padding-left:30px">
						 <h3><strong><?php echo $clientNome;?></strong></h3>
						 <p><strong>CPF/CNPJ:</strong> <?php echo $clientNumero;?></p>
						 <!--button type="submit" id="<?php echo $clientBut; ?>"  value="<?php echo $clientID; ?>" class="btn btn-outline-danger ltn"><i class="fa fa-trash" aria-hidden="true"></i> Deletar </button-->
						 <button  value="<?php echo $clientID; ?>" id=""  class="btn btn-outline-<?php echo $corMenuAdm; ?> editarinterno"><i class="fa fa-pencil" aria-hidden="true"></i> Atualizar </button>
						 <button  value="<?php echo $clientID; ?>" class="btn btn-outline-<?php echo $corMenuAdm; ?> uploadinterno"><i class="fa fa-pencil" aria-hidden="true"></i>Documentos</button>
						 <button  value="<?php echo $clientID; ?>" class="btn btn-outline-<?php echo $corMenuAdm; ?> ordeminterno"><i class="fa fa-pencil" aria-hidden="true"></i>Criar OS	</button>
						  <button  value="<?php echo $clientID; ?>" class="btn btn-outline-<?php echo $corMenuAdm; ?> listaros"><i class="fa fa-pencil" aria-hidden="true"></i>Listar OS	</button>
					 </div>
		 </div>
		 <!-- /.row -->
		 	<?php } ?>
	<span><hr></span>
		<div class="resultadointerno" style="background:white;padding-top:0px;border:0px green dashed;">
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
							$queryline = "SELECT * FROM `osdetalhe` WHERE `id_us`=$clientID";
							$query = mysql_query($queryline);
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
						<th class="text-right" >R$ <?php echo $osValor; ?></th>
						<td class="text-right" ><button value="<?php echo $osIdServ; ?>" class="btn btn-outline-danger retirar" active> - </button></td>
					</tr>
					<?php
						}
						$querysoma = "SELECT SUM(valor) AS 'geral' FROM `osdetalhe` WHERE `id_us`=$osIdUsuario AND `cod_os`=$osCodigo";
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
			<?php
		}
		?>
		</div>

		<div class="container">
			<div class="row">
				<div class="col">
						<input type="text" class="form-control col-10 servico" id="servico" placeholder="Serviço">
				</div>
				<div class="col">
						<p><input type="text" class="form-control valor" id="valor" placeholder="Valor"></p>
				</div>
				<div class="col">
					<button class="btn btn-outline-<?php echo $corMenuAdm; ?> inluir" >Incluir Serviço</button>

				</div>
				<div class="col" >
							<button class="btn btn-outline-danger retirar" active> Print </button>
				</div>
			</div>
		</div>
	</span>
