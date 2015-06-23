<!DOCTYPE HTML>
<html>
<head>
    <title>8loginArray1</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type='text/javascript' src='script.js'></script>
</head>
<body>

<div id="right"><?php include("menu.php"); ?></div>

<div id="left">

<h3>8loginArray1, index</h3>

<p>8loginArray1</p>

<form action="./processLoginArray.php" method="POST">

	<label for="name">Name</label>
	<input type="text" name="name"/>

	<label for="pwd">Pass</label>
	<input type="text" name="pwd"/>

    <input type="submit">

</form>

</div>

</body>
</html>