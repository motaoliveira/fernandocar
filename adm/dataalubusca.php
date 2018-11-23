<script src="javascript_cliente.js" type="text/javascript"></script>
	<?php
	include('protect.php');
	include('conect.php');
	$nomedigitado = trim($_POST['nomeAluno']);

	//echo $nomedigitado."<br>";

	$sqline = "SELECT * FROM `aluno` WHERE `nome` LIKE '%$nomedigitado%'";

	//echo $sqline;
	$resolva  = mysql_query($sqline);


	while ($banco = mysql_fetch_array($resolva))
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


	<div class="col-12" style="text-align:center"><h4>Resultado da Busca por <strong><?php echo $nomedigitado; ?></strong></h4></div>
	<!-- Atuação  -->
        <div class="row" style="padding:4px;background:white">

			<div class="col-12" >
				<span class="spandate"><?php echo $clientLog;?></span>
			</div>
            <div class="col-2" >

				<img class="img-responsive img-hover"  src="../clientes/<?php echo $clientID;?>/img/<?php echo $clientBut;?>" alt="" style="height:140px">
            </div>
            <div class="col-8" style="padding-left:30px">
				<h3><?php echo $clientNome;?></h3>
				<p><?php echo $clientCel;?></p>
				<button type="submit" id="<?php echo $clientBut; ?>"  value="<?php echo $clientID; ?>" class="btn btn-outline-danger ltn"><i class="fa fa-trash" aria-hidden="true"></i> Deletar </button>
				<button  value="<?php echo $clientID; ?>" class="btn btn-outline-success edt"><i class="fa fa-pencil" aria-hidden="true"></i> Editar </button>
				<button  value="<?php echo $clientID; ?>" class="btn btn-outline-primary upload"><i class="fa fa-pencil" aria-hidden="true"></i> Upload Arquivos</button>

				<button  value="<?php echo $clientID; ?>" class="btn btn-outline-warning visao"><i class="fa fa-pencil" aria-hidden="true"></i> Visão Portal</button>
            </div>
        </div>
        <!-- /.row -->
		 <hr>
		 <?php  }  ?>
