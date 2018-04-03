<nav class="navbar navbar-inverse navbar-expand-sm navbar-dark">

  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <a class="navbar-left logo-link" href="">{{ Html::image("img/ab-logo.png", "Logo", array('class' => 'logo d-inline-block align-top navbar-brand')) }}</a>
    <a class="navbar-brand" href="/"> FitLive</a>
  </div>
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-one">
    <span class="navbar-toggler-icon"></span>
  </button>



  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="navbar-one">
    <ul class="navbar-nav ml-auto">
      <li class="{{ Request::is('/') ? "active" : "" }} nav-item"><a href="/" class="nav-link">Home</a></li>
      <li class="{{ Request::is('services') ? "active" : "" }}nav-item"><a href="/services" class="nav-link">Services</a></li>
      <li class="{{ Request::is('blog') ? "active" : "" }} nav-item"><a href="/reviews" class="nav-link">Reviews </a></li>
      <li class="{{ Request::is('about') ? "active" : "" }}nav-item"><a href="/about" class="nav-link">About</a></li>
      <li class="{{ Request::is('contact') ? "active" : "" }}nav-item"><a href="/contact" class="nav-link">Contact</a></li>
      <li class="dropdown nav-item">
        <a href="/" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="" class="btn ">Login</a></li>
          <li><a href="" class="btn ">Register</a></li>
        </ul>
      </li>
    </ul>


  </div><!-- /.navbar-collapse -->

</nav>