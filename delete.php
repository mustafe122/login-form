<?php
include "update.php";
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
  <div class="container">
  <br>
  
	<div class="col-lg-8 col-lg-offset-2 well">
	<h1 class="bg-info ">&nbsp;&nbsp;&nbsp;Pateint update Form</h1><br>
	<div class="row panel-group">
				<form  action = "delete.php" method="POST">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-12 form-group">
								<label>ID</label>
								<input type="number" placeholder="write the id" class="form-control" name = "id">
							</div>
                            <div>
                <div class="pull-left">
                        <button type="submit" class="btn btn-lg btn-danger" name = "delete">delete</button>	
                </div>
                </form>
                </div>

                </body>
                </html>