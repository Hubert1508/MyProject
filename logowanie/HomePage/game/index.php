<?php
	session_start();
	if(!isset($_SESSION['user']))
	{
		header('Location:/logowanie/index.php');
		exit();
	}
 ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <title>Gra W Memory</title>
    <meta name="description" content="JS Memory Game inspired by Gwent"/>
    <meta name="keywords" content="javascript, jquery, game, gwent, memory"/>
    <meta name="author" content="Hubert Nowak">
    <meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1"/>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>
  <header>
      <h1>Gra W Memory</h1>

        <div style=" text-align: center; height:50px;">

    			<button onclick="game()">Witcher</button>

          <button onclick="minecraft()">Minecraft</button>

          <button onclick="endGame()">Koniec</button></p>

    		</div>
  </header>

  <main>
    <article>

      <div class="board"></div>

      <div class="score" style="text-align:center;">Ilość ruchów: 0</div>

    </article>

  </main>

  <script src="jquery-3.4.1.min.js"></script>
  <script src="memory.js"></script>

</body>
</html>
