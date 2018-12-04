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


$(".retirar").click(function(){
								var osusuario = $(".osusuario").val();
								var oscod = $(".oscod").val();
								var id = $(this).val();
								alert(osusuario+' '+id+' 'oscod);

								$.post("servicoretirar.php",
								{
									osusuario:osusuario,
									oscod:oscod,
									id:id
								},
								function(data, status){
								//alert(data);
									$(".osdetalhe").load("servicoretirar.php");
									//$('#paging_button').hide();
								});
								*/
							});


$(".print").click(function(){

		});
