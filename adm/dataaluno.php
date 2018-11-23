	<?php
	include("conect.php");
	$per_page = 7;
	$sqlc = "show columns from aluno";
	$rsdc = mysql_query($sqlc);
	$cols = mysql_num_rows($rsdc);
	$page = $_REQUEST['page'];
	$start = ($page-1)*7; ?>

	<div class="container" >
			<div class="form-inline form-group" style="padding:30px">
				<input type="text" class="form-control col-10 nomeAluno" id="text" placeholder="Digite o nome do Aluno">
				<button type="" class="btn btn-primary buscaluno">Buscar</button>
			</div>
	</div>
	<hr>
	<span class="resultadofixo">
			<script src="javascript_cliente.js" type="text/javascript"></script>
		<?php
		$sql = "SELECT * FROM `aluno` ORDER BY `aluno`.`id` DESC LIMIT $start,7";
		$rsd = mysql_query($sql);
		//echo "entrou aqui";
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
	          <div class="col-2" >
							<img class="img-responsive img-hover"  src="../aluno/<?php echo $clientID;?>/img/<?php echo $clientBut;?>" alt="" style="height:140px">
	          </div>
	          <div class="col-8" style="padding-left:30px">
								<h3><?php echo $clientNome;?></h3>
								<p><?php echo $clientCel;?></p>
								<button type="submit" id="<?php echo $clientBut; ?>"  value="<?php echo $clientID; ?>" class="btn btn-outline-danger del"><i class="fa fa-trash" aria-hidden="true"></i> Deletar </button>
								<button  value="<?php echo $clientID; ?>" class="btn btn-outline-success edtaluno"><i class="fa fa-pencil" aria-hidden="true"></i> Editar </button>
								<button  value="<?php echo $clientID; ?>" class="btn btn-outline-primary uploadaluno"><i class="fa fa-pencil" aria-hidden="true"></i> Upload Arquivos </button>
								<button  value="<?php echo $clientID; ?>" class="btn btn-outline-warning visao"><i class="fa fa-pencil" aria-hidden="true"></i> Visão Portal </button>
	          </div>
        </div>
        <!-- /.row -->
		<span><hr></span>
		<?php
	}
	?>
	 </span>
	 <span class="resultado"> </span>
