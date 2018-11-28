
<?php
	//include('conect.php');
	include('globais.php');

		/*echo $corMenuAdm;*/ if($corMenuAdm=="secundary"){
		$corMenuAdm = "default";
	}
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
		var tinyMce = tinyMCE.get('mensagem').getContent();
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
		}

	});

	 $(".dlt").click(function()
	 	{
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
		//$.post("delete_pa.php", { titulo1:titulo , descricao1:descricao, mensage1:mensage, arq:arq2},				function(get_retorno) {alert(get_retorno);
						 // });
			alert('Tudo preenchido corretamente');
		}*/
		var id = $(this).attr('id');
		$.post("delete_pa.php", { id:id },function(get_retorno) {alert(get_retorno);
		 });

	});

	  });
</script>

    <ol class="breadcrumb">

        <li class="breadcrumb-item">Clientes</li>
          <li class="breadcrumb-item active">Inserir</li>

    </ol>

	<div class="container">
		<div class="row">
			<div class="card w-100">
				<h3 class="card-header">Adicionar Clientes</h3>

				<div class="card-block">

					<form role="form" action="parceria_ins.php" enctype="multipart/form-data" method="post">

						<div class="col-12 form-group" >
							<input class="form-control theme-secondary" type="text" id="titulo"  placeholder="Nome do Empreendimento" name="titulo" value="">
						</div>

						<div class="col-12 form-group">
							<input type="file" name="exemplo" class="btn btn-default btn-block "  id="arq">
						</div>

						<div class="col-12"> <p>Tamanho Padrão da Imagem: 600 x 600 px</p></div>
						<div class="col-12 form-group">
							<input class="form-control theme-secondary" type="text" id="descricao"  placeholder="Slogan" name="descricao" value="">
						</div>
						<div class="col-12" >
						 <input name="tex" type="hidden" value="" />
							<div class="form-group" >
								<button type="submit" class="btn btn-<?php echo $corMenuAdm; ?>" id="sendAtua">
									<span class="glyphicon glyphicon-ok"></span> Aplicar
								</button>
							</div>
						</div>

					</form>

				</div>
			</div>
		</div>
	</div>
