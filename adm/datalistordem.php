<?php
		include('protect.php');
		include('globais.php');
		@$id = $_POST['id'];
		if(@$_POST){
		mysql_query("UPDATE `edicao` SET `atuacao` = '$id' WHERE `edicao`.`id` = 1;"); }
		else{
		$sql = "SELECT * FROM `edicao` WHERE `id`=1";
		$query = mysql_query($sql);
		while ($banco = mysql_fetch_assoc($query))
		{
			$atuacaoId = $banco['atuacao'];
		}
		 ?>
	<!-- Início Menu paralelo  -->
	<script src="interno.js" type="text/javascript"></script>
	<span class="resultadofixo">
		<?php
			$sq = "SELECT * FROM `cliente` WHERE `id`=$atuacaoId";
			$quer = mysql_query($sq);
			while($banco = mysql_fetch_assoc($quer)){
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
						  <button  value="<?php echo $clientID; ?>" class="btn btn-outline-<?php echo $corMenuAdm; ?> listarosinter"><i class="fa fa-pencil" aria-hidden="true"></i>Listar OS	</button>
					 </div>
		 </div>
			 <?php
		 				}
						  ?>
	<span><hr></span>
	</span>
<!-- Resultados internos carregadas  -->

<div class="resultadointerno">
	<script src="editaros.js" type="text/javascript"></script>

	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Ordem de Serviço</th>
      <th scope="col">Data</th>
      <th scope="col">Proprietário</th>
			 <th scope="col">Placa</th>
      <th scope="col">Delete</th>
			<th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
		<?php

				$queryline = "SELECT * FROM `ordserv` WHERE `id_us`=$clientID ORDER BY `cod_os` DESC";
				$query = mysql_query($queryline);
				while($db = mysql_fetch_array($query)){
					$osIdUsuario = $db['id_us'];
					$osDate = $db['data_origem'];
					$osCodigo = $db['cod_os'];
					$osPlaca = $db['placa'];
					$osMarca = $db['marca'];
					$osCor = $db['cor'];
				 	$osRenavan= $db['renavan'];
					$osProprietario = $db['proprietario'];
					$osTelefone = $db['telefone'];
		?>
    <tr>
			<th scope="row"><?php echo $osCodigo; ?></th>
      <td><?php echo $osDate; ?></td>
      <td><?php echo $osProprietario; ?></td>
			<td><?php echo $osPlaca; ?></td>
      <td><button class="btn btn-outline-<?php echo $corMenuAdm; ?> deletaros"  value="<?php echo $osCodigo; ?>">Delete</button></td>
			<td><button class="btn btn-outline-<?php echo $corMenuAdm; ?> editaross" id="<?php echo $osIdUsuario; ?>" value="<?php echo $osCodigo; ?>"  >Editar</button></td>
    </tr>
		<?php
				}
		?>

  </tbody>
</table>



 </div>
 <!-- Final de resultados internos -->
<?php
			}
				?>
