

<script>
	$(".cadastrar").click(function(){
		var nome = $("#nome").val();
		var celular = $("#telefone").val();;
		var rua = 1;
		var numero = $("#numero").val();
		var bairro = 1;
		var cep = 1;
		var cidade = 1;
		var estado = 1;
		var login = 1;
		var senha = 1;

		if(nome===""  || celular==="" || rua==="" || numero==="" || bairro==="" || cep==="" || cidade==="" || estado==="" || login==="" || senha===""){
			alert("Preencha todos os campos para cadastrar corretamente o Cliente");
		}else
		{
			var r = confirm("Adicionar cliente?");
			if(r == true)
			{
			$.post("clientecadastro.php",
				{
					nome:nome,
					celular:celular,
					rua:rua,
					numero:numero,
					bairro,bairro,
					cep:cep,
					cidade:cidade,
					estado:estado,
					login:login,
					senha:senha,
				},
				function(data, status){
				alert(data);
					$("#conteudoAdm").load('clientes.php');
					//$('#paging_button').hide();
				});
			}else{

			}
		}

	});

</script>
<?php
	include("protect.php");
	include("globais.php");


	?>
		<div id="container-fluid">

		<!--<div class="search-background" style="border:1px #CCC solid">
			<label><img src="loader.gif" alt="" /></label>
		</div>-->
    <div class="junbotrom" style="margin-top:0px;">
        <ol class="breadcrumb">
        <li>Portal do Clientes</li>

        </ol>
    </div>

	<div class="container"><h3>Cadastras Cliente</h3>
	<hr></div>
    <div class="container">
		<div class="container" id="links"style="border:0px green solid;background:white;padding:0px" >

          <!-- Modal content-->




					<div class="form-group col-12">
					  <label for="username"><span class="glyphicon glyphicon-user"></span> Nome</label>
					  <input type="text" class="form-control " id="nome" placeholder="">

					  <label for="cel"><span class="glyphicon glyphicon-phone"></span> Celular</label>
					  <input type="tel" class="form-control " id="cel" placeholder="">

					  <!--label for="rua"><span class="glyphicon glyphicon-user"></span> Endereço</label>
					  <input type="text" class="form-control " id="rua" placeholder="" -->

					  <label for="numero"><span class="glyphicon glyphicon-user"></span> CPF /CNPJ</label>
					  <input type="text" class="form-control " id="numero" placeholder="">

					  <!--label for="bairro"><span class="glyphicon glyphicon-user"></span> Bairro</label>
					  <input type="text" class="form-control" id="bairro" placeholder="">

						<label for="cidade"><span class="glyphicon glyphicon-user"></span> CEP</label>
					  <input type="text" class="form-control " id="cep"  placeholder="">

					  <label for="cidade"><span class="glyphicon glyphicon-user"></span> Cidade</label>
					  <input type="text" class="form-control " id="cidade"  placeholder="">

					   <label for="cidade"><span class="glyphicon glyphicon-user"></span> Estado</label>
					  <input type="text" class="form-control " id="estado"  placeholder="">

					  <label for="email"><span class="glyphicon glyphicon-envelope"></span> Email de acesso</label>
					  <input type="text" class="form-control" id="login" placeholder="">


					  <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Senha de acesso</label>
					  <input type="password" class="form-control" id="acesso" placeholder=""-->
					<br>

						<button type="submit"  class="btn btn-<?php echo $corMenuAdm; ?> btn-block cadastrar" >Criar Cliente</button>

					<span id="alerta"></span>
					<span id="resulta"></span>

				</div>

				<div class="modal-footer" >
				  <div class="col-md-12" style="padding:16px;">
					<p class="help-block text-center">Com a criação dessa conta você terá acesso a nossos preços e poderá comprar nossos serviços.</p>
				</div>
				</div>



	</div>
