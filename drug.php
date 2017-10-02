<?php 
include "cofig.php";
$data =array();
function getData(){ 
$data[1] =$_POST['doctorname'];
$data[2] =$_POST['pateintName'];
$data[3] =$_POST['patientID'];
$data[4] =$_POST['dates'];
$data[5] =$_POST['drugname'];
$data[6] =$_POST['Quality'];
$data[7] =$_POST['frequent'];
$data[8] =$_POST['timed'];
$data[9] =$_POST['route'];
return $data;
} 
//insert data for registration form...
if (isset($_POST['save'])) {
    $info = getData();
  $sql ="INSERT INTO drugs(doctorname,patientName,patientID,dates,drugname,Quality,frequent,timed,route)
   VALUES('$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]','$info[8]','$info[9]')";
if ($conn->query($sql)===TRUE) {
    echo" Data inserted successfully";}
}
?>


