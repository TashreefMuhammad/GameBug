<?php 
session_start();
include("header.php");
// print_r($_SESSION);
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/2.png" alt="First slide">
       <div class="carousel-caption d-none d-md-block">
        <h1>CHOOSE BEST GAMES</h1>
         <p>Know about best games and reviews on them.</p>
         <a class="btn btn-info btn-lg" href="allproducts.php">Browse Games</a>
       </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/3.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h1>CHOOSE BEST GAMES</h1>
         <p>Know about best games and reviews on them.</p>
         <a class="btn btn-info btn-lg" href="allproducts.php">Browse Games</a>
       </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/5.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h1>CHOOSE BEST GAMES</h1>
         <p>Know about best games and reviews on them.</p>
         <a class="btn btn-info btn-lg" href="allproducts.php">Browse Games</a>
       </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/8.jpg" alt="Fourth slide">
      <div class="carousel-caption d-none d-md-block">
        <h1>CHOOSE BEST GAMES</h1>
         <p>Know about best games and reviews on them.</p>
         <a class="btn btn-info btn-lg" href="allproducts.php">Browse Games</a>
       </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/4.png" alt="Fifth slide">
      <div class="carousel-caption d-none d-md-block">
        <h1>CHOOSE BEST GAMES</h1>
         <p>Know about best games and reviews on them.</p>
         <a class="btn btn-info btn-lg" href="allproducts.php">Browse Games</a>
       </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<?php include("footer.php")?>