<!DOCTYPE html>
<html lang="en">
  <head>
     <title>IDC_UT</title>
     <meta charset="utf-8">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="decor.css">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        
    </head>
   
   <body>
      <?php include("tete.php"); ?>
    

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="photos/ut.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="photos/ensa.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="photos/iut.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>   




  </body>
        
</html>