<script src="interno.js" type="text/javascript"></script>
<script src="tinymce/js/tinymce/tinymce.js"></script>
<?php
		include('protect.php');
		include('globais.php');

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
		<!-- Atuação  -->
			 <div class="row" style="padding:4px;background:white">
				 <div class="col-12" >
					 <span class="spandate"><?php echo $clientLog;?></span>
				 </div>
						 <div class="col-2" >
								 <img class="img-responsive img-hover"  src="../clientes/<?php echo $clientID;?>/img/<?php echo $clientBut;?>" alt="" style="height:140px">
						 </div>
						 <div class="col-8" style="padding-left:30px">
							 <h3><strong><?php echo $clientNome;?></strong></h3>
							 <p><strong>CPF/CNPJ:</strong> <?php echo $clientNumero;?></p>
							 <!--button type="submit" id="<?php echo $clientBut; ?>"  value="<?php echo $clientID; ?>" class="btn btn-outline-danger ltn"><i class="fa fa-trash" aria-hidden="true"></i> Deletar </button-->
							 <button  value="<?php echo $clientID; ?>" id=""  class="btn btn-outline-<?php echo $corMenuAdm; ?> editarinterno"><i class="fa fa-pencil" aria-hidden="true"></i> Atualizar </button>
							 <button  value="<?php echo $clientID; ?>" class="btn btn-outline-<?php echo $corMenuAdm; ?> uploadinterno"><i class="fa fa-pencil" aria-hidden="true"></i>Documentos</button>
							 <button  value="<?php echo $clientID; ?>" class="btn btn-outline-<?php echo $corMenuAdm; ?> ordeminterno"><i class="fa fa-pencil" aria-hidden="true"></i>Criar OS	</button>
							  <button  value="<?php echo $clientID; ?>" class="btn btn-outline-<?php echo $corMenuAdm; ?> listarosinter"><i class="fa fa-pencil" aria-hidden="true"></i>Listar OS	</button>
						 </div>
			 </div>
			 <!-- /.row -->
			 <?php
		 				}
						  ?>
	 <span><hr></span>
<div class="resultadointerno">


	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Ordem de Serviço</th>
      <th scope="col">Data</th>
      <th scope="col">Proprietário</th>
			 <th scope="col">Placa</th>
      <th scope="col">Delete</th>
			<th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
		<?php

				$queryline = "SELECT * FROM `ordserv` WHERE `id_us`=$clientID";
				$query = mysql_query($queryline);
				while($db = mysql_fetch_array($query)){
					$osIdUsuario = $db['id_us'];
					$osDate = $db['data_origem'];
					$osCodigo = $db['cod_os'];
					$osPlaca = $db['placa'];
					$osMarca = $db['marca'];
					$osCor = $db['cor'];
				 	$osRenavan= $db['renavan'];
					$osProprietario = $db['proprietario'];
					$osTelefone = $db['telefone'];
		?>
    <tr>
			<th scope="row"><?php echo $osCodigo; ?></th>
      <td><?php echo $osDate; ?></td>
      <td><?php echo $osProprietario; ?></td>
			<td><?php echo $osPlaca; ?></td>
      <td><button class="btn btn-outline-<?php echo $corMenuAdm; ?>" value="<?php echo $$osCodigo; ?>">delete</button></td>
			<td><button class="btn btn-outline-<?php echo $corMenuAdm; ?>" value="<?php echo $$osCodigo; ?>">editar</button></td>
    </tr>
		<?php
				}
		?>

  </tbody>
</table>



 </div>
  </div>
</div>
<?php
			}
				?>