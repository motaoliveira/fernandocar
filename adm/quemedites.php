<?php

	include('protect.php');
	include('conect.php');
	/* @$id = $_POST['id'];
	if(@$_POST){
	mysql_query("UPDATE `quemsomos` SET `atuacao` = '$id' WHERE `quemsomos`.`id` = 1;"); }
	else{ */
	//echo "carregue a id ";
	$sql = "SELECT * FROM `quemsomos` WHERE `id`=1";
	$query = mysql_query($sql);

	while ($banco = mysql_fetch_assoc($query))
	{
		//$atuacaoId = $banco['atuacao'];}
		//echo $atuacaoId;
        //include('conect.php');
        /*echo $corMenuAdm;*/
		include('globais.php');
        if($corMenuAdm=="secundary"){$corMenuAdm = "default";}
    ?>

<script src="tinymce/js/tinymce/tinymce.js"></script>
<script>
tinymce.init({
  selector: 'textarea',
  //images_upload_url: 'postAcceptor.php',
  //images_upload_base_path: '/some/basepath',
  //images_upload_credentials: true,
  height: 400,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code'
  ],
  toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  content_css: '//www.tinymce.com/css/codepen.min.css'
});
</script>

<script>
$(document).ready(function(){
	 $("#sendAtua").click(function()
			{
			alert("Verifique se todos os campos estão corretamente preenchidos");
			/* var tinyMce = tinyMCE.get('mensagem').getContent();
			var titulo = $('#titulo').val();
			var descricao = $('#descricao').val();
			var mensage = $('#tex').val();
			var arq2 = $('#exemplo').val();
			if(titulo =="" || descricao=="" || mensage=="" || arq2==""){
				alert("Verifique se todos os campos estão corretamente preenchidos");
			}
			else
			{
			//$.post("atuacao_ins.php", { titulo1:titulo , descricao1:descricao, mensage1:mensage, arq:arq2},				function(get_retorno) {alert(get_retorno);
							 // });
				alert('Tudo preenchido corretamente');
			}*/
			});
	  });
</script>
<?php

	$sq = "SELECT * FROM `quemsomos` WHERE `id`=1";
		$quer = mysql_query($sq);
	while($db = mysql_fetch_assoc($quer)){

		$id_db 		=	$db['id'];
		$img_db		=	$db['img'];
		$titulo_db	=	$db['titulo'];
		$descri_db	=	$db['descri'];
		$texto_db	=	$db['texto'];
		$data_db	=	$db['data'];
		$hora_db	=	$db['hora'];

?>


	<ol class="breadcrumb">
		<li class="breadcrumb-item">Quem somos</li>
		<li class="breadcrumb-item active">Atualizar</li>
	</ol>

<div class="container" >
<div class="row" >



	<div class="card w-100">

	<h3 class="card-header">Quem Somos</h3>

	 <div class="card-block">

    <div class="col-12" style="margin-top:10px">

    <form role="form" action="quemsomos_update.php" enctype="multipart/form-data" method="post">

		<input name="hide" type="hidden" value="<?php echo $atuacaoId ?>" />
		<div class="col-8 form-group" style="border:0px #000 dashed;">
				<input class="form-control theme-secondary" type="text" id="titulo"  placeholder="" name="titulo" value="<?php echo $titulo_db; ?>">
		</div>



       <div class="col-12 form-group" style="display:none">
            <input class="form-control theme-secondary" type="text" id="descricao"  placeholder="" name="descricao" value="<?php echo $descri_db; ?>">
        </div>
<div class="row">
        <div class="col-8" style="height:auto;">
        	<textarea name="tex" id="tex" cols="90" rows="12" ><?php echo $texto_db; ?></textarea>
        </div>
				<div class="col-4">
					<h5> Imagem:</h5>
				 <img class="img-fluid" src="../quemsomos/1/img/<?php echo $img_db; ?>" />
				 <div class="col-12"> <p>Imagem: 500 x 340 px</p></div>
				 <div class="col-12">
				 <br class="visible-sm visible-xs">
						 <div class="form-group">
								 <input type="file" name="exemplo" class="btn btn-outline-secondary btn-block "  id="arq">
						 </div>
				 </div>
			 </div>
</div>
        <div class="col-12">
        <br />
            <div class="form-group" >
                <button type="submit" class="btn btn-<?php echo $corMenuAdm; ?>" id="sendAtua">
                    <span class="glyphicon glyphicon-ok"></span> Enviar
                </button>
            </div>
        </div>

    </form>

    </div>


         <?php
	}

	}
	?>

</div>


</div>
</div>
</div>
