<?php
	include('protect.php');
	include('conect.php');
	//print_r($_POST);
	@$atuacaoId = $_POST['id'];

	if(@$_POST){
	mysql_query("UPDATE `edicao` SET `atuacao` = '$atuacaoId' WHERE `edicao`.`id` = 1;");
	}
	else{
	//echo "carregue a id ";
	$sql = "SELECT * FROM `edicao` WHERE `id`=1";
	$query = mysql_query($sql);
	while ($banco = mysql_fetch_assoc($query))
	{
	//echo "entrou aqui";
		$atuacaoId = $banco['atuacao'];}
		//echo $atuacaoId;
	?>
	<script src="interno.js" type="text/javascript"></script>

	<span class="resultadofixo" >
	<?php
	//echo $atuacaoId;
	$sql = "SELECT * FROM `cliente` WHERE `id` = $atuacaoId";

	$rsd = mysql_query($sql);
	//echo "entrou aqui";
	while ($banco = mysql_fetch_assoc($rsd))
	{
	//echo "entrou aqui";
		$clientID = $banco["id"];
		$clientNome = $banco["nome"];
		$clientNumero = $banco["numero"];
		mysql_query("INSERT INTO `ordserv` (`id_us`, `data_origem`, `cod_os`, `placa`, `marca`, `cor`, `renavan`, `proprietario`, `telefone`) VALUES ('$clientID ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);");
		mysql_query("INSERT INTO `osdetalhe` (`id_us`, `cod_os`, `servico`, `quantidade`, `valor`) VALUES ('$clientID', NULL, NULL, NULL, '0.00');");
	?>

     <!-- Atuação  -->
        <div class="row" style="background:white;padding:12px">
						<div class="col-12" >
							<span class="spandate"><?php //echo $clientLog;?></span>
						</div>
            <div class="col-4">
								<img class="img-responsive img-hover"  src="../image/logofcarorc.png?>" alt="" style="height:140px">
            </div>
            <div class="col-7" style="background:white;padding:12px" >
							<h2><strong>FC FernandoCar</strong></h2>
							<p style="font-size:18px">Documentos - Consultas e Serviços<br>
								<strong>Endereço:</strong> Avenida Maria Quitéria, n.º 3178<br>
									<strong>Cidade:</strong> Feira de Santana 	<strong>CEP:</strong>440100.000<br>
										<strong>Telefones:</strong> (75) 3225-7579 / (75) 991751233
							</p>
            </div>
        </div>
      <!-- /.row -->

		 <?php
	}

	?>
	 <hr>
	 <div class="container" style="background:white;padding:12px">
			<h4> Ordem de Serviço 2 </h4>
			<hr>
			<div class="row" style="background:black;padding:12px;color:white">
				<div class="col-8" >
				<label>Nome</label>
				</div>
				<div class="col-4" >
				<label>Download</label>
				</div>

			</div>
		</div>
	<div class="container arquivos" style="background:white;padding-top:0px">

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
				?>

				<div class="row" style="padding:4px; background-color:<?php echo $cor; ?>;">
					<div class="col-8"><?php echo $cliNome ?></div>
					<div class="col-4"><a class="btn btn-outline-<?php echo $corMenuAdm; ?>" target="blank" href="../clientes/<?php echo $client ?>/doc/<?php echo $cliDocuent ?>">download </a></div>

				</div>
				<?php
					if($cor == "white"){$cor = "#fcfcfc";}else{$cor="white";}
			}

				}
			?>
	</div>
