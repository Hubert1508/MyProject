<?php
	session_start();
 ?>
<!DOCTYPE HTML>
<html lang="pl">

<head>

<meta charset="utf-8" />

<title>Logowanie</title>

<link rel="stylesheet" href="style.css" type="text/css"/>

<script>
function main()
	{
				var input = document.getElementById('pole');
					console.log(input);
				input.addEventListener("keyup", function(event)
					{
		  		if (event.keyCode === 13)
					{
		   			event.preventDefault();
		   			check();
		  		}
					});
	}
</script>

</head>
<body onload="main()">

	<center>
	<br></br>
	<H1>Wprowadź nazwę użytkownika i hasło:</H1>
	<form action="zaloguj.php" name="form1" method="post" >
	<TABLE><TR>
	<TD>Użytkownik:</TD>
	<TD>
	  <INPUT TYPE="text" NAME="user"/>
	</TD>
	</TR><TR>
	<TD>Hasło:</TD>
	<TD>
	  <input TYPE="password" NAME="pass" id="pole" />
	</TD>
	</TR><TR>
	<TD colspan="2" align="center">
	  <input class="logowanie" type="submit" VALUE="Zaloguj się"/>
	</TD>
	</TR></TABLE>
	</form>
</br>
	<?php
		if(isset($_SESSION['blad'])) echo $_SESSION['blad'];
	 ?>
	</center>

</body>
</html>
