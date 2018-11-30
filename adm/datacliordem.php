
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
	<script src="interno.js" type="text/javascript"></script>
	<script src="delupfile.js"></script>
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
	<span><hr></span>
<div class="resultadointerno">
     <!-- Atuação  -->
        <div class="row" style="background:white;padding:12px">

					<div class="col-12" >
						<span class="spandate"><?php echo $clientLog;?></span>
					</div>
        </div>
        <!-- /.row -->

		 <div class="container" style="background:white;padding-top:12px;padding-botton:12px">
			 <form class="form" class="row" action="sendfile.php" method="post" accept-charset="utf-8" enctype="multipart/form-data"  >

					<div class="col-12" ><label>Nome do Documento: </label><input type="text" class="form-control" name="Nome" ></div>

					<div class="col-12" ><label>Área: </label><input type="text" class="form-control" name="Cargo"></div>

					<input type="hidden" value="<?php echo $clientID;?>" name="IdCliente">
					<div class="col-12" ><label>Escolha o Documento: </label><input type="file" name="upload" class="btn btn-default form-control"  id="uploadArquivos" style="border:1px solid #c0c0c0" multiple>
					</div>
					<div class="col-12"  style="padding:20px;" ><button type="submit" class="btn btn-outline-<?php echo $corMenuAdm; ?> btn-block" id="sendfile">
					<span class="glyphicon glyphicon-ok btn-block"></span> Enviar</button></div>
			 </form>
		 </div>
		 <span><hr></span>



	<?php } ?>
		<div class="container" style="background:white;padding:12px">
			<h4> Arquivos enviados </h4>
			<hr>
			<div class="row" style="background:black;padding:12px;color:white">
				<div class="col-8" >
				<label>Nome</label>
				</div>
				<div class="col-2" >
				<label>Download</label>
				</div>
				<div class="col-2" >
				<label>Deletar</label>
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
					<div class="col-2"><a class="btn btn-outline-<?php echo $corMenuAdm; ?>" target="blank" href="../clientes/<?php echo $client ?>/doc/<?php echo $cliDocuent ?>">download </a></div>
					<div class="col-2"><a class="btn btn-outline-<?php echo $corMenuAdm; ?> delupfile" id="<?php echo $cliID ?>" name="<?php echo $client ?>"  href="#"> Deletar </a></div>
				</div>
				<?php
					if($cor == "white"){$cor = "#fcfcfc";}else{$cor="white";}
			}
			}
			?>
	</div>
			</div>
					</span>
