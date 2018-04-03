<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
       @include("partials._head")
    </head>
    <body>

    @include("partials/_nav")

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

        @yield("content")

    </div><!--close the .container-->

        @include("partials._footer")
        @include('partials._javascript')

    </body>
</html>
