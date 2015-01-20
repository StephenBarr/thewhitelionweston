<?php include('header.php'); ?>
<div class="container-fluid one gallery">
  <div class="row header"> <a class="logo" href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>static/images/logo.png" /></a>
    <h1>The White Lion</h1>
    <h4>Eat/Drink/Sleep</h4>
  </div>
</div>
<div class="container two gallery">
  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6 text-center">
      <h1>Gallery</h1>
    </div>
    <div class="col-lg-3"></div>
  </div>
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center"> <img class="break" src="<?php echo BASE_URL; ?>static/images/break.png" /> </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div id="galleryCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#galleryCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#galleryCarousel" data-slide-to="1"></li>
        <li data-target="#galleryCarousel" data-slide-to="2"></li>
        <li data-target="#galleryCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="<?php echo BASE_URL; ?>static/images/gallery_slide_1.jpg" alt="First slide">
        </div>
        <div class="item">
          <img src="<?php echo BASE_URL; ?>static/images/gallery_slide_2.jpg" alt="Second slide">
        </div>
        <div class="item">
          <img src="<?php echo BASE_URL; ?>static/images/gallery_slide_3.jpg" alt="Third slide">
        </div>
        <div class="item">
          <img src="<?php echo BASE_URL; ?>static/images/gallery_slide_4.jpg" alt="Fourth slide">
        </div>
      </div>
      <a class="left carousel-control smooth" href="#galleryCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control smooth" href="#galleryCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
<div class="container three gallery">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4"> <a href="<?php echo BASE_URL; ?>conferences/" class="midlink"> <img src="<?php echo BASE_URL; ?>static/images/home_2.jpg" class="smooth" /> <span class="smooth">Click to read more</span> </a>
      <h1>Conferences</h1>
      <p>The White Lion has a private meeting and function room available for hire.</p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4"> <a href="<?php echo BASE_URL; ?>about/" class="midlink"> <img src="<?php echo BASE_URL; ?>static/images/home_3.jpg" class="smooth" /> <span class="smooth">Click to read more</span> </a>
      <h1>Menus</h1>
      <p>Here you can download our Restaurant Menu, Drinks Book and Wine Cellar List.</p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4"> <a href="<?php echo BASE_URL; ?>hotel/" class="midlink"> <img src="<?php echo BASE_URL; ?>static/images/home_6.jpg" class="smooth" /> <span class="smooth">Click to read more</span> </a>
      <h1>Hotel</h1>
      <p>Find out more about our accomodations and bed and breakfast services.</p>
    </div>
  </div>
</div>
<div class="container four gallery">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center"> <img class="break" src="<?php echo BASE_URL; ?>static/images/break.png" /> </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
  </div>
</div>
<?php include('footer.php'); ?>