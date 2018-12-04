<?php
		include('protect.php');
		include('globais.php');
		@$id = $_POST['id'];
		if(@$_POST){
			print_r($_POST);
			$delete = mysql_query("DELETE FROM `ordserv` WHERE `cod_os` = $id");
			$delete2 = mysql_query("DELETE FROM `osdetalhe` WHERE `cod_os` = $id");
			$afect = mysql_affected_rows();
			print_r($delete);
		}
		else{
			$sql = "SELECT * FROM `edicao` WHERE `id`=1";
			$query = mysql_query($sql);
			while ($banco = mysql_fetch_assoc($query))
			{
				$atuacaoId = $banco['atuacao'];
			}
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
		 				}
						  ?>
<!-- Resultados apos deletar  -->
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
      <td><button class="btn btn-outline-<?php echo $corMenuAdm; ?> deletaros" value="<?php echo $osCodigo; ?>"  >Delete</button></td>
			<td><button class="btn btn-outline-<?php echo $corMenuAdm; ?> editaross"  value="<?php echo $osCodigo; ?>"  >Editar</button></td>
    </tr>
		<?php
				}
		?>
  </tbody>
</table>
 <!-- Final de resultados internos -->
<?php
			}
				?>
