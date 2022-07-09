<?php include_once('config.php');

$sql="CREATE TABLE inventory
(ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Inventory_ID VARCHAR (30) UNIQUE,
Name VARCHAR (50),
Description VARCHAR (100),
Quantity INT (6),
Date date)
";

if(mysqli_query($con,$sql))
{
    echo "Inventory Table inserted successfully";
}
else
{
    echo "Error".mysqli_error($con);
}

$sql="CREATE TABLE department
(ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Department_Code VARCHAR (30) UNIQUE,
Department_Name VARCHAR (100),
Image VARCHAR (50),
Head_Of_Department VARCHAR (50))";

if (mysqli_query($con,$sql))
{
    echo " Department Table inserted successfully";
}
else
{
    echo "Error".mysqli_error($con);
}


?>