<?php
	 session_start();
	 include('protect.php');
	 include('globais.php');

	// print_r($_POST);

	$c = $_POST["c"];
	$f = $_POST["f"];


	$sqline = "SELECT * FROM `produto` WHERE `prodCat` = $c AND `prodSub` = $f ORDER BY `id` ASC";

	$sqlConsult = mysql_query($sqline);
	?>
	<form>

	<?php
	// $zeroLine = mysql_num_rows("$sqline");

	/*if($zeroLine==0){
		echo $zeroLine;
		echo "Nenhum produto inserido na Família selecionada";

	}else{*/
	$st = 1;
			while($confProd = mysql_fetch_array($sqlConsult)){
				$idd=$confProd['id'];
				$nomeProd=$confProd['prodNome'];
				$prodImg=$confProd['prodImage0'];

				?>
				<div class="row" style="margin-top:6px;border:1px whitesmoke solid;padding:12px;background-color:<?php
				if($st%2){
					echo "whitesmoke";
				}else{
					echo "white";
				}

				?>">

					<div class="col-md-3  col-lg-3 col-sm-3 col-xs-3">
						<img style="" src="upload/<?php echo $prodImg; ?>"  class="img-thumbnail" alt="">
					</div>
					<div class="col-md-5  col-lg-5 col-sm-5 col-xs-5" style="margin-top:25px">
					<h4>
					<?php echo $nomeProd; ?>
					</h4>
					</div>
					<div class="col-md-2  col-lg-2 col-sm-2 col-xs-2" style="margin-top:50px">
					<a class="btn btn-block btn-<?php echo $corMenuAdm; ?>" id="edit">Editar</a>
					</div>
					<div class="col-md-2  col-lg-2 col-sm-2 col-xs-2" style="margin-top:50px">
					<a class="btn btn-block btn-<?php echo $corMenuAdm; ?>" id="delet">Deletar</a>
					</div>

				</div>

				<?php
				$st++;
		}
		/*
	}*/
?>
</form>
