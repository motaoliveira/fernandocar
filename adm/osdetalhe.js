



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
								alert(data+status);
								$('#paging_button').hide();
							});

					});
