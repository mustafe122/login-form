
<?php
include "cofig.php";

//Get data from the form 

function getData()
{
$data =array();
$data[0] =$_POST['id'];
$data[1] =$_POST['FirstName'];
$data[2] =$_POST['lastName'];
$data[3] =$_POST['town'];
$data[4] =$_POST['age'];
$data[5] =$_POST['dates'];
$data[6] =$_POST['address'];
$data[7] =$_POST['occ'];
$data[8] =$_POST['phone'];
$data[9] =$_POST['status'];
$data[10] =$_POST['gender'];
return $data;
} 

// UPDATE RECORDS ......



if(isset($_POST['update'])){
    $info = getData();
    $sql = "UPDATE miis SET firstName = '$info[1]',LastName = '$info[2]',
    town = '$info[3]',age = '$info[4]',dates = '$info[5]',address = '$info[6]',
    occ = '$info[7]',phone = '$info[8]',
    status= '$info[9]',gender= '$info[10]' WHERE id='$info[0]'" ;
   
 if ($conn->query($sql)===TRUE) {
     echo" Data updated successfully";
    }
else {
    echo" Data  are not update";
    header("location:upd.php");
}
}


// sql to delete a record
if(isset($_POST['delete'])){
    $info = getData();
    $sql = "DELETE FROM miis WHERE id='$info[0]'";
    
    if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " ;
    }
    
    }



?>



