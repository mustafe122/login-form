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
<i class="glyphicon glyphicon-align-center"></i><i class="icon-unlock"></i><div class="container">
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
              <strong>Login</strong>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">
                        Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">
                        Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <div class="checkbox">
                            <label>
                                <!-- <input type="checkbox">
                                Remember me -->
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group last">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-success btn-sm">
                            login</button>
                             <button type="reset" class="btn btn-default btn-sm">
                            Reset</button>
                    </div>
                </div>
                </form>
            </div>
            <div class="panel-footer">
                <!-- Not Registered? <a href="#">Register here</a></div> -->
        </div>
    </div>
</div>
</div>
  </body>
</html>