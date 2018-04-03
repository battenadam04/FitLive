<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>FitLife @yield('title')</title> <!-- CHANGE THIS TITLE FOR EACH PAGE -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</style>{{ Html::style('css/styles.css') }}

@yield('stylesheets')
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

</style>
