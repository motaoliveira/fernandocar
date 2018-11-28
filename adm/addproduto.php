<?php
	 session_start();
	 include('protect.php');
	 include('globais.php');

	print_r($_POST);

	$c = $_POST["c"];
	$f = $_POST["f"];


	$sqline = "SELECT * FROM `prodconfig` WHERE `prodCat` = $c AND `prodSub` = $f";

	$sqlConsult = mysql_query($sqline);

	echo $c;
	echo $f;

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


 <form>

			<?php
						if(@!$prodNome){}else{
			?>
						<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" >
								<br />
								<div class="form-group">
									<input class="form-control theme-secondary " type="text" id="newName"  placeholder="Nome do Produto">
								</div>

						</div>
						<?php
						}
						?>

			<?php
						if(@!$prodImage0){}else{
			?>
						<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12" >
								<div class="form-group" class="col-md-10  col-lg-10 col-sm-12 col-xs-12">
									<input type="file" name="example" class="btn btn-default btn-block " id="input">
								</div>
						</div>
						<?php
						}
						?>
			<?php
						if(@!$prodImage1){}else{
			?>
						<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
								<div class="form-group" >
									<input type="file" name="example" class="btn btn-default btn-block " id="input01">
								</div>
						</div>
						<?php
						}
						?>
			<?php
						if(@!$prodImage2){}else{
			?>
						<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
								<div class="form-group">
									<input type="file" name="example" class="btn btn-default btn-block " id="input02">
								</div>
						</div>
						<?php
						}
						?>
			<?php
						if(@!$prodImage3){}else{
			?>
						<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
								<div class="form-group">
									<input type="file" name="example" class="btn btn-default btn-block " id="input03">
								</div>
						</div>
						<?php
						}
						?>
			<?php
						if(@!$prodPrice){}else{
			?>
						<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
							<div class="form-group">
									<input class="form-control theme-secondary " type="text" id="preco"  placeholder="Preço">
							</div>
						</div>
						<?php
						}
						?>
			<?php
						if(@!$prodDescri){}else{
			?>
						<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
							<div class="form-group">
									<input class="form-control theme-secondary " type="text" id="descri"  placeholder="Descrição">
							</div>
						</div>
						<?php
						}
						?>
			<?php
						if(@!$prodEspecifi){}else{
			?>
						<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
							<div class="form-group">
									<input class="form-control theme-secondary " type="text" id="especi"  placeholder="Especificações">
							</div>
						</div>
						<?php
						}
						?>
			<?php
						if(@!$prodJuros){}else{
			?>
						<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
							<div class="form-group">
									<input class="form-control theme-secondary " type="text" id="juros"  placeholder="Juros">
							</div>
						</div>
						<?php
						}
						?>
			<?php
						if(@!$prodLarg){}else{
			?>
						<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
							<div class="form-group">
									<input class="form-control theme-secondary " type="text" id="largura"  placeholder="Largura">
							</div>
						</div>
						<?php
						}
						?>
			<?php
						if(@!$prodAlt){}else{
			?>
						<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
							<div class="form-group">
									<input class="form-control theme-secondary " type="text" id="altura"  placeholder="Altura">
							</div>
						</div>
						<?php
						}
						?>
			<?php
						if(@!$prodProf){}else{
			?>
						<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
							<div class="form-group">
									<input class="form-control theme-secondary " type="text" id="profundidade"  placeholder="Profundidade">
							</div>
						</div>
						<?php
						}
						?>
			<?php
						if(@!$prodPriceAnt){}else{
			?>
						<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
							<div class="form-group">
									<input class="form-control theme-secondary " type="text" id="precoAnt"  placeholder="Preço Anterior">
							</div>
						</div>
						<?php
						}
						?>
			<?php
						if(@!$prodPriceDiv){}else{
			?>
						<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
							<div class="form-group">
									<input class="form-control theme-secondary " type="text" id="divisao"  placeholder="Preço Dividido">
							</div>
						</div>
						<?php
						}
						?>
			<?php
						if(@!$prodEcono){}else{
			?>
						<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
							<div class="form-group">
									<input class="form-control theme-secondary " type="text" id="economia"  placeholder="Economia de">
							</div>
						</div>
						<?php
						}
						?>
			<?php
						if(@!$prodDivi){}else{
			?>
						<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
							<div class="form-group">
									<input class="form-control theme-secondary " type="text" id="divide"  placeholder="Quantidade de vezes dividido">
							</div>
						</div>
						<?php
						}
						?>
			<?php
						if(@!$prodFabri){}else{
			?>
						<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
							<div class="form-group">
									<input class="form-control theme-secondary " type="text" id="fabri"  placeholder="Fabricação">
							</div>
						</div>
						<?php
						}
						?>
			<?php
						if(@!$prodCod){}else{
			?>
						<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
							<div class="form-group">
									<input class="form-control theme-secondary " type="text" id="cod"  placeholder="Código">
							</div>
						</div>
						<?php
						}
						?>
			<?php
						if(@!$prodAvalia){}else{
			?>
						<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
							<div class="form-group">
									<input class="form-control theme-secondary " type="text" id="avalia"  placeholder="Avalia">
							</div>
						</div>
						<?php
						}
						?>
			<?php
						if(@!$prodDestaque){}else{
			?>
						<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
							<div class="form-group">
									<input class="form-control theme-secondary " type="text" id="destaque"  placeholder="Destaque">
							</div>
						</div>
						<?php
						}
						?>
			<?php
						if(@!$prodLancamento){}else{
			?>
						<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
							<div class="form-group">
									<input class="form-control theme-secondary " type="text" id="lancamento"  placeholder="Lançamento">
							</div>
						</div>
						<?php
						}
						?>
			<?php
						if(@!$prodPromo){}else{
			?>
						<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
							<div class="form-group">
									<input class="form-control theme-secondary " type="text" id="promocao"  placeholder="Promoção">
							</div>
						</div>
						<?php
						}
						?>
			<?php
						if(@!$prodComp){}else{
			?>
						<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
							<div class="form-group">
									<input class="form-control theme-secondary " type="text" id="compras"  placeholder="Compras">
							</div>
						</div>
						<?php
						}
						?>

						<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12" >
								<div class="form-group">
									<button type="submit" class="btn btn-<?php echo $corMenuAdm; ?> btn-block" id="sendProduto" >
										<span class="glyphicon glyphicon-ok"></span> Aplicar
									</button>
								</div>
						</div>

</form>
