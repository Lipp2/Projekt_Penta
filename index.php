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
  <!--Welcome Message-->
  <div id="home" class="">
    <div class="jumbotron background-img-1 text-center m-0">
      <div class="jumbo-welcome rounded justify-content-center">
          <h1 class="display-3 text-dark font-weight-bold">Welcome!</h1>
          <p class="lead text-dark font-weight-bold font-italic">This is our first website together!</p>
      </div>
    </div>
  </div>

  <!-- News Section -->
  <section id="news" class="banner-sec">
    <div class="row">
      <div class="container-fluid">
        <div id="newsJumbotron" class="jumbotron background-img-2 text-center m-0">
          <div id="newsJumboWelcome" class="jumbo-welcome rounded justify-content-center">
            <div class="col-md-3">
              <div class="card"> <img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/politics.jpg" alt="">
                <div class="card-img-overlay"> <span class="badge badge-pill badge-danger">News</span> </div>
                  <div class="card-body">
                    <div class="news-title">
                      <h2 class=" title-small"><a href="#">Syria war: Why the battle for Aleppo matters</a></h2>
                    </div>
                    <p class="card-text"><small class="text-time"><em>3 mins ago</em></small></p>
                  </div>
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
            <div class="col-md-6 top-slider">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                          <div class="news-block">
                      <div class="news-media"><img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/politics1.jpg" alt=""></div>
                      <div class="news-title">
                              <h2 class=" title-large"><a href="#">Ray madison may struggle to get best from Paul in a 4-2-3-1 formation</a></h2>
                            </div>
                      <div class="news-des text-light">Condimentum ultrices mi est a arcu at cum a elementum per cum turpis dui vulputate vestibulum in vehicula montes vel. Mauris nam suspendisse consectetur mus...</div>
                      <div class="time-text text-light"><strong>2h ago</strong></div>
                      <div></div>
                    </div>
                  </div>
                  <div class="carousel-item">
                          <div class="news-block">
                      <div class="news-media"><img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/sport1.jpg" alt=""></div>
                      <div class="news-title">
                              <h2 class=" title-large"><a href="#">An Alternative Form of Mental Health Care Gains a Foothold</a></h2>
                            </div>
                      <div class="news-des text-light">Condimentum ultrices mi est a arcu at cum a elementum per cum turpis dui vulputate vestibulum in vehicula montes vel. Mauris nam suspendisse consectetur mus...</div>
                      <div class="time-text text-light"><strong>2h ago</strong></div>
                      <div></div>
                    </div>
                  </div>
                  <div class="carousel-item">
                          <div class="news-block">
                      <div class="news-media"><img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/health.jpg" alt=""></div>
                      <div class="news-title">
                              <h2 class=" title-large"><a href="#">Key Republican Senator Says She Will Not Vote for former president!</a></h2>
                            </div>
                      <div class="news-des text-light">Condimentum ultrices mi est a arcu at cum a elementum per cum turpis dui vulputate vestibulum in vehicula montes vel. Mauris nam suspendisse consectetur mus...</div>
                      <div class="time-text text-light"><strong>2h ago</strong></div>
                      <div></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Teams-->
  <section id="team">
    <div class="row">
      <div class="container-fluid">
        <div class="jumbotron background-img-2 text-center m-0">
          <div class="jumbo-welcome rounded justify-content-center">
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
require("footer.php");
?>
