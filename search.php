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

<br> <h3>hms search Page .</h3>
<div class="container">  
<form method = "POST" class = "form-inline" >
  <label>seaching..</label>
   <div class="form-group   col-md-6" >
      <input type="text" placeholder="search the patient info .." class="form-control"
      name = "search" size="50">
     &nbsp; &nbsp; <button type="submit" class="btn btn-sm btn-success" name = "searchbtn">search
    </button >  <br> 
    </div>             
 </form>
</div>
</div>

<br> <h3>hms search Page .</h3>
 <div class="container"> 
    <table class="table table-bordered" >
            <br>   <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>lastName</th>
                <th>town</th>
                <th>age</th>
                <th>date</th>
                <th>address</th>
                <th>occ</th>
                <th>status</th>
                <th>gender</th>
                <th>Delete</th>
                <th>Edit</th>
                </tr>

 <!--firstName ,lastName, town, age, date, address, occ, phone status,gender..          -->

            <?php
            include "cofig.php";
             $idno="";
             if (isset($_POST['searchbtn'])){
                $idno= $_POST['search'];
                $sql = "SELECT *from miis WHERE id='$idno'";
                $result = $conn->query($sql);
                //if ($result->num_rows > 0){
                while ($rows = $result->fetch_assoc()){
                 echo "<tr><td>".$rows['id']."</td>
                  <td>".$rows['firstName']."</td>
                   <td>".$rows['lastName']."</td>
                   <td>".$rows['town']."</td>
                    <td>".$rows['age']."</td>
                    <td>".$rows['dates']."</td>
                    <td>".$rows['address']."</td>
                    <td>".$rows['occ']."</td>
                    <td>".$rows['status']."</td>
                    <td>".$rows['gender']."</td><tr>";
                                      
                    }      
                   // }
                    }
            ?>
     </table>
      </body>
</html>