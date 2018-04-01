<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>FitLive</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <style>
            body {
                /* The image used */
                /* Full height */
                height: 100%;
                /* Center and scale the image nicely */
                background-image: url("/img/bk.jpg");
                background-position:fixed;
                background-size:cover;

            }
            .jumbotron {
                height: 70vh !important;
                background: rgb(200, 54, 54); /* This is for ie8 and below */
                background: rgba(200, 54, 54, 0.5);
            }

            .navbar-inverse {
                background-color: #323232; }
            .footer {
                background-color:#323232;
                margin: 0px auto;
                padding: 20px 0px;
                color:floralwhite;
            }


            }
        </style>
    </head>
    <body>
    <div class="bg"></div>
    <nav class="navbar navbar-inverse navbar-expand-sm">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar1">
                    <span class="navbar-toggler-icon"></span>
                </button>
               <!-- <a class="navbar-left logo-link" href="">{{ Html::image("img/ab-logo.png", "Logo", array('class' => 'logo d-inline-block align-top navbar-brand')) }}</a>-->
                <a class="navbar-brand" href=""> FitLive</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar1">
                <ul class="navbar-nav ml-auto">
                    <li class="{{ Request::is('/') ? "active" : "" }} nav-item"><a href="/" class="nav-link">Home</a></li>
                    <li class="{{ Request::is('services') ? "active" : "" }}nav-item"><a href="/services" class="nav-link">Services</a></li>
                    <li class="{{ Request::is('blog') ? "active" : "" }} nav-item"><a href="/blog" class="nav-link">Reviews </a></li>
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
        </div><!-- /.container-fluid -->
    </nav>

    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1>JOIN NOW</h1>
                    <p style="color:floralwhite">Join today and get great deals on packafges tailored to you. We have a range of trainers and classes to choose from. Sign up today for a 10% disount.</p>
                </div>

                <div class="col-12 col-sm-3 align-self-center">
                    <a href ="#" class="btn btn-block btn-sm btn-warning navbar-toggle" id="reserveTable">Sign Up Today</a>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class=" col-sm-9">

                <div class="card mb-4">
                    <div class="card-header">
                        Features
                    </div>
                    <div class="card-body">

                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged..</p>
                        <a href="#" class="btn btn-primary">Start experiencing today</a>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        Qaulified Trainers
                    </div>
                    <div class="card-body">

                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        <a href="#" class="btn btn-primary">Start experiencing today</a>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        Pricing
                    </div>
                    <div class="card-body">

                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        <a href="#" class="btn btn-primary">Start experiencing today</a>
                    </div>
                </div>

           </div>
            <div class=" col-sm">
                <div class="card h-95">
                    <div class="card-header">
                        Reviews
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum</li>
                        <li class="list-group-item"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum</li>
                        <li class="list-group-item"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum</li>
                        <li class="list-group-item"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum</li>
                        <li class="list-group-item"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum</li>
                        <li class="list-group-item"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum</li>
                        <li class="list-group-item"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum</li>
                    </ul>
                </div>
                </div>

        </div>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-5 offset-1 col-sm-2">
                        <h5>Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Home</a></li>
                            <li><a href="./aboutus.html">About</a></li>
                            <li><a href="#">Menu</a></li>
                            <li><a href="./contactus.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-5">
                        <h5>Our Address</h5>
                        <address>
                            Belfast, Northern Ireland<br>
                            United Kingdom<br>
                            <span class="fa fa-phone fa-lg"></span>: +852 1234 5678<br>
                            <span class="fa fa-fax fa-lg"></span>: +852 8765 4321<br>
                            <span class="fa fa-envelope fa-lg"></span>: <a href="mailto:confusion@food.net">FitLive@live.net</a>
                        </address>
                    </div>
                    <div class="col col-sm-4 align-self-center">
                        <div class="text-align:center">
                            <a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><span class="fa fa-google-plus"></span></a>
                            <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><span class="fa fa-facebook"></span></a>
                            <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><span class="fa fa-linkedin"></span></a>
                            <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><span class="fa fa-twitter"></span></a>
                            <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><span class="fa fa-youtube"></span></a>
                            <a class="btn btn-social-icon btn-mail" href="mailto:"><span class="fa fa-envelope-o "></span></a>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright py-3 text-center">
                    © 2018 Copyright:
                    <a href="https://mdbootstrap.com/material-design-for-bootstrap/"> Adam Batten </a>
                </div>
            </div>
        </footer>







    </div><!--close the .container-->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    </body>
</html>
