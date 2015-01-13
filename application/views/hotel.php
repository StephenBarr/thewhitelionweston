<?php include('header.php'); ?>
<div class="container-fluid one lounge">
  <div class="row header"> <a class="logo" href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>static/images/logo.png" /></a>
    <h1>The White Lion</h1>
    <h4>Eat/Drink/Sleep</h4>
  </div>
</div>
<div class="container two lounge">
  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6 text-center">
      <h1>Hotel</h1>
    </div>
    <div class="col-lg-3"></div>
  </div>
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center"> <img class="break" src="<?php echo BASE_URL; ?>static/images/break.png" /> </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
  </div>
  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6 text-center">
      <h2>And so to bed...</h2>
      <p>Our 17 en-suite bedrooms are comfortable and offer all the amenities you would come expect - LCD TV, tea & coffee making facilities and a home-cooked breakfast in the morning.</p>
	  <p>During your stay, why not explore the wonderful Cheshire countryside, right on our doorstep!</p>
    </div>
    <div class="col-lg-3"></div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div id="hotelCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#hotelCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#hotelCarousel" data-slide-to="1"></li>
        <li data-target="#hotelCarousel" data-slide-to="2"></li>
        <li data-target="#hotelCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="<?php echo BASE_URL; ?>static/images/hotel_slide_1.jpg" alt="First slide">
        </div>
        <div class="item">
          <img src="<?php echo BASE_URL; ?>static/images/hotel_slide_2.jpg" alt="Second slide">
        </div>
        <div class="item">
          <img src="<?php echo BASE_URL; ?>static/images/hotel_slide_3.jpg" alt="Third slide">
        </div>
        <div class="item">
          <img src="<?php echo BASE_URL; ?>static/images/hotel_slide_4.jpg" alt="Fourth slide">
        </div>
      </div>
      <a class="left carousel-control" href="#hotelCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#hotelCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
<div class="container three lounge">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4"> <a href="#" class="midlink"> <img src="<?php echo BASE_URL; ?>static/images/home_2.jpg" class="smooth" /> <span class="smooth">Click to read more</span> </a>
      <h1>Conferences</h1>
      <p>The White Lion has a private meeting and function room available for hire.</p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4"> <a href="#" class="midlink"> <img src="<?php echo BASE_URL; ?>static/images/home_3.jpg" class="smooth" /> <span class="smooth">Click to read more</span> </a>
      <h1>Menus</h1>
      <p>Here you can download our Restaurant Menu, Drinks Book and Wine Cellar List.</p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4"> <a href="#" class="midlink"> <img src="<?php echo BASE_URL; ?>static/images/home_4.jpg" class="smooth" /> <span class="smooth">Click to read more</span> </a>
      <h1>Gallery</h1>
      <p>Go thorough a collection of photographs of the restaurant and pub here.</p>
    </div>
  </div>
</div>
<div class="container four lounge">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center"> <img class="break" src="<?php echo BASE_URL; ?>static/images/break.png" /> </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
  </div>
</div>
<?php include('footer.php'); ?>