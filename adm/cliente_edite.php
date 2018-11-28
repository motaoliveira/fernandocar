<?php
		include('protect.php');
		include('conect.php');
		@$id = $_POST['id'];

		//print_r($_POST);

		if(@$_POST){
		mysql_query("UPDATE `edicao` SET `atuacao` = '$id' WHERE `edicao`.`id` = 1;"); }
		else{
		//echo "carregue a id ";
		$sql = "SELECT * FROM `edicao` WHERE `id`=1";
		$query = mysql_query($sql);

		while ($banco = mysql_fetch_assoc($query))
		{
		//echo "entrou aqui";
			$atuacaoId = $banco['atuacao'];}
			 //echo $atuacaoId;
		 ?>


<script src="javascript_cliente.js" type="text/javascript"></script>
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

	$sq = "SELECT * FROM `cliente` WHERE `id`=$atuacaoId";
		$quer = mysql_query($sq);
	while($banco = mysql_fetch_assoc($quer)){

				$clientID = $banco["id"];
				$clientNome = $banco["nome"];
				$clientEmail = $banco["email"];
				$clientCel = $banco["celular"];
				$cleintSenha = $banco["senha"];
				$clientRua = $banco["rua"];
				$clientNumero = $banco["numero"];
				$clientBairro = $banco["bairro"];
				$clientCep = $banco["cep"];
				$clientLog = $banco["log"];
				$clientBut = $banco["but"];

?>
<div class="row" style="background-color:white">
     <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3">
                  <img class="img-responsive" src="../clientes/<?php echo $clientID; ?>/img/<?php echo $clientBut; ?>"  style="height:160px"/>
                  </div>
    <div class="col-md-9 col-sm-9 col-lg-9 col-xs-9" style="margin-top:10px">

		<form role="form" action="cliente_update.php" enctype="multipart/form-data" method="post">

		<input name="hide" type="hidden" value="<?php echo $clientID; ?>" />
		<!--input name="nome" type="hidden" value="<?php echo $clientNome; ?>" /-->

		<div class="col-md-8 col-lg-8 col-sm-8 col-xs-8 form-group" style="border:0px #000 dashed;">
			<h3> <?php echo $clientNome; ?> </h3>
		</div>

			<div class="col-md-8 col-lg-8 col-sm-8 col-xs-8">
			<br class="visible-sm visible-xs">
				<div class="form-group">
					<input type="file" name="exemplo" class="btn btn-default btn-block "  id="arq">
				</div>
		   </div>
			<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4"> <p>Imagem: 400 x 450 px</p></div>
			<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12" >
			<div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
			<p>Cliente</p>
			</div>
			<div class="col-md-10 col-lg-10 col-sm-10 col-xs-10">
			<input class="form-control theme-secondary" type="text" id="cliente" name="cliente"  placeholder="" name="cliente" value="<?php echo $clientNome; ?>" >
			<br>
			</div>
			<!--div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
			<p>Email</p>
			</div>
			<div class="col-md-10  col-lg-10 col-sm-10 col-xs-10" >
			<input class="form-control theme-secondary" type="text" id="email" name="email"  placeholder="" value="<?php echo $clientEmail; ?>" >
			<br>
			</div>
			<div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
			<p>Senha</p>
			</div>
			<div class="col-md-10  col-lg-10 col-sm-10 col-xs-10" >
			<input class="form-control theme-secondary" type="text" id="senha"  name="senha" placeholder=""   value="<?php echo $cleintSenha; ?>" >
			<br>
			</div>
			<div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
			<p>Rua</p>
			</div>
			<div class="col-md-10  col-lg-10 col-sm-10 col-xs-10" >
			<input class="form-control theme-secondary" type="text" id="rua" name="rua" placeholder="Rua"  value="<?php echo $clientRua; ?>" >
			<br>
			</div>
			<div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
			<p>Número</p>
		</div-->
			<div class="col-md-10  col-lg-10 col-sm-10 col-xs-10" >
			<input class="form-control theme-secondary" type="text" id="numero" name="numero" placeholder="Número"  value="<?php echo $clientNumero; ?>" >
			<br>
			</div>
			<!--div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
			<p>Cidade:</p>
			</div>
			<div class="col-md-10  col-lg-10 col-sm-10 col-xs-10" >
			<input class="form-control theme-secondary" type="text" id="cep" name="cep"  placeholder="CEP"   value="<?php echo $clientCep; ?>" >
			<br>
			</div>
			<div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
			<p>Bairro</p>
			</div>
			<div class="col-md-10  col-lg-10 col-sm-10 col-xs-10" >
			<input class="form-control theme-secondary" type="text" id="bairro" name="bairro"  placeholder="Bairro" value="<?php echo $clientBairro; ?>" >
			<br>
		</div-->

			<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
			<br />
				<div class="form-group" >
					<button type="submit" class="btn btn-primary" id="sendAtua" name="sendAtua">
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
