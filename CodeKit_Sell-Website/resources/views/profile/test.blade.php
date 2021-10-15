<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 150%;
/*     margin: auto;
 */  }
  </style>
</head>
<body>

<div class="">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->


    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img class="" src="{{ URL::to('/assets/img/main1.jpg') }}">
      </div>

      <div class="item">      
        <img class=""   src="{{ URL::to('/assets/img/main2.jpg') }}">
      </div>
    
      <div class="item">
        <img class="" src="{{ URL::to('/assets/img/main3.jpg') }}">
      </div>
      <div class="item">     
          <img class="" src="{{ URL::to('/assets/img/main2.jpg') }}">
      </div>
      <a class="left carousel-control w-full" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="right carousel-control w-full" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      </a>
  </div>
</div>
<div class="h-20 bg-black w-full">
  Heloo
</div>

<x-welcome.footer>

</x-welcome.footer>
</body>
</html>
