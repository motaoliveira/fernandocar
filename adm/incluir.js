	$(".inluir").click(function(){
					var osusuario = $(".osusuario").val();
					var oscod = $(".oscod").val();
					var servico = $(".servico").val();
					var valor = $(".valor").val();
					alert(" Serviço:"+servico+" Valor:"+valor+" CódOs:"+oscod+" Usuário:"+osusuario);

					$.post("servicoincluir.php",
						{
							osusuario:osusuario,
							oscod:oscod,
							servico:servico,
							valor:valor,
						},
						function(data, status)
						{
							$(".osdetalhe").load("servicoincluir.php");
							$('#paging_button').hide();
						});

				});


$(".retirarserv").click(function(){
								var osusuario = $(".osusuario").val();
								var oscod = $(".oscod").val();
								var id = $(this).val();
								alert(id);
								/*
								$.post("servicoretirar.php",
								{
									osusuario=osusuario,
									oscod:oscod,
									id:id
								},
								function(data, status){
								//alert(data);
									$(".arquivos").load("servicodetalhe.php");
									//$('#paging_button').hide();
								});
								*/
							});
