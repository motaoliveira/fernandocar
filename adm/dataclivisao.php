<?php
	include('protect.php');
	include('conect.php');
	print_r($_POST);
	@$id = $_POST['visao'];

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
		echo $atuacaoId;
	?>
	<script src="javascript_cliente.js" type="text/javascript"></script>
	<h3> Visão Portal </h3>
	<hr>
	<span class="resultadofixo" >
	<?php
	echo $atuacaoId;
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
        <div class="row" style="background:white;padding:12px">
			<div class="col-12" >
				<span class="spandate"><?php echo $clientLog;?></span>
			</div>
            <div class="col-3">
				<img class="img-responsive img-hover"  src="../clientes/<?php echo $clientID;?>/img/<?php echo $clientBut;?>" alt="" style="height:140px">
            </div>
            <div class="col-9" style="background:white;padding:12px" >
				<h4><?php echo $clientNome;?></h4>
				<p><?php echo $clientCel;?></p>
            </div>
        </div>
        <!-- /.row -->

		 <?php
	}

	?>
	 <hr>
	 <div class="container" style="background:white;padding:12px">
			<h4> Arquivos enviados </h4>
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
					<div class="col-4"><a class="btn btn-outline-success" target="blank" href="../clientes/<?php echo $client ?>/doc/<?php echo $cliDocuent ?>">download </a></div>

				</div>
				<?php
					if($cor == "white"){$cor = "#fcfcfc";}else{$cor="white";}
			}

				}
			?>
	</div>
