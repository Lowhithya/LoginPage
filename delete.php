<?php
//connect db
$conn=mysqli_connect("Server_name", "user_name", "password", "DataBase_Name");
if(!$conn){
    die("connection failed!:" .mysqli_connect_error());
}
$ID=$_POST['ID'];
$sql="DELETE FROM stu_details WHERE SID='$ID'";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
  $conn->close();
?>
