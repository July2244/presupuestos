<?php 

#<?php
#if(!isset($_SESSION)) 
#{ 
 #   require_once "controladores/template.php";

#	$template= new TemplateControler();
#	$template -> template();

#}else
#{	
#	require_once "login.php"
#    #header("Location: login.php");
#   exit;
#}


require_once "controladores/template.php";

$template= new TemplateControler();
$template -> template();

?>
