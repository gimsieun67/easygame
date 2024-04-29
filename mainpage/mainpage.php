<?php
session_start();
if(empty($_SESSION['uid'])){
  header('Location: /index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EasyGame</title>
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <header>
      <div class="logo flex">
        <img src="./images/Easy_Game_Logo.png" alt="logo" />
      </header>
      </div>
      <div class="container">
        <div class="bgImg">
          <nav>
            <ul class="mainmenu flex">
              <li><a>Mainpage</a></li>
              <li><a href="wordleGame/wordle.html">Games</a></li>
              <li><a href="board/board.html">board</a></li>
            </ul>
          </nav>
        </div>
      </div>
  </body>
  <script src="./script.js"></script>
</html>
