
<?php
	//include('conect.php');
	include('globais.php');
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



	  });
</script>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">Serviços</li>
          <li class="breadcrumb-item active">Inserir</li>

    </ol>

<div class="container">
	<div class="row">
   <div class="card w-100">

	<h3 class="card-header">Inserir Serviço</h3>



<div class="card-body" >

<ul class="list-group list-group-flush">
    <form role="form" action="atuacao_ins.php" enctype="multipart/form-data" method="post">

    <div class="col-12 form-group" style="border:0px #000 dashed;">
        <input class="form-control theme-secondary" type="text" id="titulo"  placeholder="Titulo " name="titulo" value="">
    </div>

        <li class="col-12 list-group-item">
            <div class="form-group">
                <input type="file" name="exemplo" class="btn btn-default btn-block "  id="arq"> <p>Imagem: 400 x 227 px</p>
            </div>
        </li>

       <li class="col-12   form-group list-group-item">
            <input class="form-control theme-secondary" type="text" id="descricao"  placeholder="Descrição" name="descricao" value="">

        </li>
        <div class="col-12" style="height:auto;display:none">
        <textarea name="tex" id="tex" cols="90" rows="12"></textarea>
        </div>
				<input type="hidden" name="tex" value="1">
        <li class="col-12 list-group-item">
        <br />
            <div class="form-group" >
                <button type="submit" class="btn btn-outline-<?php echo $corMenuAdm; ?>" id="sendAtua">
                    <span class="glyphicon glyphicon-ok"></span> Aplicar
                </button>
            </div>
        </li>

    </form>

	</ul>

    </div>


</div>
</div>
</div>
</div>
