﻿
<?php
	//include('conect.php');
	ob_start(); 
	@session_start();
	include('globais.php');
	
		/*echo $corMenuAdm;*/ if($corMenuAdm=="secundary"){
		$corMenuAdm = "default";
	} 
?>

<?php 	
$per_page = 7;
include("conect.php");
$sql = "SELECT * FROM `sugestoes`";
$rsd = mysql_query($sql);
$count = mysql_num_rows($rsd);
$pages = ceil($count/$per_page)
?>
	
<link rel="stylesheet" type="text/css" media="screen" href="css.css" />
<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	function showLoader(){
		$('.search-background').fadeIn(200);
	}
	function hideLoader(){
		$('.search-background').fadeOut(200);
	};
	
	$("#paging_button li").click(function(){
		showLoader();
		
		$("#paging_button li").css({'background-color' : '#FAFAFA', 'color' : 'grey'});
		$(this).css({'background-color' : '#FFF','color' : '#000'});
		$("#links").load("curriculos_list.php?page=" + this.id, hideLoader);
		
		return false;
	});
		$("#1").css({'background-color' : '#FFF','color' : '#000'});
		showLoader();
		$("#links").load("curriculos_list.php?page=1", hideLoader);
	});
</script>
<div class="container-fluid" style="border:0px grey solid;padding:0px;">

	<div id="container-fluid" style="border:0px orange solid;padding:0px;">
	
		<!--<div class="search-background" style="border:1px #CCC solid">
			<label><img src="loader.gif" alt="" /></label>
		</div>-->
	
        <ol class="breadcrumb">
        <li class="breadcrumb-item">Banco de Curriculos</li>
        <li class="breadcrumb-itrm">Recebidos do site</li>
        </ol>
   
    <div class="container">
        
    <div class="row">
	<div class="card w-100">
	<h3 class="card-header">Banco de Curriculos</h3>
	<div class="card-block">
		<div class="container" id="links" >
        
        </div>
	</div>
    </div>
    
    
	 <div id="paging_button" class="row text-center">
            <div class="col-lg-12">
            <hr />
                <ul class="pagination">
                    <?php
		//Show page links
		//if(!$_GET['page']){echo "sem page";}
		for($i=1; $i<=$pages; $i++)
		{
			echo '<li class=" btn btn-default" id="'.$i.'" >'.$i.'</li>';
		}?>
                  
                </ul>
			<hr />
            </div>
        </div>
        <!-- /.row 
		</ul>
      </div>-->
  	</div>
</div>
<?php


$_SESSION['line1'] = "0";
?>