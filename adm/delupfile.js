$(".delupfile").click(function(){
			 var value = $(this).attr("id");
			 var name = $(this).attr("name");
			//alert(value+" "+name);

			var r = confirm("Deseja deletar esse arquivo?");
			if(r == true)
			{
				$.post("delupfile.php",
				{
					id:value,
					client:name,
				},
				function(data, status){
				//alert(data);
					$(".arquivos").html(data);
					//$('#paging_button').hide();
				});
			}
			else
			{

			}

		});
		$(".delupalunofile").click(function(){
					 var value = $(this).attr("id");
					 var name = $(this).attr("name");
					alert(value+" "+name);

					var r = confirm("Deseja deletar esse arquivo?");
					if(r == true)
					{
						$.post("delupalunofile.php",
						{
							id:value,
							client:name,
						},
						function(data, status){
						//alert(data);
							$(".arquivos").html(data);
							//$('#paging_button').hide();
						});
					}
					else
					{

					}

				});
