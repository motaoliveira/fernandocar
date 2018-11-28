<?php
	 session_start();
	 include('protect.php');
	 include('globais.php');

	 print_r($_POST);






	$c = $_POST["c"];
	$f = $_POST["f"];


	$sqline = "SELECT * FROM `prodconfig` WHERE `prodCat` = $c AND `prodSub` = $f";

	$sqlConsult = mysql_query($sqline);

	// echo $c;
	// echo $f;

	while($confProd = mysql_fetch_array($sqlConsult)){

		$prodCat = $confProd['prodCat'];
		$prodSub = $confProd['prodSub'];
		$prodNome = $confProd['prodNome'];
		$prodPrice = $confProd['prodPrice'];
		$prodImage0 = $confProd['prodImage0'];
		$prodImage1 = $confProd['prodImage1'];
		$prodImage2 = $confProd['prodImage2'];
		$prodImage3 = $confProd['prodImage3'];
		$prodDescri = $confProd['prodDescri'];
		$prodEspecifi = $confProd['prodEspecifi'];
		$prodJuros = $confProd['prodJuros'];
		$prodLarg = $confProd['prodLarg'];
		$prodAlt = $confProd['prodAlt'];
		$prodProf = $confProd['prodProf'];
		$prodPriceAnt = $confProd['prodPriceAnt'];
		$prodPriceDiv = $confProd['prodPriceDiv'];
		$prodEcono = $confProd['prodEcono'];
		$prodDivi = $confProd['prodDivi'];
		$prodFabri = $confProd['prodFabri'];
		$prodCod = $confProd['prodCod'];
		$prodAvalia = $confProd['prodAvalia'];
		$prodDestaque = $confProd['prodDestaque'];
		$prodLancamento = $confProd['prodLancamento'];
		$prodNovid = $confProd['prodNovid'];
		$prodPromo = $confProd['prodPromo'];
		$prodView = $confProd['prodView'];
		$prodComp = $confProd['prodComp'];
	}
	?>




<script >
	jQuery(document).ready(function(){


				jQuery('#sendProduto').click(function(){
					var tt = $('input[name=prodNome]:checked').val();
					alert(tt);
					});
	});
</script>
				<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" >
					<!-- Linha 1 !-->
						<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="border:1px #fff dashed;background-color:<?php if($prodNome==1){echo "whitesmoke";} ?>" >
								<br>
								<label>Nome do Produto</label><br>
								<input type="radio" name="prodNome" value="1" <?php if($prodNome==1){echo "checked";} ?>>Sim
								<input type="radio" name="prodNome" value="0" <?php if($prodNome==0){echo "checked";} ?>>Não
						</div>

						<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="border:1px #fff dashed;background-color:<?php if($prodPrice==1){echo "whitesmoke";} ?>">
							<br>
								<label>Preço do Produto</label><br>
								<input type="radio" name="prodPrice" value="1" <?php if($prodPrice==1){echo "checked";} ?>>Sim
								<input type="radio" name="prodPrice" value="0" <?php if($prodPrice==0){echo "checked";} ?>>Não
						</div>

						<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="border:1px #fff dashed;background-color:<?php if($prodImage0==1){echo "whitesmoke";} ?>">
								<br>
								<label>Imagem Principal</label><br>
								<input type="radio" name="prodImage0" value="1" <?php if($prodImage0==1){echo "checked";} ?>>Sim
								<input type="radio" name="prodImage0" value="0" <?php if($prodImage0==0){echo "checked";} ?>>Não
						</div>

						<!-- Linha 2 !-->
						<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="border:1px #fff dashed;background-color:<?php if($prodImage1==1){echo "whitesmoke";} ?>" >
								<br>
								<label>Imagem Opcional 1</label><br>
								<input type="radio" name="prodImage1" value="1" <?php if($prodImage1==1){echo "checked";} ?>>Sim
								<input type="radio" name="prodImage1" value="0" <?php if($prodImage1==0){echo "checked";} ?>>Não
						</div>

						<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="border:1px #fff dashed;background-color:<?php if($prodImage2==1){echo "whitesmoke";} ?>">
							<br>
								<label>Imagem Opcional 2</label><br>
								<input type="radio" name="prodImage2" value="1" <?php if($prodImage2==1){echo "checked";} ?>>Sim
								<input type="radio" name="prodImage2" value="0" <?php if($prodImage2==0){echo "checked";} ?>>Não
						</div>

						<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="border:1px #fff dashed;background-color:<?php if($prodImage3==1){echo "whitesmoke";} ?>">
								<br>
								<label>Imagem Opcional 3</label><br>
								<input type="radio" name="prodImage3" value="1" <?php if($prodImage3==1){echo "checked";} ?>>Sim
								<input type="radio" name="prodImage3" value="0" <?php if($prodImage3==0){echo "checked";} ?>>Não
							</div>

						<!-- Linha 3 !-->
						<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="border:1px #fff dashed;background-color:<?php if($prodDescri==1){echo "whitesmoke";} ?>" >
								<br>
								<label>Descrição</label><br>
								<input type="radio" name="prodDescri" value="1" <?php if($prodDescri==1){echo "checked";} ?>>Sim
								<input type="radio" name="prodDescri" value="0" <?php if($prodDescri==0){echo "checked";} ?>>Não
						</div>

						<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="border:1px #fff dashed;background-color:<?php if($prodEspecifi==1){echo "whitesmoke";} ?>">
							<br>
								<label>Especificação</label><br>
								<input type="radio" name="prodEspecifi" value="1" <?php if($prodEspecifi==1){echo "checked";} ?>>Sim
								<input type="radio" name="prodEspecifi" value="0" <?php if($prodEspecifi==0){echo "checked";} ?>>Não
						</div>

						<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="border:1px #fff dashed;background-color:<?php if($prodJuros==1){echo "whitesmoke";} ?>">
								<br>
								<label>Juros</label><br>
								<input type="radio" name="prodJuros" value="1" <?php if($prodJuros==1){echo "checked";} ?>>Sim
								<input type="radio" name="prodJuros" value="0" <?php if($prodJuros==0){echo "checked";} ?>>Não
						</div>

						<!-- Linha 4 !-->
						<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="border:1px #fff dashed;background-color:<?php if($prodLarg==1){echo "whitesmoke";} ?>" >
								<br>
								<label>Largura</label><br>
								<input type="radio" name="prodLarg" value="1" <?php if($prodLarg==1){echo "checked";} ?>>Sim
								<input type="radio" name="prodLarg" value="0" <?php if($prodLarg==0){echo "checked";} ?>>Não
						</div>

						<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="border:1px #fff dashed;background-color:<?php if($prodAlt==1){echo "whitesmoke";} ?>">
							<br>
								<label>Altura</label><br>
								<input type="radio" name="prodAlt" value="1" <?php if($prodAlt==1){echo "checked";} ?>>Sim
								<input type="radio" name="prodAlt" value="0" <?php if($prodAlt==0){echo "checked";} ?>>Não
						</div>

						<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="border:1px #fff dashed;background-color:<?php if($prodProf==1){echo "whitesmoke";} ?>">
								<br>
								<label>Profundidade</label><br>
								<input type="radio" name="prodProf" value="1" <?php if($prodProf==1){echo "checked";} ?>>Sim
								<input type="radio" name="prodProf" value="0" <?php if($prodProf==0){echo "checked";} ?>>Não
						</div>

						<!-- Linha 5 !-->
						<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="border:1px #fff dashed;background-color:<?php if($prodPriceAnt==1){echo "whitesmoke";} ?>" >
								<br>
								<label>Preço anterior</label><br>
								<input type="radio" name="prodPriceAnt" value="1" <?php if($prodPriceAnt==1){echo "checked";} ?>>Sim
								<input type="radio" name="prodPriceAnt" value="0" <?php if($prodPriceAnt==0){echo "checked";} ?>>Não
						</div>

						<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="border:1px #fff dashed;background-color:<?php if($prodPriceDiv==1){echo "whitesmoke";} ?>">
							<br>
								<label>Preço "x" Vezes dividido:</label><br>
								<input type="radio" name="prodPriceDiv" value="1" <?php if($prodPriceDiv==1){echo "checked";} ?>>Sim
								<input type="radio" name="prodPriceDiv" value="0" <?php if($prodPriceDiv==0){echo "checked";} ?>>Não
						</div>

						<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="border:1px #fff dashed;background-color:<?php if($prodEcono==1){echo "whitesmoke";} ?>">
								<br>
								<label>Economia de:</label><br>
								<input type="radio" name="prodEcono" value="1" <?php if($prodEcono==1){echo "checked";} ?>>Sim
								<input type="radio" name="prodEcono" value="0" <?php if($prodEcono==0){echo "checked";} ?>>Não
						</div>
						<!-- Linha 6 !-->
						<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="border:1px #fff dashed;background-color:<?php if($prodDivi==1){echo "whitesmoke";} ?>" >
								<br>
								<label>Tipo de Material</label><br>
								<input type="radio" name="prodDivi" value="1" <?php if($prodDivi==1){echo "checked";} ?>>Sim
								<input type="radio" name="prodDivi" value="0" <?php if($prodDivi==0){echo "checked";} ?>>Não
						</div>

						<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="border:1px #fff dashed;background-color:<?php if($prodFabri==1){echo "whitesmoke";} ?>">
							<br>
								<label>Dados Fabricação</label><br>
								<input type="radio" name="prodFabri" value="1" <?php if($prodFabri==1){echo "checked";} ?>>Sim
								<input type="radio" name="prodFabri" value="0" <?php if($prodFabri==0){echo "checked";} ?>>Não
						</div>

						<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="border:1px #fff dashed;background-color:<?php if($prodCod==1){echo "whitesmoke";} ?>">
								<br>
								<label>Código Fabricação</label><br>
								<input type="radio" name="prodCod" value="1" <?php if($prodCod==1){echo "checked";} ?>>Sim
								<input type="radio" name="prodCod" value="0" <?php if($prodCod==0){echo "checked";} ?>>Não
						</div>
						<!-- Linha 7 !-->
						<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="border:1px #fff dashed;background-color:<?php if($prodAvalia==1){echo "whitesmoke";} ?>" >
								<br>
								<label>Avaliação do Produto</label><br>
								<input type="radio" name="prodAvalia" value="1" <?php if($prodAvalia==1){echo "checked";} ?>>Sim
								<input type="radio" name="prodAvalia" value="0" <?php if($prodAvalia==0){echo "checked";} ?>>Não
						</div>

						<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="border:1px #fff dashed;background-color:<?php if($prodFabri==1){echo "whitesmoke";} ?>">
							<br>
								<label>Produto em Destaque</label><br>
								<input type="radio" name="prodDestaque" value="1" <?php if($prodFabri==1){echo "checked";} ?>>Sim
								<input type="radio" name="prodDestaque" value="0" <?php if($prodFabri==0){echo "checked";} ?>>Não
						</div>

						<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="border:1px #fff dashed;background-color:<?php if($prodLancamento==1){echo "whitesmoke";} ?>">
								<br>
								<label>Produto Lançamento</label><br>
								<input type="radio" name="prodLancamento" value="1" <?php if($prodLancamento==1){echo "checked";} ?>>Sim
								<input type="radio" name="prodLancamento" value="0" <?php if($prodLancamento==0){echo "checked";} ?>>Não
						</div>
						<!-- Linha 8 !-->
						<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="border:1px #fff dashed;background-color:<?php if($prodNovid==1){echo "whitesmoke";} ?>" >
								<br>
								<label>Produto Novidade</label><br>
								<input type="radio" name="prodNovid" value="1" <?php if($prodNovid==1){echo "checked";} ?>>Sim
								<input type="radio" name="prodNovid" value="0" <?php if($prodNovid==0){echo "checked";} ?>>Não
						</div>




				</div>

				<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12" >
						<div class="form-group">
										<br>

							<button type="submit" class="btn btn-<?php echo $corMenuAdm; ?> btn-block" id="sendProduto" >
								<span class="glyphicon glyphicon-ok"></span> Aplicar
							</button>
						</div>
				</div>
		</div>
</div>
