
<?php
	//include('conect.php');
	ob_start(); 
	@session_start();
	include('globais.php');
	
		/*echo $corMenuAdm;*/ if($corMenuAdm=="secundary"){
		$corMenuAdm = "default";
	} 

$per_page = 7;
include("conect.php");
$sql = "SELECT * FROM `projeto`";
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
		$("#links").load("datap.php?page=" + this.id, hideLoader);
		
		return false;
	});
		$("#1").css({'background-color' : '#FFF','color' : '#000'});
		showLoader();
		$("#links").load("datap.php?page=1", hideLoader);
	});
</script>
<div class="container-fluid" style="border:0px grey solid;padding:0px;">

	<div id="container-fluid" style="border:0px orange solid;padding:0px;">
	
		<!--<div class="search-background" style="border:1px #CCC solid">
			<label><img src="loader.gif" alt="" /></label>
		</div>-->
	<div style="height:20px" class="visible-xs"></div>
    <div class="junbotrom" style="margin-top:-20px;height:65px;">
        <ol class="breadcrumb">
        <li class="breadcrumb-item">Acervo Técnico </li>
        <li class="breadcrumb-item ">Editar </li>
		 <li class="breadcrumb-item active">Excluir</li>
        </ol>
    </div>
    <div class="container">
        
    <div class="card">
	<h3 class="card-header">Editar / Excluir / Acervo Técnico</h3>
    <div class="card-block">
		<div class="container" id="links" style="width:100%" >
        
        </div>
	</div>
    </div>
    </div>
    
	<!-- <div id="paging_button" align="center">
   
		 <!-- Pagination -->
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
        <!-- /.row -->
        
		
		<!--</ul>
      
  	</div> -->
</div>
<?php

$_SESSION['line1'] = "0";
//}
?>