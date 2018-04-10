<?php
require("header.php");
?>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
  <nav id="#Navbar" class="navbar navbar-expand-sm navbar-dark fixed-top">
      <a class="navbar-brand" href="#home">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                  <a class="nav-link" href="#news">News</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#team">Team</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#guestbook">Guestbook</a>
              </li>
          </ul>
      </div>
  </nav>
  <!--100% * 100% Willkommensfenster mit nem Hintergrundbild und nen Jumbotron in Mitte zentiert gelegt-->
  <!--Welcome Message-->
  <div id="home" class="">
    <div class="">
      <div class="jumbotron background-img-1 text-center m-0">
      <div class="jumbo-welcome rounded justify-content-center">
          <h1 class="display-3 text-light">Welcome!</h1>
          <p class="lead text-light">This is our first website together!</p>
      </div>
      </div>
    </div>
  </div>

  <!-- News Section -->
  <section id="news" class="banner-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="card"> <img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/politics.jpg" alt="">
            <div class="card-img-overlay"> <span class="badge badge-pill badge-danger">News</span> </div>
            <div class="card-body">
              <div class="news-title">
                <h2 class=" title-small"><a href="#">Syria war: Why the battle for Aleppo matters</a></h2>
              </div>
              <p class="card-text"><small class="text-time"><em>3 mins ago</em></small></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card"> <img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/business1.jpg" alt="">
            <div class="card-img-overlay"> <span class="badge badge-pill badge-danger">Travel</span> </div>
            <div class="card-body">
              <div class="news-title">
                <h2 class=" title-small"><a href="#">Obamacare Appears to Be Making People Healthier</a></h2>
              </div>
              <p class="card-text"><small class="text-time"><em>3 mins ago</em></small></p>
            </div>
          </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="..." alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="..." alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="..." alt="Third slide">
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
      </div>
    </div>
  </section>
<?php
require("footer.php");
?>
