<?php
 $servername = "your server_name";
 $username = "your user_name";
 $password = "SQl_password";
 $db="DtaBase_name";
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $ID=$_POST["ID"];
  }
$conn = mysqli_connect($servername, $username, $password, $db);// Create connection
$sql = "SELECT * FROM stu_details WHERE SID='$ID'"; // replace "table_name" with your actual table name
$result = mysqli_query($conn, $sql);


?>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST")// extra
 {
    $ID=$_POST["ID"];
    if(mysqli_num_rows($result)>0)
    {while($row=mysqli_fetch_assoc($result))
        {
         
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SITS|STU|DETAILS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="./assets/Sits Logo.png"/>
</head>
<body>
    <div class="Heading">
        <a href="./index.html"><img id="Logo" src="./assets/Sits Logo.png" alt="SITS LOGO" style="float: left;" /></a>
        <h1>Siddhartha Institute of Technology and Sciences</h1>
        <h3>Narapally,Koremulla Road,Ghatkesar Mandal,Medchal District-501301</h3>
        <hr>
    </div>
    <div class="form2" style="display:flex; justify-content:center; ">
        <form>
           <fieldset style="border-radius:5px;">
            <legend>Details</legend>
            <table>
                <tr>
                    <th>Name:</th>
                    <td><?php echo $row['Sname']; ?></td>
                </tr>
                <tr>
                    <th>ID:</th>
                    <td><?php echo $row['SID']; ?></td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><?php echo $row['Semail']; ?></td>
                </tr>    
                <tr>
                    <th>Mobile:</th>
                    <td><?php echo $row['Smobile']; ?></td>
                </tr>
                <tr>
                    <th>Course&Year:</th>
                    <td>CSE-3 <sup>rd</sup>year</td>
                </tr>
                <tr>
                    <th>Fees:</th>
                    <td>Cleared</td>
                </tr>
                <tr>
                    <th>Notes:</th>
                    <td><textarea name="Fees" id="1" cols="30" rows="10" style="height:22px;width:185px;background-color:rgb(176, 217, 233);" placeholder="Enter your remarks"></textarea></td>
                </tr>
            </table>
           </fieldset>
        </form>
    </div>
</body>
</html>
<?php
     }
    }
else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SITS|STU|DETAILS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="./assets/Sits Logo.png"/>
</head>
<body>
    <div class="Heading">
        <a href="./index.html"><img id="Logo" src="./assets/Sits Logo.png" alt="SITS LOGO" style="float: left;" /></a>
        <h1>Siddhartha Institute of Technology and Sciences</h1>
        <h3>Narapally,Koremulla Road,Ghatkesar Mandal,Medchal District-501301</h3>
        <hr>
    </div>
    <h1 style="text-align:center;">Enter Correct Details!</h1>
<?php
}    
}
 
 ?>   
 
