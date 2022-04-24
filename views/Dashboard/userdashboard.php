<body width="100%">
<?php
require 'views/dashboard/shared/usermenu.php';
?>
<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 50%;
  }

  .text {
    padding-left: 10px;
  }


  .cmt {
    padding: 15px 0;
  }
</style>
<body class="container-fluid">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/watersupply/images/ww.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="/watersupply/images/ww1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="/watersupply/images/ww2.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div><br>
<div class= "row container-flex">
 
<?php
      while($row = $result->fetch_assoc()){
    ?>
  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col mt-3">
    <div class="card m-auto mt-2">
      <img class="card-img-top" src="/watersupply/images/<?= $row['wimage']?>" alt="Card image cap" width="200px" height="200px">
      <div class="card-body">
        <h5 class="card-title"><?= $row['comp_name']?></h5>
        <h5 class="card-text"> Rs.<?= $row['price']?></h5>
        
        <submit href="/watersupply/Dashboard/addCart?pid=<?=$row["wid"]?>" class="btn btn-primary">Add to Cart</submit>     
      </div>
    </div>
  </div>

   <?php } ?>
</div>
</body>

<?php
require_once "./views/dashboard/shared/footer.php";
?>

