<head>
<title><?php echo $tituloPainel ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/colorpicker.css">
<script src="../js/colorpicker.js"></script>
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<style>

li{
list-style-type:none;
}
body{
margin-top:0;
margin-botton:0;
margin-left:0;
margin-right:0;
overflow-x: hidden;
}
.jumbotron{
	width:auto;	
}
.breadcrumb{
background-color:rgba(255,255,255,0.75);
border:1px solid #CCC;		
}
#hom{
	background-color:rgba(255,255,255,.40);
	border:1px rgba(200,200,200,1) solid;
}
.btn-secundary{
	border:1px rgba(200,200,200,1) solid;
}
body{
	background-image:url(../img/<?php echo $imgBg ?>);
}
a{
	color:grey;	
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
</style>
</head>