<?php 

include "cofig.php";


$data =array();
function getData()
{ 

$data[1] =$_POST['doctors'];
$data[2] =$_POST['title'];
$data[3] =$_POST['fullname'];
$data[4] =$_POST['age'];
$data[5] =$_POST['gender'];
$data[6] =$_POST['pateint'];


return $data;
} 
//insert data for registration form...
// if (isset($_POST['reg'])) {
    $info = getData();
  $sql = "INSERT INTO assign (doctors,title,fullname,age,gender,pateint) 
    VALUES ('$info[1]', '$info[2]', '$info[3]','$info[4]','$info[5]','$info[6]')";
 if ( $conn->query($sql)===TRUE) {
     echo" Data inserted successfully";
    }
else {
    echo" Data  are not inserted";
    }
//}
?>


