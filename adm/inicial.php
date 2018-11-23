<?php 
	session_start(); 
	//include('../conect.php');
	include('globais.php');
	
		/*echo $corMenuAdm;*/ if($corMenuAdm=="secundary"){
		$corMenuAdm = "default";
		//echo $corMenuAdm;
	} 
?>
<div class="alert alert-dismissable" id="hom">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h3> Olá!<strong> <?php  echo($_SESSION['nome_session']) 
  //print_r($_SESSION); ?></strong></h3>
  <p>Seja bem vindo ao administrador intuitivo Isas Web Plus. Nós da Voxa desejamos que sua experiência seja a melhor possível.</p>
</div>
<div class="row">
	<!-- 10 Produtos Mais visitados na loja !-->
	<div class="col-3">	
			<div class="card"  align="center">
				<div class="card-header"   > <h5>Projetos na Base</h5>
				</div>
				  <!-- List group -->
				<div class="card-block"  >		
					<?php 
					$selectProd = "SELECT * FROM `projeto`";
					$queryQtd = mysql_query($selectProd);
					$produtos= mysql_num_rows($queryQtd);
					//echo $produtos; ?>
					<h3 class="statcard-number"><?php echo $produtos; ?></h3>		
				</div>	
			</div> 
			
			<div class="card"  align="center">
					<div class="card-header" > <h5>Views de Projetos</h5></div>
							  <!-- List group -->
					<div class="card-block" >		   
						<?php 
						$selectProd = "SELECT * FROM `projeto`";
						$queryQtd = mysql_query($selectProd);
						
						$produtos= mysql_num_rows($queryQtd);
						$res = 0;
						while($ttt = mysql_fetch_array($queryQtd)){
							$vews = $ttt["view"];
							$res +=$vews;
						}
						?>
						<h3 class="statcard-number"><?php echo $res; ?></h3>
					</div>	
			</div>
	</div>

	<!-- 10 Produtos Mais visitados na loja !-->
	
	<div class="col-9">
		<div class="card " >
			<div class="card-header" id="desmais"><h4>Os dez Projetos mais visitados</h4></div>
				  <!-- List group -->
				  <div class="card-block">
					 
					   <?php
					   // SELECT * FROM `produto` ORDER BY `prodView` DESC
					   
						$svl = "SELECT * FROM `projeto` ORDER BY `view` DESC LIMIT 0 , 10";
						$qwert = mysql_query("$svl");
						
						
						while($dbp = mysql_fetch_array($qwert)){
							
					   $prodview = $dbp['titulo'];
					   ?>
						<?php echo $prodview; ?>
						<hr>
						<?php
						}
						?>
					 
				</div>
		</div>
	</div>
</div>
