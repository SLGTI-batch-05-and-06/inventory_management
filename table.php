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
    echo "Table insert successfully";
}
else
{
    echo "Error".mysqli_error($con);
}

?>