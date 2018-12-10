<?php
	include('protect.php');
	include('globais.php');
 ?>
<html>
<head>
<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<script src="../js/jquery.min.js"></script>
		<script src="../js/jquery.js"></script>

		<!-- Popper JS -->
		<!--script src="../js/bootstrap.min.js" ></script-->
		<script src="../js/bootstrap.js" ></script>
		<script src="../js/jquery-printme.min.js" ></script>
		<!--script src="../js/popper.min.js" ></script-->
		<script src="../js/popper.js" ></script>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" media="screen">
		<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" media="screen" >

		<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" media="print">
		<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" media="print" >
		<!--link rel="stylesheet" href="../css/font-awesome.min.css"-->
		<!--link rel="stylesheet" href="../css/style.css"-->
		<link rel="icon" href="favicon.ico" type="image/ico" />
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" href="../css/painel.css">
		<title>Fcar Emplacamentos</title>
	<script>
	jQuery(document).ready(function(){
				var conteudo = jQuery('#conteudoAdm');

				conteudo.load('inicial.php');

				jQuery('#init').click(function(){
					conteudo.load('inicial.php');
					});

				// Opções Configurações
				jQuery('#configCor').click(function(){
					conteudo.load('configcor.php');
					});
				jQuery('#configLogos').click(function(){
					conteudo.load('logoins.php');
					});
				jQuery('#configBg').click(function(){
					conteudo.load('configbg.php');
					});
				jQuery('#configTitulo').click(function(){
					conteudo.load('configtitulo.php');
					});
			//curriculos
				jQuery('#curriculos').click(function(){
					conteudo.load('curriculos.php');
					});
			//Mostra de Produtos e Serviços
				jQuery('#categoria').click(function(){
					conteudo.load('lojacategoria.php');
					});
				jQuery('#familia').click(function(){
					conteudo.load('lojafamilia.php');
					});
				jQuery('#produtos').click(function(){
					conteudo.load('lojaprodutos.php');
					});

			//Produtos
				jQuery('#configprod').click(function(){
					conteudo.load('configprod.php');
					});

			//Banners
				jQuery('#carousel').click(function(){
					conteudo.load('carousel.php');
					});
				jQuery('#banerfixo').click(function(){
					conteudo.load('fixo.php');
					});
				jQuery('#fixointerno').click(function(){
					conteudo.load('fixointerno.php');
					});
				jQuery('#lateral').click(function(){
					conteudo.load('lateral.php');
					});

			//Quem Somos
				jQuery('#quemedite').click(function(){
					conteudo.load('quemedites.php');
					});

			//Atuação
				jQuery('#atuaInserir').click(function(){
					conteudo.load('atuaInserir.php');
					});
				jQuery('#atuaIeditar').click(function(){
					conteudo.load('atuaIeditar.php');
					});

			//Projetos
				jQuery('#projinserir').click(function(){
					conteudo.load('projinserir.php');
					});
				jQuery('#projeditar').click(function(){
					conteudo.load('projeditar.php');
					});

			//Galeria
				jQuery('#galeriainserir').click(function(){
					conteudo.load('galeriainserir.php');
					});
				jQuery('#galeriaeditar').click(function(){
					conteudo.load('galeriaeditar.php');
					});
				jQuery('#e').click(function(){
					conteudo.load('lateral.php');
					});
			//Parceria
				jQuery('#parceriainserir').click(function(){
					conteudo.load('parceriainserir.php');
					});
				jQuery('#parceriaeditar').click(function(){
					conteudo.load('parceriaeditar.php');
					});
			//Clientez
				jQuery('#clienteinserir').click(function(){
					conteudo.load('clienteinserir.php');
					});
				jQuery('#clienteeditar').click(function(){
						conteudo.load('clienteeditar.php');
						});


			//Portal do Clientes
				jQuery('#clientes').click(function(){
					conteudo.load('clientes.php');
					});
				jQuery('#cadastrar').click(function(){
					conteudo.load('cadastrar.php');
					});
				jQuery('#senha').click(function(){
					conteudo.load('senha.php');
					});
				jQuery('#ordemservice').click(function(){
							conteudo.load('ordemservice.php');
							});
			//Portal do Aluno
						jQuery('#aluno').click(function(){
							conteudo.load('aluno.php');
							});
						jQuery('#alcadastrar').click(function(){
							conteudo.load('alcadastrar.php');
							});
						jQuery('#alsenha').click(function(){
							conteudo.load('alsenha.php');
							});
			//Email
				jQuery('#emails').click(function(){
					conteudo.load('email.php');
					});
			//Menu
				jQuery("#menu").click(function(){
					     	$("#menuRoler").slideToggle();
 					});
				jQuery("#baner").click(function(){
					     	$("#banerRoler").slideToggle();
 					});

			//navegação apos ação
			<?php
				if(@$_SESSION['line1'] == "110"){
					?>
					conteudo.load('clienteeditar.php');
					<?php
					}
				if(@$_SESSION['line1'] == "111"){
					?>
					conteudo.load('clienteeditar.php');
					<?php
					}
				if(@$_SESSION['line1'] == "10"){
					?>
					conteudo.load('galeriaeditar.php');
					<?php
					}
				elseif(@$_SESSION['line1'] == "9"){
					?>
					conteudo.load('projeditar.php');
					<?php
					}
			     elseif(@$_SESSION['line1'] == "8"){
					?>
					conteudo.load('atuaIeditar.php');
					<?php
					}
				elseif(@$_SESSION['line1'] == "7"){
					?>
					conteudo.load('lateral.php');
					<?php
					}
				elseif(@$_SESSION['line1'] == "6"){
					?>
					conteudo.load('fixointerno.php');
					<?php
					}
				elseif(@$_SESSION['line1'] == "5"){
					?>
					conteudo.load('fixo.php');
					<?php
					}
				elseif(@$_SESSION['line1'] == "4"){
					?>
					conteudo.load('carousel.php');
					<?php
					}
					elseif(@$_SESSION['line1'] == "3"){
						?>
						conteudo.load('parceriaeditar.php');
						<?php
						}
					elseif(@$_SESSION['line1'] == "12"){
						?>
						conteudo.load('aluno.php');
						<?php
						}
			?>

			});
	</script>
</head>

<body>

<div class="lock topoblack no-print" style="background-color:black;">
	<div class="container" >
		<div class="row" >
			<div class="col-3 barblack">
				<img style="" src=""  alt=""> </div>
			<div class="col-6" ></div>
			<div class="col-3" >
				<a href="sair.php" class=" btn btn-outline-secondary btn-sm float-right btn-logoff" >Logoff</a>
			</div>
		</div>
	</div>
</div>


<div class="container" style="margin-top:8px;">
	<div class="row">
		<div class="col-3 menu">
			<button type="button" class="btn btn-<?php echo $corMenuAdm; ?> btn-block" id="init" >
			  Principal  <i style="float:right"  class="fa fa-caret-right" aria-hidden="true"></i>
			</button>
			<button style="display:none" type="button" class="btn btn-<?php echo $corMenuAdm; ?> btn-block" id="" type="button" data-toggle="collapse" data-target="#collapseconfig" aria-expanded="true" aria-controls="collapseconfig" >
			  Configurações  <i style="float:right" class="fa fa-caret-down" aria-hidden="true"></i>
			</button>
			<div class="collapse" id="collapseconfig">
							<a class="btn btn-block btn-outline-secondary" id="configCor" style="margin-top:5px;"   title="Cores do Topo / Rodapé / Menu"><i class="fa fa-cog" aria-hidden="true"></i> Cores</a>
							<a class="btn btn-block btn-outline-secondary"  style="display:none" id="configLogos" title="Logo do Topo / Rodapé"> Logos</a>
							<a class="btn btn-block btn-outline-secondary" style="display:none" id="configBg" title="Modifique cor / imagem">Background</a>
							<a class="btn btn-block btn-outline-secondary" style="display:none" id="configTitulo" title="Título do site / Texto do Rodapé">Titulo / Rodapé</a>
			</div>

			<!--<button style="margin-top:5px;" class="btn btn-<?php echo $corMenuAdm; ?> btn-block" type="button" data-toggle="collapse"  data-target="#collapsemenu" aria-expanded="false" aria-controls="collapsemenu">
			  Categorias / Clientes
			</button>
			<div class="collapse" id="collapsemenu" >
							<a class="btn btn-block btn-outline-secondary" id="categoria" style="margin-top:5px;">Categorias</a>
							<a class="btn btn-block btn-outline-secondary" id="familia">Famílias</a>
							<a class="btn btn-block btn-outline-secondary" id="produtos">Clientes</a>
			</div>-->

			<button style="margin-top:5px;" class="btn btn-<?php echo $corMenuAdm; ?> btn-block" type="button" data-toggle="collapse" data-target="#collapsebaner" aria-expanded="false" aria-controls="collapsebaner">
			  Banners          <i style="float:right"  class="fa fa-caret-down" aria-hidden="true"></i>
			</button>

			<div class="collapse" id="collapsebaner">
							<a class="btn btn-block btn-outline-secondary" id="carousel" style="margin-top:5px;"><i class="fa fa-bars" aria-hidden="true"></i>  Premium</a>
							<!--a class="btn btn-block btn-outline-secondary" id="banerfixo"><i class="fa fa-credit-card-alt" aria-hidden="true"></i>  Home</a>
                            <a class="btn btn-block btn-outline-secondary" id="fixointerno"><i class="fa fa-credit-card" aria-hidden="true"></i>  Interno</a>
							<a class="btn btn-block btn-outline-secondary" id="lateral">Lateral</a-->
			</div>

			<button style="margin-top:5px;" class="btn btn-<?php echo $corMenuAdm; ?> btn-block" type="button" data-toggle="collapse" data-target="#collapseclientes" aria-expanded="false" aria-controls="collapseclientes">
			 Atendimento          <i style="float:right"  class="fa fa-caret-down" aria-hidden="true"></i>
		 </button>

		 <div class="collapse" id="collapseclientes">
						 <a class="btn btn-block btn-outline-secondary" id="clientes" style="margin-top:5px;"> Clientes</a>
						 <a class="btn btn-block btn-outline-secondary" id="cadastrar" style="margin-top:5px;"> Cadastrar</a>
						 <a class="btn btn-block btn-outline-secondary" id="ordemservice" style="margin-top:5px;">Ordem de Serviço</a>
						 <a class="btn btn-block btn-outline-secondary" id="senha" style="display:none;margin-top:5px;"> Esqueceu Senha</a>
		 </div>

		 <button style="margin-top:5px;display:none;" class="btn btn-<?php echo $corMenuAdm; ?> btn-block" type="button" data-toggle="collapse" data-target="#collapsealuno" aria-expanded="false" aria-controls="collapsealuno">
			Portal do Aluno          <i style="float:right"  class="fa fa-caret-down" aria-hidden="true"></i>
		</button>

		<div class="collapse" id="collapsealuno">
						<a class="btn btn-block btn-outline-secondary" id="aluno" style="margin-top:5px;"> Alunos</a>
						<a class="btn btn-block btn-outline-secondary" id="alcadastrar" style="margin-top:5px;"> Cadastrar</a>
						<a class="btn btn-block btn-outline-secondary" id="alsenha" style="margin-top:5px;"> Esqueceu Senha</a>
		</div>

    <button style="margin-top:5px;" class="btn btn-<?php echo $corMenuAdm; ?> btn-block" type="button" data-toggle="collapse" data-target="#quemsomos" aria-expanded="false" aria-controls="quemsomos">
		  Quem Somos        <i style="float:right" class="fa fa-caret-down" aria-hidden="true"></i>
		</button>

		<div class="collapse" id="quemsomos">
						<a class="btn btn-block btn-outline-secondary" id="quemedite" style="margin-top:5px;"><i class="fa fa-refresh" aria-hidden="true"></i>  Atualizar</a>
		</div>

		<button style="margin-top:5px;" class="btn btn-<?php echo $corMenuAdm; ?> btn-block" type="button" data-toggle="collapse" data-target="#collapseatuacao" aria-expanded="false" aria-controls="collapseatuacao">
		  Serviços        <i style="float:right" class="fa fa-caret-down" aria-hidden="true"></i>
		</button>
		<div class="collapse" id="collapseatuacao">
						<a class="btn btn-block btn-outline-secondary" id="atuaInserir" style="margin-top:5px;"><i class="fa fa-pencil" aria-hidden="true"></i> Inserir</a>
						<a class="btn btn-block btn-outline-secondary" id="atuaIeditar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>

		</div>

    <button style="margin-top:5px;display:none" class="btn btn-<?php echo $corMenuAdm; ?> btn-block" type="button" data-toggle="collapse" data-target="#projetos" aria-expanded="false" aria-controls="projetos">
		  Cursos      <i style="float:right" class="fa fa-caret-down" aria-hidden="true"></i>
		</button>
		<div class="collapse" id="projetos">
						<a class="btn btn-block btn-outline-secondary" id="projinserir" style="margin-top:5px;"><i class="fa fa-pencil" aria-hidden="true"></i> Inserir</a>
						<a class="btn btn-block btn-outline-secondary" id="projeditar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>


		</div>

    <button style="margin-top:5px;display:none" class="btn btn-<?php echo $corMenuAdm; ?> btn-block" type="button" data-toggle="collapse" data-target="#collapsefotos" aria-expanded="false" aria-controls="collapsefotos">
		  Galeria de Imagens        <i style="float:right" class="fa fa-caret-down" aria-hidden="true"></i>
		</button>
		<div class="collapse" id="collapsefotos">
						<a class="btn btn-block btn-outline-secondary" id="galeriainserir" style="margin-top:5px;"><i class="fa fa-pencil" aria-hidden="true"></i> Criar</a>
						<a class="btn btn-block btn-outline-secondary" id="galeriaeditar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>
		</div>

    <button style="margin-top:5px;display:none" class="btn btn-<?php echo $corMenuAdm; ?> btn-block" type="button" data-toggle="collapse" data-target="#parceiros" aria-expanded="false" aria-controls="parceiros">
		  Clientes        <i style="float:right" class="fa fa-caret-down" aria-hidden="true"></i>
		</button>
		<div class="collapse" id="parceiros">
						<a class="btn btn-block btn-outline-secondary" id="parceriainserir" style="margin-top:5px;"><i class="fa fa-pencil" aria-hidden="true"></i> Inserir</a>
						<a class="btn btn-block btn-outline-secondary" id="parceriaeditar"><i class="fa fa-trash" aria-hidden="true"></i> Deletar</a>
		</div>

		<button style="margin-top:5px;display:none" class="btn btn-<?php echo $corMenuAdm; ?> btn-block" type="button" data-toggle="collapse" data-target="#cliente" aria-expanded="false" aria-controls="cliente">
		  Parceria        <i style="float:right" class="fa fa-caret-down" aria-hidden="true"></i>
		</button>
		<div class="collapse" id="cliente">
						<a class="btn btn-block btn-outline-secondary" id="clienteinserir" style="margin-top:5px;"><i class="fa fa-pencil" aria-hidden="true"></i> Inserir</a>
						<a class="btn btn-block btn-outline-secondary" id="clienteeditar"><i class="fa fa-trash" aria-hidden="true"></i> Deletar</a>
		</div>

		<button style="margin-top:5px;display:none" class="btn btn-<?php echo $corMenuAdm; ?> btn-block" type="button" data-toggle="collapse" data-target="#curriculo" aria-expanded="false" aria-controls="curriculo">
		  Currículos        <i style="float:right" class="fa fa-caret-down" aria-hidden="true"></i>
		</button>
		<div class="collapse" id="curriculo">
						<a class="btn btn-block btn-outline-secondary" id="curriculos" style="margin-top:5px;"><i class="fa fa-pencil" aria-hidden="true"></i> Visualizar</a>
		</div>

    <button style="margin-top:5px;display:none;display:none" class="btn btn-<?php echo $corMenuAdm; ?> btn-block" type="button" data-toggle="collapse" data-target="#email" aria-expanded="false" aria-controls="email">
		  Email        <i style="float:right" class="fa fa-caret-down" aria-hidden="true"></i>
		</button>
		<div class="collapse" id="email" >
						<a class="btn btn-block btn-outline-secondary" id="emails" style="margin-top:5px;"><i class="fa fa-envelope-o" aria-hidden="true"></i> Emails Cadastrados</a>
		</div>

		</div>

		<div class="col-9" id="conteudoAdm" style="border:0px solid red;padding-top:-20px;">
		</div>
        <div class="hiden-xs col-3" ></div>
        <div class="col-9" id="conteudoAdm2" style="background-color:;border:0px dashed rgba(0,0,0,1);padding:2px;margin-top:2px" >
		</div>
	</div>
</div>
<div style="width:auto;height:40px;border:0px #000 dashed"></div>

<footer class="no-print" style="border-top:2px solid <?php echo $corTopo ?>;width:auto;height:auto;background-color:;padding-top:20px;">

	<div class="container" style="border:0px #000000 dashed;margin-top:0px;">
		<div style="border:0px #000 DASHED;margin-top:5px;float:right;text-align:right;">
			Desenvolvido por <a   class="btn btn-outline-<?php echo $corMenuAdm; ?> btn-block" btn-sm" href="http://www.voxa.com.br/" target="_blank">Voxa</a>
			<br /> 	<br />
		</div>
	</div>
    <?php //print_r($_SESSION); ?>
</footer>
</body>
</html>
