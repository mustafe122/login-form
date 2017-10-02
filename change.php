<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
            <script src="jquery-3.2.1.js"></script>
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="bootstrap.min.css">
           <script src="bootstrap.min.js"> </script> 
           <link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
           
           <style>
                @font-face { font-family: "Glyphicons Halflings"; 
              src: url(fonts/glyphicons-halflings-regular.ttf); } 
              </style>
  </head>

  <body>
<form class="col-md-12">
    <div class="row text-center">
        <div class="col-md-4 col-sm-12">
            <button type="button" class="btn btn-primary btn-block">Facebook</button>
        </div>
        <div class="col-md-4 col-sm-12">
            <button type="button" class="btn btn-info btn-block">Twitter</button>
        </div>
        <div class="col-md-4 col-sm-12">
            <button type="button" class="btn btn-danger btn-block">Google+</button>
        </div>
    </div>
    <hr />
    <div class="form-group">
        <input type="text" class="form-control input-lg" placeholder="Email">
    </div>
    <div class="form-group">
        <input type="password" class="form-control input-lg" placeholder="Password">
    </div>
    <div class="form-group">
        <input type="password" class="form-control input-lg" placeholder="Confirm Password">
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-lg btn-block">Sign In</button>
    </div>
</form>
<div class="container">
    <div id="carousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <img alt="Bootstrap template" src="http://placehold.it/1200x400/b4d9a7/ffffff&text=Company Information">
                <div class="carousel-caption">
                    <h3>Company information</h3>
                    <p>
                        Founded in 1892 and headquartered in Fairfield, CT, General Electric Company (LSE; NYSE: GE) 
                        is a technology and financial services company. 
                        The company offers products and services ranging from aircraft engines, 
                        power generation, water processing, and household appliances, among others.
                    </p>
                </div>
            </div>
            <div class="item">
                <img alt="Bootstrap template" src="http://placehold.it/1200x400/4f77cb/ffffff&text=Social">
                <div class="carousel-caption">
                    <div class="col-lg-12 text-center v-center" style="font-size: 39pt;">
                        <a href="#"><span class="avatar"><i class="fa fa-google-plus"></i></span></a>
                        <a href="#"><span class="avatar"><i class="fa fa-linkedin"></i></span></a>
                        <a href="#"><span class="avatar"><i class="fa fa-facebook"></i></span></a>
                        <a href="#"><span class="avatar"><i class="fa fa-github"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img alt="Bootstrap template" src="http://placehold.it/1200x400/d11e4f/ffffff&text=Portfolio">
                <div class="carousel-caption">
                    <h3>Portfolio</h3>
                    <p>
                        This is a list of some of the work done by the company over the past quarter. 
                    </p>
                </div>
            </div>
        </div>
        <ul class="nav nav-pills nav-justified">
            <li data-target="#carousel1" data-slide-to="0" class="active">
                <a href="#">About<small>Lorem ipsum dolor sit</small></a>
            </li>
            <li data-target="#carousel1" data-slide-to="1">
                <a href="#">Projects<small>Lorem ipsum dolor sit</small></a>
            </li>
            <li data-target="#carousel1" data-slide-to="2">
                <a href="#">Portfolio<small>Lorem ipsum dolor sit</small></a>
            </li>
        </ul>
    </div>
</div>

<link rel="stylesheet" type="text/css" href="/Content/font-awesome/css/font-awesome.min.css" />

<style>
body {
    padding-top: 20px;
}
#carousel1 .nav a small {
    display: block;
}
#carousel1 .nav {
    background: #eee;
}
.nav-justified > li > a {
    border-radius: 0px;
}
.nav-pills > li[data-slide-to="0"].active a {
    background-color: #b4d9a7;
}
.nav-pills > li[data-slide-to="1"].active a {
    background-color: #4f77cb;
}
.nav-pills > li[data-slide-to="2"].active a {
    background-color: #d11e4f;
}
</style>

<script type="text/javascript">
    jQuery(function ($) {
        $('#carousel1').carousel({
            interval: 2000
        });

        var clickEvent = false;

        $('#carousel1').on('click', '.nav a', function () {
            clickEvent = true;
            $('.nav li').removeClass('active');
            $(this).parent().addClass('active');
        }).on('slid.bs.carousel', function (e) {
            if (!clickEvent) {
                var count = $('.nav').children().length - 1;
                var current = $('.nav li.active');
                current.removeClass('active').next().addClass('active');
                var id = parseInt(current.data('slide-to'));
                if (count == id) {
                    $('.nav li').first().addClass('active');
                }
            }
            clickEvent = false;
        });
    });
</script>
</body>
</html> 