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
  
  <link rel="stylesheet" href="materialize.min.css">

<style type="text/css">
html,
body {
    height: 100%;
}
html {
    display: table;
    margin: auto;
    
}
img{
  width:200px;

}
body {
    display: table-cell;
    vertical-align: middle;
}
.margin {
  margin: 0 !important;
}
</style>
  
</head>

<body class="green">


  <div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
      <form class="login-form">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="host.png" alt="" class="responsive-img valign profile-image-login">
            <!-- <p class="center login-form-text">W3lessons - Material Design Login Form</p> -->
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input class="validate" placeholder= "username" ype="text">
            <label for="username"  data-success="right" class="center-align"></label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input placeholder= "password" type="password">
            <!-- <label for="password"></label> -->
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <!-- <label for="remember-me">Remember me</label> -->
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <a href="index.php" class="btn waves-effect waves-light col s12">Login</a>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="register.html"></a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <!-- <p class="margin right-align medium-small"><a href="forgot-password.html"></a></p> -->
          </div>          
        </div>

      </form>
    </div>
  </div>


  <center>
    <!-- <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->
Post Page - Responsive
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-5104998679826243"
     data-ad-slot="3470684978"></ins>
<!-- <script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script> -->
<!-- </center> --> 



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library --> 
 <!-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
  <!-- materialize js -->
  <script src="materialize.min.js"></script>

   <!-- <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-27820211-3', 'auto');
  ga('send', 'pageview'); -->

<!-- //<script><script src="//load.sumome.com/" 
// data-sumo-site-id="1cf2c3d548b156a57050bff06ee37284c67d0884b086bebd8e957ca1c34e99a1" async="async"></script> 
 -->
 
   <footer class="page-footer">
          <div class="footer-copyright">
            <div class="container">
            <!-- © 2015 W3lessons.info -->
            <!-- <a class="grey-text text-lighten-4 right" href="http://w3lessons.info">Karthikeyan K</a> -->
            </div>
          </div>
  </footer>
</body>
<?php 
 include "config.php";
 if(isset($_POST['username'])&&isset($_POST['password'])){
   $username=$_POST['username'];
   $password=md5($_POST['password']);
   $stmt=$db->prepare("SELECT*FROM seem WHERE username=? AND password=?");
   $stmt->bindparam(1,$username);
   $stmt->bindparam(2, $password);
   $stmt->execute();
   $row=$stmt->fetch();
   $user= $row['username'];
   $pass= $row['password'];
   $id= $row['id'];
   $type= $row['type'];
   if($username==$user && $pass==$password){
     session_start();
     $_SESSION['username']=$user;
     $_SESSION['password']=$pass;
     $_SESSION['id']=$id;
     $_SESSION['type']=$type;
     ?>
     <script>window.location.href='index.php'</script>
     <?php
   }else{
     ?>
     <div class="alart-danger-dismissible"role="alart" >
     <button type="button"class="close"data-dismiss="alart"aria-lable="close">
     <span aria-hidden="true"&&times;></span></button>
     <strong>wrong please tray again</strong>
     </div>


     <?php
   }


 }
 ?>

</html>