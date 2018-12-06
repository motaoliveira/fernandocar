



		$(".inluir").click(function(){
						var osusuario = $(".osusuario").val();
						var oscod = $(".oscod").val();
						var servico = $(".servico").val();
						var valor = $(".valor").val();

						var placa = $(".placa").val();
						var modelo = $(".modelo").val();
						var cor = $(".cor").val();
						var renavan = $(".renavan").val();

						$.post("servicoincluir.php", { osusuario:osusuario, oscod:oscod, servico:servico, valor:valor, placa:placa, modelo:modelo, cor:cor, renavan: renavan },
						function(data, status){

							$(".osdetalhe").load("servicoincluir.php");
							$('#paging_button').hide();
        			//alert("Dados: " + data + "\nStatus: " + status);

    				});

					});

					$(".print").click(function(){
							/*$(".topoblack").addClass('no-print');
						$(".menu").addClass('no-print');
						$("footer").addClass('no-print');
						$(".resultadofixo").addClass('no-print');
						$("ol").addClass('no-print');
						$(".manipulador").addClass('no-print');*/
						$(".topoblack").css("display", "none");
							$(".menu").css("display", "none");
							$("footer").css("display", "none");
							$(".resultadofixo").css("display", "none");
							$("ol").css("display", "none");
							$(".manipulador").css("display", "none");
						$("#printarea").show();
						window.print();
							});

					$("#printarea").click(function(){
						$(".topoblack").css("display", "show");
							$(".menu").css("display", "show");
							$("footer").css("display", "show");
							$(".resultadofixo").css("display", "show");
							$("ol").css("display", "show");
							$(".manipulador").css("display", "show");
					})
