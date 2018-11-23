<?php
	// session_start();
	// include('protect.php');
	// include('globais.php');
	//include('conect.php');
	//print_r($_POST);
	// $insRodape = $_POST['insRodape'];
	// echo $insRodape; /*
	// $sql = "UPDATE `configurar` SET `configRodape` = '$insRodape' WHERE `configurar`.`id` = 1;";
		// if(true){
		 // mysql_query($sql);
			// echo "Rodapé alterado com sucesso!";
					 	// header( "location: pagina_principal.php" );	
		 	// }
//*/
	$c = $_POST["c"];
	$f = $_POST["f"];
	
	
	$sqlConsult = "SELECT * FROM `prodconfig` WHERE `prodCat` = $c AND `prodSub` = $f";
	echo $c;
	echo $f;
	
	while($confProd = mysql_fetch_array($sqlConsult)){
		
		
		
		
	}
	
 ?>
						<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" >
								<br />
								<div class="form-group">
									<input class="form-control theme-secondary " type="text" id="newName"  placeholder="Nome do Produto">
								</div>
							
						</div>	
						
							<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12" >
									<div class="form-group" class="col-md-10  col-lg-10 col-sm-12 col-xs-12">
										<input type="file" name="example" class="btn btn-default btn-block " id="input">
									</div>
							</div>
							
							<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
									<div class="form-group" >
										<input type="file" name="example" class="btn btn-default btn-block " id="input01">
									</div>
							</div>
							
							<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<input type="file" name="example" class="btn btn-default btn-block " id="input02">
									</div>
							</div>
							
							<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<input type="file" name="example" class="btn btn-default btn-block " id="input03">
									</div>
							</div>
							
							<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
								<div class="form-group">
										<input class="form-control theme-secondary " type="text" id="preco"  placeholder="Preço">
								</div>
							</div>
							
							<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
								<div class="form-group">
										<input class="form-control theme-secondary " type="text" id="descri"  placeholder="Descrição">
								</div>
							</div>
							
							<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
								<div class="form-group">
										<input class="form-control theme-secondary " type="text" id="especi"  placeholder="Especificações">
								</div>
							</div>
							
							<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
								<div class="form-group">
										<input class="form-control theme-secondary " type="text" id="juros"  placeholder="Juros">
								</div>
							</div>
							
							<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
								<div class="form-group">
										<input class="form-control theme-secondary " type="text" id="largura"  placeholder="Largura">
								</div>
							</div>
							
							<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
								<div class="form-group">
										<input class="form-control theme-secondary " type="text" id="altura"  placeholder="Altura">
								</div>
							</div>
							
							<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
								<div class="form-group">
										<input class="form-control theme-secondary " type="text" id="profundidade"  placeholder="Profundidade">
								</div>
							</div>
							
							<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
								<div class="form-group">
										<input class="form-control theme-secondary " type="text" id="precoAnt"  placeholder="Preço Anterior">
								</div>
							</div>
							
							<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
								<div class="form-group">
										<input class="form-control theme-secondary " type="text" id="divisao"  placeholder="Preço Dividido">
								</div>
							</div>
							
							<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
								<div class="form-group">
										<input class="form-control theme-secondary " type="text" id="economia"  placeholder="Economia de">
								</div>
							</div>
							
							<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
								<div class="form-group">
										<input class="form-control theme-secondary " type="text" id="divide"  placeholder="Quantidade de vezes dividido">
								</div>
							</div>
							
							<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
								<div class="form-group">
										<input class="form-control theme-secondary " type="text" id="fabri"  placeholder="Fabricação">
								</div>
							</div>
							
							<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
								<div class="form-group">
										<input class="form-control theme-secondary " type="text" id="cod"  placeholder="Código">
								</div>
							</div>
							
							<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
								<div class="form-group">
										<input class="form-control theme-secondary " type="text" id="avalia"  placeholder="Avalia">
								</div>
							</div>
							
							<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
								<div class="form-group">
										<input class="form-control theme-secondary " type="text" id="destaque"  placeholder="Destaque">
								</div>
							</div>
							
							<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
								<div class="form-group">
										<input class="form-control theme-secondary " type="text" id="lancamento"  placeholder="Lançamento">
								</div>
							</div>
							
							<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
								<div class="form-group">
										<input class="form-control theme-secondary " type="text" id="promocao"  placeholder="Promoção">
								</div>
							</div>
							
							<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
								<div class="form-group">
										<input class="form-control theme-secondary " type="text" id="compras"  placeholder="Compras">
								</div>
							</div>
							
							<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12" >
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-block" id="sendProduto" >
											<span class="glyphicon glyphicon-ok"></span> Aplicar
										</button>
									</div>
							</div>
		</div>
</div>