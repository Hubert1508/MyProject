<?php
	session_start();
	if(!isset($_SESSION['user']))
	{
		header('Location:/logowanie/index.php');
		exit();
	}
 ?>
	<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="utf-8" />
	<title>Programowanie</title>

	<meta name="description" content="Programuj z nami!" />
	<meta name="keywords" content="programowanie, c++, html, javaScript, PHP, C++ Object, MySQL, kursy" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<link rel="stylesheet" href="style.css" type="text/css"/>

	<title>Font Awesome Icons</title>
	<meta name='viewport' content='width=device-width, initial-scale=1'/>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link href="https://fonts.googleapis.com/css?family=Audiowide&display=swap" rel="stylesheet"/>

<script>

		function getCookie(cname)
		 {
				var name = cname + "=";
				var decodedCookie = decodeURIComponent(document.cookie);
				var ca = decodedCookie.split(';');
				for(var i = 0; i <ca.length; i++) {
				var c = ca[i];
				while (c.charAt(0) == ' ') {
					c = c.substring(1);
				}
				if (c.indexOf(name) == 0) {
					return c.substring(name.length, c.length);
				}
				}
				return "";
			}

        function zegarek()
        {
            var data = new Date();
            var godzina = data.getHours();
            var minuta = data.getMinutes();
            var sekunda = data.getSeconds();
            var dzien = data.getDate();
            var dzienN = data.getDay();
            var miesiac = data.getMonth();
            var rok = data.getFullYear();

            if (minuta < 10) minuta = "0" + minuta;
            if (sekunda < 10) sekunda = "0" + sekunda;
						if (godzina == 0) godzina = "0" + godzina;

            var dni = new Array("niedziela", "poniedziałek", "wtorek",
							"środa", "czwartek", "piątek", "sobota");
            var miesiace = new Array("stycznia", "lutego", "marca",
							"kwietnia", "maja", "czerwca", "lipca", "sierpnia",
							"września", "października", "listopada", "grudnia");

            var pokazDate = "Dzisiaj jest " + dni[dzienN] + ', ' + dzien + ' '
							+ miesiace[miesiac] + ' ' + rok + " roku.<br />Godzina "
							+ godzina + ':' + minuta + ':' + sekunda;

            document.getElementById("zegar").innerHTML = pokazDate;

            setTimeout(zegarek,1000);
        }

			function myFunction()

			{
				document.getElementById("kontakt").innerHTML = "Hubert Nowak</br>hubert_nowak11@interia.pl";
			}

			//function clearHello()
			//{
				//document.getElementById("hello").style.display = "none";
			//}
				//setTimeout("clearHello()", 8000);

			function clearKontakt()
			{
				document.getElementById("kontakt").innerHTML="";
			}

			function checkCookieAccept()
		 	{
				var acceptCookie=getCookie("simplecookienotification_v01");
				if (acceptCookie!= "")
				{
				  document.getElementById("simplecookienotification_v01").style.display="none";
				}
			}
</script>

<script type="text/javascript">

	var galTable= new Array();
	var galx = 0;

</script>

<script type="text/javascript">

	function simplecookienotification_v01_create_cookie(name,value,days)
	{
		if (days)
		{
			var date = new Date(); date.setTime(date.getTime()+(days*24*60*60*1000));
			var expires = "; expires="+date.toGMTString();
		}
			else var expires = ""; document.cookie = name+"="+value+expires+"; path=/";
	 		document.getElementById("simplecookienotification_v01").style.display = "none";
	  }

	 function simplecookienotification_v01_read_cookie(name)
	 {
		 var nameEQ = name + "=";
		 var ca = document.cookie.split(";");
		 for(var i=0;i < ca.length;i++)
		 {
			 var c = ca[i];
			 while (c.charAt(0)==" ") c = c.substring(1,c.length);
			 if (c.indexOf(nameEQ) == 0)
			 return c.substring(nameEQ.length,c.length);
	   }
		 		return null;
	 }

	 	var simplecookienotification_v01_jest = simplecookienotification_v01_read_cookie("simplecookienotification_v01");

		if(simplecookienotification_v01_jest==1)
			{
				document.getElementById("simplecookienotification_v01").style.display = "none";
			}

		function game()

			{
				document.location.href = "/logowanie/HomePage/game/index.php";
			}
</script>
</head>

<body onload="zegarek(), checkCookieAccept()">

<div class="container" style="margin-left: auto; margin-right: auto;">

		<div id = "zegar" style="color: lightblue; text-shadow:3px 3px 10px aqua; font-size: 20px; text-align: right;"></div></br>

		<div id = "hello" style = "font-size: 40px; text-shadow: 3px 3px 15px aqua;">

			<?php
				if($_SESSION['user']=="Mlody")
					{
						echo "<p>Witaj Młody!</pl>
									<p>Dziś nie czas na wiadro i wodę lecz prawdziwą przygodę :)</p>";
					}
					else
					{
						echo "<p>Witaj ".$_SESSION['user']."!</p>";
					}

			 ?>

		</div>

		<h1>Wybierz Kurs Dla Siebie</h1>

		<div class = "menu">

			<a href="https://miroslawzelent.pl/kurs-c++/"  target="_blank" title="Zajrzyj do świata C++">
				<img src="picture/haker.jpg" style="border-radius: 25px; text-align:center;"/></a>

			<a href="https://miroslawzelent.pl/kurs-obiektowy-c++/" target="_blank" title="Zajrzyj do świata C++ Object">
				<img src="picture/haker3.jpeg"  style="border-radius: 25px; text-align: right;"/></a>

			<a href="https://miroslawzelent.pl/kurs-html/" target="_blank" title="Zajrzyj do świata HTML">
				<img src="picture/haker2.jpg"  style="border-radius: 25px; text-align: right;"/></a>

			<a href="https://miroslawzelent.pl/kurs-css/" target="_blank" title="Zajrzyj do świata CSS">
				<img src="picture/haker3.jpg"  style="border-radius: 25px; text-align: right;"/></a>

		</div>

		<br></br>

		<div class = "menu">

			<a href = "https://miroslawzelent.pl/kurs-javascript/" target = "_blank" title = "Zajrzyj do świata JavaScript">
				<img src = "picture/haker4.jpg"  style="border-radius: 25px;"/></a>

			<a href = "https://miroslawzelent.pl/kurs-php/" target = "_blank" title = "Zajrzyj do świata PHP">
				<img src = "picture/haker6.jpg"  style="border-radius: 25px;"/></a>

			<a href = "https://miroslawzelent.pl/kurs-mysql/" target = "_blank" title = "Zajrzyj do świata MySQL">
				<img src = "picture/haker7.jpg"/></a>

			<a href = "https://miroslawzelent.pl/kurs-bootstrap/" target = "_blank" title = "Zajrzyj do świata Bootstrap">
				<img src = "picture/bootstrap.jpg"/></a>

		</div>

		</br>

	<div style = "height: 100px">

		<div class = "opcje">

			<button style = "background-color: white; border-radius: 15px; opacity: 0.9;">
				<a href = "https://pl-pl.facebook.com/" target = "_blank" title = "Zaloguj się do Facebooka">
					<i class = 'fab fa-facebook-square' style = "font-size: 70px; color: #3b5998; text-align: center;"></i></a>

			</button>

			<button style = "background-color: white; border-radius: 15px; opacity: 0.9;">
				<a href = "https://www.youtube.com/?gl=PL" target = "_blank" title = "Poszukaj na YouTube">
					<i class="fa fa-youtube" style="font-size: 70px; color: #CC0000; text-align: center;"></i></a>

			</button>

			<button style = "background-color: black; border-radius: 15px; opacity: 0.9;">
				<a href = "https://rogerdudler.github.io/git-guide/index.pl.html" target = "_blank" title = "Przewodnik git">
					<i class="fa fa-git" style = "font-size: 70px; color: white; text-align: center;"></i></a>

			</button>

			</br>

				<a href = "https://stackoverflow.com/" target = "_blank" title = "Odwiedź stronę StackOverflow">
					<button style = "cursor:pointer; font-size: 30px; color: #990000; background-color: #FF6600; opacity: 0.9;">
						StackOverflow <i class = "fa fa-stack-overflow" style = "color:black"></i>
					</button>
				</a>
			</div>

   </div>

		<br></br>

		<div class="zagraj" style=" text-align: center;">
			<button onclick="game()" style="border-radius:10px; cursor:pointer;
			text-shadow: 2px 2px 15px red; background-color: black; font-size: 25px;
			text-align: center; ">GRA</button>
			<p id="gra" style="color: white; text-shadow: 2px 2px 15px red;"></p>
		</div>

		<div class="button" style=" text-align: center;">
			<button onclick="myFunction()" ondblclick="clearKontakt()"
			style="border-radius:10px; cursor:pointer; text-shadow: 2px 2px 15px red;
			background-color: black; font-size: 25px; text-align: center; ">Kontakt</button>
			<p id="kontakt" style="color: white; text-shadow: 2px 2px 15px red;"></p>
		</div>

		<div>
			<a class="button" href="logout.php">Wyloguj</a>
		</div>

		<div id="simplecookienotification_v01" style="display: block; z-index: 99999;
			min-height: 35px; width: 100%; position: fixed; background: rgb(31, 31, 31);
			border: 0px rgb(198, 198, 198); text-align: center; right: 0px;
			color: rgb(119, 119, 119); bottom: 0px; left: 0px; border-radius: 0px;">

			<div style="padding:5px; margin-left:15px; margin-right:15px; font-size:17px; font-weight:normal;">
				<span id="simplecookienotification_v01_powiadomienie" style="margin-right:25px;">Ta strona używa plików cookies.</span>
					<span id="br_pc_title_html"><br></span>

				<a id="simplecookienotification_v01_polityka" href="http://jakwylaczyccookie.pl/polityka-cookie/"
					target="_blank" style="font-size: 14px; color: rgb(198, 198, 198);">Polityka Prywatności</a>
					<span id="br_pc2_title_html"> &nbsp;&nbsp; </span>

				<a id="simplecookienotification_v01_info" href="http://jakwylaczyccookie.pl/jak-wylaczyc-pliki-cookies/"
				 target="_blank" style="font-size: 14px; color: rgb(198, 198, 198);">Jak wyłączyć cookies?</a>
					<span id="br_pc3_title_html"> &nbsp;&nbsp; </span>

				<a id="simplecookienotification_v01_info2" href="https://nety.pl/cyberbezpieczenstwo"
					target="_blank" style="font-size: 14px; color: rgb(198, 198, 198);">Cyberbezpieczeństwo</a>
					<div id="jwc_hr1" style="height: 10px; display: none;"></div>

				<a id="okbutton" href="javascript:simplecookienotification_v01_create_cookie('simplecookienotification_v01',1,7);"
					style="position: absolute; background: red; color: rgb(255, 255, 255);
					padding: 5px 15px; text-decoration: none; font-size: 7px;
					font-weight: normal; border: 0px solid rgb(31, 31, 31);
					border-radius: 5px; top: 5px; right: 1px;">X</a>

					<div id="jwc_hr2" style="height: 10px; display: none;"></div>
			</div>
		</div>

		<h2>Strona w sieci od 2019r. Hubert Nowak &copy;Wszelkie prawa zastrzeżone.</h2>
</div>

</body>
