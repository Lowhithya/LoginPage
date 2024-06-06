<?php
$conn=mysqli_connect("localhost:3306", "root", "Low@@2004", "sits_stud");//connect db
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
