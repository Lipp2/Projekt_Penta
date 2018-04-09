<?php
require("header.php");
?>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
  <nav id="#Navbar" class="navbar navbar-expand-sm navbar-dark fixed-top">
      <a class="navbar-brand" href="#Home">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                  <a class="nav-link" href="#news">News</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#team">Team?</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#guestbook">Guestbook</a>
              </li>
          </ul>
      </div>
  </nav>
  <!--100% * 100% Willkommensfenster mit nem Hintergrundbild und nen Jumbotron in Mitte zentiert gelegt-->
  <!--Welcome Message-->
  <div class="">
    <div class="">
      <div class="jumbotron background-img-1 text-center m-0">
      <div class="jumbo-welcome rounded justify-content-center">
          <h1 class="display-3 text-light">Welcome!</h1>
          <p class="lead text-light">This website is awesome as fuckboi</p>
      </div>
      </div>
    </div>
  </div>
<?php
require("footer.php");
?>
