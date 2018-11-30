<script src="principal.js" type="text/javascript"></script>
	<?php
		include('protect.php');
		include('globais.php');
		//print_r($_POST);
		@$id = trim($_POST['nomeCliente']);
		echo $id."<br>";

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
			$nomedigitado = $banco['atuacao'];
		}
	?>
<div class="col-12" style="text-align:center"><h4>Resultado da Busca por <strong><?php echo $nomedigitado; ?></strong></h4></div>
<?php
		$sqline = "SELECT * FROM `cliente` WHERE `nome` LIKE '%$nomedigitado%' ";
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
						 <p><strong>CPF/CNPJ:</strong> <?php echo $clientNumero;?> id: <?php echo $clientID;?> </p>
						 <button type="submit" id="<?php echo $clientBut; ?>"  value="<?php echo $clientID; ?>" class="btn  btn-outline-<?php echo $corMenuAdm; ?> ltn"><i class="fa fa-trash" aria-hidden="true"></i> Deletar </button>
						 <button  value="<?php echo $clientID; ?>" class="btn  btn-outline-<?php echo $corMenuAdm; ?> editar"><i class="fa fa-pencil" aria-hidden="true"></i> Atualizar </button>
						 <button  value="<?php echo $clientID; ?>" class="btn  btn-outline-<?php echo $corMenuAdm; ?> upload"><i class="fa fa-pencil" aria-hidden="true"></i>Documentos</button>
						 <button  value="<?php echo $clientID; ?>" class="btn  btn-outline-<?php echo $corMenuAdm; ?> oscriar"><i class="fa fa-pencil" aria-hidden="true"></i> Criar OS</button>
						 <button  value="<?php echo $clientID; ?>" class="btn btn-outline-<?php echo $corMenuAdm; ?> listaros"><i class="fa fa-pencil" aria-hidden="true"></i>Listar OS	</button>

					 </div>
		 </div>
		 <!-- /.row -->
 <div><hr></div>
		 <?php  }
		 }
		   ?>
