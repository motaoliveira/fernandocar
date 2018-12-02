<script src="editaros.js" type="text/javascript"></script>
<?php
	include('globais.php');
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
		$atuacaoId = $banco['atuacao'];
	}
	?>
	<?php
	$sql = "SELECT * FROM `cliente` WHERE `id` = $atuacaoId";
	$rsd = mysql_query($sql);
	//echo "entrou aqui";
	while ($banco = mysql_fetch_assoc($rsd))
	{
	//echo "entrou aqui";
		$clientID = $banco["id"];
	}
		?>
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
						$queryline = "SELECT * FROM `ordserv` WHERE `id_us`=$clientID ORDER BY `id` DESC";
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
		      <td><button class="btn btn-outline-<?php echo $corMenuAdm; ?> deletaross" value="<?php echo $osCodigo; ?>"  >Delete 1</button></td>
					<td><button class="btn btn-outline-<?php echo $corMenuAdm; ?> editaross" value="<?php echo $osCodigo; ?>"  >Editar 2</button></td>
		    </tr>
				<?php
			}
				?>

		  </tbody>
		</table>
		<?php
	}
		?>
