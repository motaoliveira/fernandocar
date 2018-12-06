<?php include_once('adm/globais.php'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
		<!-- MetaTag Facebook -->
  <meta property="fb:app_id" content="1130302130402175" />
	<meta property="og:url" content="http://www.fcaremplacamentos.com.br"/>
	<meta property="og:type" content="cause" />
	<meta property="og:title" content="Fcar Emplacamentos" />
	<meta property="og:description" content="Documentos Consultas e Serviços" />
	<meta property="og:image" content="http://www.fcaremplacamentos.com.br/images/fcaremplacamentos.jpg" />
	<meta property="og:site_name" content="Serviços Empresarial e Residencial"/>
		<!-- Fim da MetaTag Facebook -->

		<!-- Início de MetaTag Twiter -->
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@fcaremplacamentos" />
	<meta name="twitter:creator" content="@fcaremplacamentos" />
	<meta name="twitter:url" content="http://www.fcaremplacamentos.com.br" />
	<meta name="twitter:title" content="Fcar Emplacamentos" />
	<meta name="twitter:description" content="Documentos Consultas e Serviços" />
	<meta name="twitter:image" content="http://www.fcaremplacamentos.com.br/images/fcaremplacamentos.jpg" />
		<!-- Fim de MetaTag Twiter -->
<head>
	<meta http-equiv="Content-Type"  content="text/html; charset=utf-8" />
	<title>Fcar</title>
	<link rel="stylesheet" href="css/fcar.css">
	<?php //include_once("analytics.php") ?>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.css">

	<script src="js/jquery.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/popper.min.js"></script>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<script src="js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
	<script src="js/bootstrap-datepicker.pt-BR.js" type="text/javascript"></script>

	<link rel="icon" href="favicon.png" type="image/png" />
  <link rel="shortcut icon" href="favicon.png" />
		<link rel="stylesheet" href="css/fcar.css">

</head>
<body>

	<div class="topo margin-carousel">
		<nav class="navbar navbar-expand-lg navbar-dark container pad" >
			<div class="abrand"  >
		  	<a class="navbar-brand" href="#">
            <img class="" src="image/logofcar.png">
        </a>
			</div>
		  <button class="navbar-toggler float-right navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
		    <ul class="navbar-nav nav-left">
		      <li class="nav-item">
		        <a class="nav-link" href="#home">Home</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#empresa">Empresa</a>
		      </li>
					<li class="nav-item">
		        <a class="nav-link" href="#servico">Serviços</a>
		      </li>
					<li class="nav-item">
					 <a class="nav-link" href="#orcamento">Orçamento</a>
				 </li>
				 <li class="nav-item">
					 <a class="nav-link" href="#localizacao">Localização</a>
				 </li>
				 <li class="nav-item">
					 <a class="nav-link" href="#contato">Contato</a>
				 </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Acesso
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		          <a class="dropdown-item" target="_blank" href="/emplacadora/adm/index.php"> Fcar Sistema</a>

		        </div>
		      </li>
		    </ul>
		  </div>
		</nav>
	</div>

		<section>
  <div class="home" id="home">
			<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
        <?php
        $active = 0;
          $categori ="SELECT * FROM `carousel`";
          $actioQuery = mysql_query($categori);
          while($act = mysql_fetch_array($actioQuery)){
            $idact = $act['id'];
            $nomeact = $act['banner'];
            $imgact = $act['img'];
            $tituloact = $act['titulo'];
            $descricaoact= $act['descricao'];
            $linkact = $act['link'];
            $ordemkact = $act['ordem'];
      ?>
					<div class="carousel-item <?php if($active==0){echo "active";} ?>">
						<img class="d-block w-100" src="image/<?php echo $imgact; ?>" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h1 class="left-banner shadow-p"><?php echo $tituloact; ?></h1>
                <p class="left texto-banner shadow-p"><?php echo $descricaoact; ?></p>
              </div>
            </div>
      <?php
      $active=1;
        }
        ?>
					<!--div class="carousel-item">
						<img class="d-block w-100" src="image/viatura-recuperada-massama-1200x480.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block ">
              <h1 class="left-banner shadow-p">Transferência de Município</h1>
              <p class="left texto-banner shadow-p">Placa placa ta tudo massa ta tudo massa ta tudo massa</p>
            </div>
          </div>

					<div class="carousel-item">
						<img class="d-block w-100" src="image/segundo-carros-cartrack-1200x480.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block ">
              <h1 class="left-banner shadow-p">Emplacamento Veícular</h1>
              <p class="left texto-banner texto-pb shadow-b">O melhor atendimento para o emplacamento de seu veículo.</p>
            </div>
          </div-->
          <!--Final Banner´s  -->
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				</div>
    </div>
		</section>



    <section>
  <div class="div-pad">
    <div class="container">
      <div class="block-black row ">
        <div class="col">
          <div class="card block-opt grey-line " style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Alterações</h5>
                <h6 class="card-subtitle mb-2 text-muted">Alterações de dados Cadastrais</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Orçamento</a>
                <a href="#" class="card-link">Onde?</a>
              </div>
          </div>
        </div>
        <div class="col">
          <div class="card block-opt grey-line " style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">2ª Via</h5>
                <h6 class="card-subtitle mb-2 text-muted">2ª Via Licenciamento ou CRV</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Orçamento</a>
                <a href="#" class="card-link">Onde?</a>
              </div>
          </div>
        </div>
        <div class="col">
          <div class="card block-opt grey-line " style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Baixas & Pesquisas</h5>
                <h6 class="card-subtitle mb-2 text-muted">Autorizações, Baixas e pesquisas</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link ">Orçamento</a>
                <a href="#" class="card-link">Onde?</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </section>



    <section>
      <div class="container-fluid empresa" style="">
      		<!-- Empresa -->
      		<div class="container" id="empresa" style="">
      			<!-- Page Heading/Breadcrumbs -->
      			<div class="container">

      				<div class="col-lg-9 col-md-9">

              <?php
                $selectQuemsomos = "SELECT * FROM `quemsomos` ORDER BY `quemsomos`.`id`=1 ";
            		$queryQuemsomos = mysql_query($selectQuemsomos);
            		$existedb = @mysql_num_rows($queryQuemsomos);
            		if($existedb != 0)
            		{
            			while($bancos = mysql_fetch_array($queryQuemsomos)){
            				$atuacaoId = $bancos["id"];
            				$atuacaoImg = $bancos["img"];
            				$atuacaoTitulo = $bancos["titulo"];
            				$atuacaoDescri = $bancos["descri"];
            				$atuacaoTexto = $bancos["texto"];
            				$atuacaoData = $bancos["data"];
            				$atuacaoHora = $bancos["hora"];
                    }

                }
            ?>
                  <h2><?php echo $atuacaoTitulo; ?></h2>
                </div>
      			</div>
      			<!-- /.row -->
      			<!-- Projects Row -->
      			<div class="container" style="border-top:1px solid #f4f4f4;padding-top:30px;">
              <div class="row">
        				<div class="col-md-8">
                  <?php echo $atuacaoTexto; ?>
        				</div>
        				<div class="col-md-4">
                  <img class="img-fluid" src="quemsomos/<?php echo $atuacaoId; ?>/img/<?php echo $atuacaoImg; ?>" style="display: block;">
                </div>
             </div>
      			</div>
      			<!-- /.row -->
      		</div>
      	</div>
    </section>



    <section>
      <div class="container-fluid servico" style="">
          <!-- Empresa -->
          <div class="container" id="servico" style="">
            <!-- Page Heading/Breadcrumbs -->
            <div class="container"  >
              <div class="col-lg-9 col-md-9">
                <h2>Serviços</h2>
              </div>
          </div>
            <!-- /.row -->
            <!-- Projects Row -->
            <div class="container" style="padding-top:30px;">
              <div class="row">
      <?php
        $selectAtuacao = "SELECT * FROM `atuacao` ORDER BY `atuacao`.`id` DESC ";
    		$queryAtuacao = mysql_query($selectAtuacao);
    		$existedb = @mysql_num_rows($queryAtuacao);
    		if($existedb != 0)
    		{
    			while($bancos = mysql_fetch_array($queryAtuacao)){
    				$atuacaoId = $bancos["id"];
    				$atuacaoImg = $bancos["img"];
    				$atuacaoTitulo = $bancos["titulo"];
    				$atuacaoDescri = $bancos["descri"];
    				$atuacaoTexto = $bancos["texto"];
    				$atuacaoData = $bancos["data"];
    				$atuacaoHora = $bancos["hora"];
			 ?>
              <div class="card bg-trans col-4 shadow-sm" style="background-color: rgba(0,0,0,0.6);text-align: justify;" >
                  <img class="card-img-top"  alt="Thumbnail [100%x225]" src="atuacao/<?php echo $atuacaoId; ?>/img/<?php echo $atuacaoImg; ?>" data-holder-rendered="true" style="display: block; ">
                  <div class="card-body" >
                    <p class="card-text"><strong><?php echo $atuacaoTitulo; ?></strong><br> <?php echo $atuacaoDescri; ?> </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <!--div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      </div-->

                    </div>
                  </div>
                </div>
        <?php
        }
      }
      ?>



            </div>
          </div>
            </div>
            <!-- /.row -->
          </div>
    </section>


    <section>
      <div class="container-fluid orcamento">
    <!-- Sugestões -->
            <div class="container" id="orcamento"  >
               <div class="container"  >
                <div class="col-lg-9 col-md-9">
                  <h2>Orçamento</h2>
                </div>

              </div>
              <!-- /.row -->
              <!-- Projects Row -->
              <div class="container" style="border-top:1px solid #f4f4f4;padding-top:30px;">
                <div class="col-md-5">
                   <img class="img-fluid" src="images/1.jpg" alt="">
                </div>
                <div class="col-md-7">
                  <!--form name="sentMessage" id="contactForm" novalidate-->
                    <div class="control-group form-group">
                      <div class="controls">
                        <label></label>
                        <input type="text" class="form-control" id="name" placeholder="Nome">
                        <p class="help-block"></p>
                      </div>
                    </div>
                    <div class="control-group form-group">
                      <div class="controls">
                        <label></label>
                        <input type="tel" class="form-control" id="phone" placeholder="Celular / Telefone:">
                      </div>
                    </div>
                    <div class="control-group form-group">
                      <div class="controls">

                        <label></label>
                        <input type="emailer" class="form-control" id="emailer" placeholder="Email" >
                      </div>
                    </div>
                    <div class="control-group form-group">
                      <div class="controls">
                        <label></label>
                        <textarea rows="10" cols="100" class="form-control" id="message" placeholder="Messagem:" maxlength="999" style="resize:none"></textarea>
                      </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-outline-dark btn-block sugest">Enviar Sugestão</button>
                  <!--/form-->
                </div>
              </div>
              <!-- /.row -->
            </div>
          </div>
    </section>
    <section>
      <div class="container-fluid localizacao">
    <!-- Sugestões -->
            <div class="container" id="localizacao"  >
               <div class="container"  >
                  <h2>Localização</h2>
              </div>
            </div>
          </div>
          <!-- /.row -->
          <!-- Projects Row -->
            <div class="container" style="overflow:hidden;">
              <iframe class="map" width="100%" height="100%" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=3178%20Av.%20Maria%20Quiteria%20Feira%20de%20Santana%2C%20Bahia+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
              </iframe>
            <style>#gmap_canvas img{max-width:1005!important;background:none!important}</style>
            </div>
          <!-- /.row -->
    </section>
    <section>
      <div class="container-fluid contato"  style="">
      		  <!-- contatos -->
      			<div class="container" id="contato">
      				<div class="col-lg-12">
      					<h2>Contato</h2>
      				</div>
      				<div class="col-md-12 paddintop30" >
      					<h4>Fcar - Emplacamentos</h4>
      					<p>
      					   Avenida Maria Quitéria, n.º 3178,<br>  Queimadinha -
      	Feira de Santana - BA <br> CEP 44.001-456<br>
      					</p>
      					<p><i class="fa fa-phone"></i>
      						<abbr title="Phone"></abbr>: (75) 3225.7579 | (75) 9175.1233 </p>
      					<p><i class="fa fa-whatsapp"></i>
      						<abbr title="Whatsapp"></abbr>: (75) 99175.1233</p>
      					<p><i class="fa fa-envelope-o"></i>
      						<abbr title="Email"></abbr>: <a href="mailto:contato@fcaremplacamentos.com.br
      						">contato@fcaremplacamentos.com.br
      						</a></p>
      					<p><i class="fa fa-clock-o"></i>
      						<abbr title="Hours"></abbr>: Segunda - Sexta: 8:00 às 18:00<br>
      						Sábado: 8:00 às 12:00 </p>
      				</div>
      				<div class="col-md-12">
      				</div>
      				<!-- Contact Details Column -->
                  <span class="float-right"><img src="image/Fcar.png" height="150"></span>
      				</div>

      	</div>
              <!-- /.row -->
    </section>
    <script>
	$(document).ready(function(){

	  // Add scrollspy to <body>
	  $('body').scrollspy({target: ".navbar", offset: 85});
	//
	  // Add smooth scrolling on all links inside the navbar
	  $("#navbarNavDropdown a").on('click', function(event) {
		// Make sure this.hash has a value before overriding default behavior
		if (this.hash !== "") {
		  // Prevent default anchor click behavior
		  event.preventDefault();
		  // Store hash
		  var hash = this.hash;
		  // Using jQuery's animate() method to add smooth page scroll
		  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		  $('html, body').animate({
			scrollTop: $(hash).offset().top
		  }, 900, function(){
			// Add hash (#) to URL when done scrolling (default click behavior)
			window.location.hash = hash;
		  });
		}  // End if
	  });
	//

	 // Add scrollspy to <body>
	  $('body').scrollspy({target: ".logo", offset: 85});
	//
	  // Add smooth scrolling on all links inside the navbar
	  $("#logo a").on('click', function(event) {
		// Make sure this.hash has a value before overriding default behavior
		if (this.hash !== "") {
		  // Prevent default anchor click behavior
		  event.preventDefault();
		  // Store hash
		  var hash = this.hash;
		  // Using jQuery's animate() method to add smooth page scroll
		  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		  $('html, body').animate({
			scrollTop: $(hash).offset().top
		  }, 900, function(){
			// Add hash (#) to URL when done scrolling (default click behavior)
			window.location.hash = hash;
		  });
		}  // End if
	  });
	//
	});
	</script>
</body>
</html>
