<?php
// Connect to database
$conn = mysqli_connect("localhost:3306", "root", "Low@@2004", "sits_stud");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$ID = $_POST['ID'];
$name = $_POST['Name'];  // Use consistent variable name
$email = $_POST['email'];
$mobile=$_POST['Mobile'];

// Prepare SQL query with placeholders
$sql = "INSERT INTO stu_details (SID, Sname, Semail,Smobile) VALUES (?, ?, ?,?)";
$stmt = mysqli_prepare($conn, $sql);

// Bind parameters correctly
mysqli_stmt_bind_param($stmt, "sssi", $ID, $name, $email,$mobile);

// Execute query
if (mysqli_stmt_execute($stmt)) {
    echo "Data inserted successfully!";
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}

// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>


 