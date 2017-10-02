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
				<form  action = "update.php" method="POST">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-12 form-group">
								<label>ID</label>
								<input type="number" placeholder="write the id" class="form-control" name = "id">
							</div>
							<div class="col-sm-4 form-group">
			<label>FirstName</label>
       	<input type="text" placeholder="Enter First Name Here.." class="form-control"name = "FirstName">
							</div>
              <div class="col-sm-4 form-group">
								<label>Middle Name</label>
								<input type="text" placeholder="Enter Last Name Here.." class="form-control"name = "middleName">
							</div>
              <div class="col-sm-4 form-group">
								<label>Last Name</label>
								<input type="text" placeholder="Enter Last Name Here.." class="form-control"name = "lastName">
							</div>
							<div class="col-sm-4 form-group">
                <label>Town</label>
  <select class="form-control"  placeholder="select the city Name Here.." name = "town">
  <option>muqdisho</option>
  <option>hargaisa</option>
  <option>bosaso</option>
  <option>galkacyo</option>
  <option>burco</option>
  <option>kismayo</option>
  <option>baydhaba</option>
  <option>afgooye</option>
  <option>dhusamareb</option>
  <option>qardho</option>
  <option>badhan</option>
  <option>ceerigaabo</option>
  </select>
                </div>	
							<div class="col-sm-4 form-group">
								<label>age</label>
								<input type="number" placeholder="Enter age Here" class="form-control"name = "age">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Date</label>
								<input type="date" placeholder="Enter the Code Here.." class="form-control"name = "dates">
							</div>		
				
							<div class="col-sm-4 form-group">
								<label>Address</label>
								<input type="text" placeholder="Enter the Address Here.." class="form-control"name = "address">
							</div>		
							<div class="col-sm-4 form-group">
								<label>Occupation</label>
								<input type="text" placeholder="Enter the profession Here.." class="form-control"name = "occ">
							</div>	
                        <div class="col-sm-4 form-group">
                            <label>Phone Number</label>
                            <input type="number" placeholder="Enter Phone Number Here.." class="form-control"name = "phone">
                        </div>
              
							
                        <div class="form-group">
						        <label>Martial Status: </label>
						        &nbsp;&nbsp;<input type="radio" value="child" name = "status" cheched="1">Child
                    &nbsp;&nbsp;<input type="radio" value="single" name = "status">Single
                    &nbsp;&nbsp;<input type="radio" value="marriage" name = "status">Marriage
                        </div>
                        
                        <div class="form-group">
                          <label>Gender:</label>
                           &nbsp;&nbsp;<input type="radio" value="male" name = "gender">Male
                           &nbsp;&nbsp;<input type="radio" value="female" name = "gender">Female
                        <!--confirm buttun-->
                        </div>				
                      	
                        <div>
                        <div class="pull-right">
                        <button type="submit" class="btn btn-lg btn-info" name = "update">update</button>	
                </div>
                <div>
                <div>
                <div class="pull-left">
                        <button type="submit" class="btn btn-lg btn-danger" name = "delete">delete</button>	
                </div>
                <div>
                <div class="pull-left">
                <div class="text-center"> <a href="index.php" class="btn btn-lg btn-success">Cancel</a> </div>
                </div>					
                        </div>
                        <form>
	
    
  </body>
</html>