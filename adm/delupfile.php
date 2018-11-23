<script src="delupfile.js"></script>
<?php
	include('protect.php');
	include("globais.php");
	//var_dump($_POST);
	
	$id = $_POST['id'];
	$client = $_POST['client'];
	//$sql = "DELETE FROM `clientefile` WHERE `id` = $id AND `cliente` = $client" 
	$query = "UPDATE `clientefile` SET `view`= 0 WHERE `id` = $id AND `cliente` = $client";
	mysql_query($query);
				$sql = "SELECT * FROM `clientefile` WHERE `view` = 1 AND `cliente` = $client";
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
					<div class="col-2"><a class="btn btn-outline-success" target="blank"  href="../clientes/<?php echo $client ?>/doc/<?php echo $cliDocuent ?>">download </a></div>
					<div class="col-2"><a class="btn btn-outline-danger delupfile" id="<?php echo $cliID ?>"  name="<?php echo $client ?>" href="#"> Deletar </a></div>
				</div>
				<?php
					if($cor == "white"){$cor = "#fcfcfc";}else{$cor="white";}
			}
	?>