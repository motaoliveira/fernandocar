<?php
	include('protect.php');
	include('conect.php');
	?>
<script>
	$(".cadastrar").click(function(){
		var nome = $("#nome").val();
		var celular = $("#cel").val();
		var rua = $("#rua").val();
		var numero = $("#numero").val();
		var bairro = $("#bairro").val();
		var cep = $("#cep").val();
		var cidade = $("#cidade").val();
		var estado = $("#estado").val();
		var login = $("#login").val();
		var senha = $("#acesso").val();

		if(nome===""  || celular==="" || rua==="" || numero==="" || bairro==="" || cep==="" || cidade==="" || estado==="" || login==="" || senha===""){
			alert("Preencha todos os campos para cadastrar corretamente o Aluno");
		}else
		{
			var r = confirm("Adicionar Aluno?");
			if(r == true)
			{
			$.post("alunocadastro.php",
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
					$("#conteudoAdm").load('aluno.php');
					//$('#paging_button').hide();
				});
			}else{

			}
		}

	});

</script>
	<div id="container-fluid" style="border:0px orange solid;padding:0px;padding-top:24px">

		<!--<div class="search-background" style="border:1px #CCC solid">
			<label><img src="loader.gif" alt="" /></label>
		</div>-->
	<div style="height:20px" class="visible-xs"></div>
    <div class="junbotrom" style="margin-top:-20px;">
        <ol class="breadcrumb">
        <li>Portal do Aluno</li>

        </ol>
    </div>

	<div class="container"><h3>Cadastras Aluno</h3>
	<hr></div>
    <div class="container">
		<div class="container" id="links"style="border:0px green solid;background:white;padding:8px" >

          <!-- Modal content-->




					<div class="form-group col-12">
					  <label for="usrname"><span class="glyphicon glyphicon-user"></span> Nome</label>
					  <input type="text" class="form-control " id="nome" placeholder="">

					  <label for="cel"><span class="glyphicon glyphicon-phone"></span> Celular</label>
					  <input type="tel" class="form-control " id="cel" placeholder="">

					  <label for="rua"><span class="glyphicon glyphicon-user"></span> Endereço</label>
					  <input type="text" class="form-control " id="rua" placeholder="">

					  <label for="numero"><span class="glyphicon glyphicon-user"></span> Número</label>
					  <input type="text" class="form-control " id="numero" placeholder="">

					  <label for="bairro"><span class="glyphicon glyphicon-user"></span> Bairro</label>
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
					  <input type="password" class="form-control" id="acesso" placeholder="">
					<br>
						<button type="submit" class="btn-block btn btn-info btn-md cadastrar" >Criar Conta</button>

					<span id="alerta"></span>
					<span id="resulta"></span>

				</div>

				<div class="modal-footer" >
				  <div class="col-md-12" style="padding:16px;">
					<p class="help-block text-center">Com a criação dessa conta você terá acesso a nossos preços e poderá comprar nossos serviços.</p>
				</div>
				</div>



	</div>
