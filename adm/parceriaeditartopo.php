
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
<div style="height:20px" class="visible-xs"></div>
<div class="junbotrom" style="border:0px #000 dashed;margin-top:-20px;height:65px;">
    <ol class="breadcrumb">
    <style></style>
        <li><a><p>Parceria</p></a></li>
          <li><a>Inserir</a></li>

    </ol>
</div>
<div class="panel-group">

    <div class="panel panel-<?php echo $corPainel; ?>" >
    <div class="panel-heading"><h3>Adicionar Parceria</h3></div>

    <div class="panel-body">


    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">

    <form role="form" action="parceriaeditartopo_ins.php" enctype="multipart/form-data" method="post">


    <div class="col-md-8 col-lg-8 col-sm-8 col-xs-8 form-group" style="border:0px #000 dashed;">
        <input class="form-control theme-secondary" type="text" id="titulo"  placeholder="Titulo " name="titulo" value="">
    </div>

        <div class="col-md-8 col-lg-8 col-sm-8 col-xs-8">
        <br class="visible-sm visible-xs">
            <div class="form-group">
                <input type="file" name="exemplo" class="btn btn-default btn-block "  id="arq">
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4"> <p>Imagem: 400 x 300 px</p></div>
       <div class="col-md-8  col-lg-8 col-sm-12 col-xs-12 form-group">
            <input class="form-control theme-secondary" type="text" id="descricao"  placeholder="Descrição" name="descricao" value="">

        </div>
        <div class="col-md-12  col-lg-12 col-sm-12 col-xs-12" style="height:auto;">
       <!-- <textarea name="tex" id="tex" cols="90" rows="12"></textarea> -->
       <input name="tex" type="hidden" value="" />
        </div>

        <div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
        <br />
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
