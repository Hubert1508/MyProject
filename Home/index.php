<?php
	session_start();
	if(isset($_SESSION['user']))
	header('Location:/logowanie/HomePage/index.php');
 ?>
<!DOCTYPE HTML>

<html lang="pl">

<head>

<meta charset="utf-8" />

<title>Home</title>

<link rel="stylesheet" href="style.css" type="text/css"/>

<script LANGUAGE= "JavaScript" type= "text/javascript"></script>

<script>

	function login()

		{
			document.location.href = "/logowanie/HomePage/index.php";
		}

</script>

</head>
<body>
	<br></br>

	<h1>By zacząć kurs programowania zaloguj sie na stronie</h1>

	<br></br>

	<div class="button" style=" text-align: center;">
		<button onclick="login()" title="zaloguj">zaloguj</button>

	</div>

</body>
</html>
