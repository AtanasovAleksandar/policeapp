<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }

?>

<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

  <img alt="logo" src="img/logo.png">
<nav class="nav">
    <a href="#"> <img class="social" src="img/fb.png"></a>
    <a href="#"> <img class="social1" src="img/youtube.png"></a>
     <a href="#"><img class="social2" src="img/viber.png"></a>
      <a href="#"><img class="social3" src="img/google-plus.png"></a>

      if (isset($_SESSION['username'])) : ?>
       <p class="najaven">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
       <p class="odjavi"> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
      </nav>


                <!-Lev del - >
<div class="left">

        <img class="baraj" src="img/search.png">
        <form action="#" method="POST">


          <input type="text" name="search" placeholder="Барај личност">


        </form>
      </div>



                <!-Desen del ->
      <div class="right">
        <h1 class="log">Регистирај се !</h1>


                <!- Forma ->
        <form action="" method="POST">
          <input type="text" name="bod" placeholder="казнени поени">
          <br>
        <input type="text" name="prom" placeholder="алхокол во крвта">
              <br>
              <input type="text" name="brzina" placeholder="брзина на движење">
            <br>
            <div class="dane">
            <input type="radio" name="svetlo" value="da"> ДА
            <input type="radio" name="svetlo" value="ne"> НЕ<br>
            </div>
             <div class="dane">
            <input type="radio" name="pojas" value="da"> ДА
            <input type="radio" name="pojas" value="ne"> НЕ<br>
            </div>
             <div class="dane">
            <input type="radio" name="sema" value="da"> ДА
            <input type="radio" name="sema" value="ne"> НЕ<br>
            </div>
            <input class="kaz" type="submit" name="log" value="Пресметај казна" >

            <h2 class="svet">Вклучени светла</h2>
            <h2 class="poj">Ставен појас</h2>
            <h2 class="sem">Поминал на црвено</h2>

            <img class="alkoo" src="img/beer.png">
              <img class="doc" src="img/sum.png">
              <img class="sped" src="img/speed.png">



        </form>

  </div>


<?

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>
