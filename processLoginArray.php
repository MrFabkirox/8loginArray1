<!DOCTYPE HTML>
<html>
<head>
 	<title>processLoginArray</title>
 	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="style.css">
    <script type='text/javascript' src='script.js'></script>
</head>
<body>


<div id="right"><?php include("menu.php"); ?></div>

<div id="left">

<h3>processLoginArray</h3>

<?php

	$users = array("root"=>"root","usr"=>"pass","tom"=>"mot");

	$name = $_POST['name'];
	$pwd = $_POST['pwd'];

	$provenance = $_SERVER['HTTP_REFERER'];
	
	if(isset($users[$name]) && $users[$name] == $pwd) {
		print("Welcome $name<br />");
	} else {
		print("Authentification error<br />");
		echo("<a href=$provenance>Retry</a>");
	}

?>

</div>

</body>
</html>