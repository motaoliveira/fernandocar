<?php
			include('protect.php');
			include("globais.php");

				@$osusuario = $_POST['osusuario'];
				@$oscod = $_POST['oscod'];
				@$servico = $_POST['servico'];
				@$valor = $_POST['valor'];
			if($_POST)
			{
				mysql_query("UPDATE `edicao` SET `atuacao` = '$osusuario', `projeto` = '$oscod' WHERE `edicao`.`id` = 1;");
				mysql_query("INSERT INTO `osdetalhe` (`id_us`, `cod_os`, `id_serv`, `servico`, `quantidade`, `valor`) VALUES ('$osusuario', '$oscod', '', '$servico', NULL, '$valor');");
			}
			else
			{
				$sqline = "SELECT * FROM `edicao` WHERE `id`=1";
				$queryon = mysql_query($sqline);
			while ($dbank = mysql_fetch_assoc($queryon))
			{
				$osus = $dbank['atuacao'];
				$osco= $dbank['projeto'];
			}



	?>


		<table class="table table-striped">
		<thead>
			<tr>
				<th scope="col">Serviço</th>
				<th scope="col" class="text-right" >Valor</th>
				<th scope="col" >Valor</th>
			</tr>
		</thead>
		<tbody>
			<?php
					print_r($_POST);
					echo $osus;
					$queryline = "SELECT * FROM `osdetalhe` WHERE `id_us` = $osus AND `cod_os` LIKE '$osco'";
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

	<?php
}
	?>
