
			jQuery('.mce-tooltip-arrow').hide();
			jQuery('.mce-tooltip-inner').hide();
			$(".resultado").hide();

		$(".ltn").click(function(){
				var id = $(this).val();
				var file = $(this).attr("id");
				var r = confirm("Deseja deletar esse cliente??");
				if(r === true){
					$.post("cliente_del.php", {id:id , file:file},function(get_retorno) {
						  $('#clientes').trigger('click');
					  });
				}else{
				}
		   });

		 $(".del").click(function(){
 				var id = $(this).val();
 				var file = $(this).attr("id");
 				var r = confirm("Deseja deletar esse Aluno?");
 				if(r === true){
 					$.post("aluno_del.php", {id:id , file:file},function(get_retorno) {
 						  $('#aluno').trigger('click');
 					  });
 				}else{
 				}
 		   });
	//	$(".data").click(function(){
//			alert("Busca Vazia");
//			});
$(".edtaluno").click(function(){
			var id = $(this).val();
			//alert(id);
			$.post("aluno_edite.php",
				{
					id:id
				},
				function(data, status){
				});
				$.post("aluno_edite.php",
					{
						id:id
					},
					function(data, status){
						//alert(data);
						$(".resultadofixo").load("aluno_edite.php");
						$('#paging_button').hide();
					});
	});

	$(".uploadaluno").click(function(){
	 var value = $(this).val();
	$('#paging_button').hide();
	$.post("dataaluupload.php",
			{
				value:value,
			},
			function(data, status){
				alert("oi")
				$(".resultadofixo").html(data);
				$('#paging_button').hide();
			});
	});

	$(".editar").click(function(){
				var id = $(this).val();
				alert("Editar"+id);
				 /*
			$.post("cliente_edite.php",
					{
						id:id
					},
					function(data, status){
					//alert(data);
					//	$(".resultadofixo").html(data);
					//$('#paging_button').hide();
					});

			$.post("cliente_edite.php",
						{
							id:id
						},
						function(data, status){
							//alert(data);
							$("#links").load("cliente_edite.php");
							$('#paging_button').hide();
						});
						*/
		});
/*
				$(".buscaluno").click(function(){
					alert("buscaluno");

					$('#paging_button').hide();

					var nomeAluno = $(".nomeAluno").val();
					if(nomeAluno ===''){
						alert("Busca Vazia");
					}else{
					$.post("dataalubusca.php",
							{
								nomeAluno:nomeAluno
							},
							function(data, status){
								$(".resultadofixo").html(data);
								$('#paging_button').hide();
							});
					}
				});
*/
		$(".busca").click(function(){
			$('#paging_button').hide();
			var nomeCliente = $(".nomeCliente").val();
			if(nomeCliente ===''){
				alert("Busca Vazia");
			}else{
			$.post("dataclibusca.php",
					{
						nomeCliente:nomeCliente,
					},
					function(data, status){
						$(".resultadofixo").html(data);
						$('#paging_button').hide();
					});
			}
		});

		$(".upload").click(function(){
		 var value = $(this).val();
		$('#paging_button').hide();
		$.post("datacliupload.php",
				{
					value:value,
				},
				function(data, status){
					$(".resultadofixo").html(data);
					$('#paging_button').hide();
				});
	});

		$(".visao").click(function(){
		 var visao = $(this).val();
		$('#paging_button').hide();
		$.post("dataclivisao.php",
				{
					visao:visao,
				},
				function(data, status){
					$(".resultadofixo").html(data);
					$('#paging_button').hide();
				});
	});
