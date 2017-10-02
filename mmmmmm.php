<?php
include "config.php";
session_start();
if(!isset($_SESSION['username'])){
  header("location: login.php");
}

?>
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
  <DIV class ="container">
  <div class="row">
  <div class = "col-md-9">
  <nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      </a>
    </li>

    <li><a href="#">RECORDS</a></li>
    <li><a href="red.php">RECEPTION</a></li>
    <li><a href="#">SETTING</a></li>
    <li><a href="#">SERVICE</a></li>
    <li><a href="login.php" >LOGOUT</a></li>
    <li><a href="#">REPORTS</a></li>
   
    
  
    
      
  </ul>
</nav>
</div>
</div>
</div>
   <div class="container">
   
   <div class="row">
   <div class="col-md-3">
  
   <div >
   <a href="#" class="list-group-item "> article</a>
   <a href="#" class="list-group-item">catagories</a>
   <a href="#" class="list-group-item">media</a>
   <a href="#" class="list-group-item">setting</a>
   <a href="#" class="list-group-item">profile</a>
   
 </div>
</div>
  </body>
</html>