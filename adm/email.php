
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
    <div class="panel-heading"><h3>Emails Cadastrados</h3></div>
    
    <div class="panel-body">
            <div class="col-md-9"></div>
        <div class="col-md-3" style="boder:1px dashed"><a class="btn btn-primary btn-block" href="toexcel.php" target="_blank"><i class="fa fa-download" aria-hidden="true"></i> Criar arquivo Excel</a></div>

                
    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12" style="margin-top:10px;">
    	
       <ul class="list-group">
       <?php
        $select = "SELECT * FROM `email` ORDER BY `email`.`id` DESC";
        $mquery = mysql_query($select);
        while($banco = mysql_fetch_assoc($mquery)){	
        ?>
        <li class="list-group-item"><?php echo $banco['email']; ?></li>
       <?php
        }
        ?>
        
      </ul>

    </div>
    
    </div>
       
    </div>
</div>
