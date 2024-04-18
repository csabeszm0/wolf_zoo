<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Wolf Vadaspark</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="../index.html"> 
              <img src="../img/wolf.svg" alt="">Wolf Zoo</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../index.html">Kezdőlap</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../html/allataink.html">Állataink</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../php/orokbefogadas.php">Örökbefogadás</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../html/jegyarak.html">Jegyárak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../php/infok.php" tabindex="-1" aria-disabled="true">Információk</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

<header>
    
</header>


    <div class="container">
        <div class="row">
            <h1 class="my-4">Wolf Vadaspark - Információk</h1>
        </div>
    </div>
    
<div class="container">
  <div class="row">
    <div class="col-md-8 my-4">
    
      <?php
      require('connect.php');
      dbcon();
      
      $query='SELECT * FROM `menu`';
      $eredm=mysqli_query($con,$query);
      echo"<h2 class='text-center'>Panda-büfé kínálata</h2>";
      echo"<table class='table table-hover'>
      <thead>
      <tr><th>Menü kódja</th><th>Megnevezés</th><th>Leírás</th><th>Ár</th><th>Kép</th></tr>
      </thead>";
      while($sor=mysqli_fetch_array($eredm))
      {
          echo"<tr>";
          echo"<td>".$sor["menuid"]."</td><td>".$sor["megnev"]."</td><td>".$sor["leiras"]."</td>
          <td>".$sor["ar"]." Ft</td><td width='25%'><img src='../img/".$sor["kep"]."' width='100%'></td>";
          echo"</tr>";
      }
      echo"</table>";

      $query='SELECT * FROM `etetes`';
      $eredm=mysqli_query($con,$query);
      echo"<h2 class='text-center'>Látványetetések</h2>";
      echo"<table class='table table-hover'>
      <thead>
      <tr><th>Sorszám</th><th>Megnevezés</th><th>Időpont</th><th>Kép</th></tr>
      </thead>";
      while($sor=mysqli_fetch_array($eredm))
      {
          echo"<tr>";
          echo"<td>".$sor["etetesid"]."</td><td>".$sor["megnev"]."</td>
          <td>".$sor["idopont"]."</td><td width='200px'><img src='../img/".$sor["kep"]."' width='100%'></td>";
          echo"</tr>";
      }
      echo"</table>";
      ?>

      
    </div>
    <div class="col-md-4 my-4 text-center">
      <h2>Panda-büfé</h2>
      <img src="../img/bufe.png" alt="Panda-büfé" class="img-fluid rend-img">
    </div>
  </div>
</div>
    
    

<footer>
<div class="row">
        
<div class="col-md-6 col-lg-4 offset-lg-1 mt-2">
<h4>Hírlevél</h4>
<p>Iratkozzon fel hírlevelünkre!</p>
    
   
<form action="">
  <div class="input-group mb-3">
    <input type="text" id="email" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="button-addon2">
    <button class="btn btn-primary" type="button" id="button-addon2" onclick="feliratkozas();">Feliratkozom!</button>
  </div> 
</form>
</div>

<div class="col-md-6 col-lg-4 offset-lg-1 mt-2">
  <h4>Elérhetőségek</h4>
  <ul>
      <li><img src="../img/letter.svg" alt="">Wolf Vadaspark</li>
      <li><img src="../img/email.svg" alt="">wolf@vadaspark.hu</li>
      <li><img src="../img/telephone.svg" alt="">+36-30-555-5555</li>
  </ul>
</div>

<div class="col-md-6 col-lg-4 offset-lg-1 mt-2">
  <h4>Nyitvatartási rend</h4>
  <p>Minden nap 10:00 - 18:00 óráig</p>
  <p>Pénztárzárás: 17:00 órakor</p>
</div>

<div class="col-md-6 col-lg-4 offset-lg-1 mt-2">
  <h4>Megközelíthetőség</h4>
  <p>6900 Makó, Zoo utca 1.</p>
  <p>Szeged irányából az M43-as út mentén, a város tábla előtt jobbra.</p>
</div>

<div class="col-12 text-center pb-3">&copy; Copyright 2022</div>

</div>

 
   
</footer>


<script src="../js/bootstrap.min.js"></script>

<script>
function feliratkozas(){
let email=document.getElementById('email').value;
if(email == ""){
  alert("A mező kitöltése kötelező!");
}
else {
  alert("Sikeresen feliratkozott! Köszönjük!");
}

}
</script>

</body>
</html>