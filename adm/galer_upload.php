<?php
	 
	include('protect.php');
	include('conect.php');
	include('globais.php');

	//var_dump($_POST);
	//var_dump($_FILES);
	
	//Iformações do arquivo	
	if(isset($_POST['upload'])){
		$files = $_FILES['img'];
		
		$num = count(array_filter($files['name']));
		
		//pasta
		$pasta = $_POST['pasta'];	
		$diretorio = "../galeria/$pasta/fotos";
		
				for($i=0; $i<$num; $i++){
				$nome = $files['name'][$i];
				$tmpdir = $files['tmp_name'][$i];
				
				$extensao = @end(explode('.',$nome));
				$nomearquivo = @current(explode('.',$nome));
				$novonome = rand().".".$extensao;
				
					if($extensao =="jpg" || $extensao == "png"){
					
						$move = move_uploaded_file($tmpdir , $diretorio."/".$novonome);
							}else{
							echo "um de seus arquivos não é imagem";
							}
								if(@$move){
									echo "copiou arquivo(s)...";
									}else{
									echo "<br>arquivo não copiado...";
									}
							
				}
				$_SESSION['line1'] = "10";
				header( "location: pagina_principal.php" );
	

			}
				
?>