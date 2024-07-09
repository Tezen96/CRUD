<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "my_CRUD";
 $port = 3306;
 $conn = mysqli_connect($servername, $username, $password, $dbname, $port);

 // Check connection
 if (!$conn) {
     die(mysqli_error($conn));
 }

 $query = "DELETE FROM STUDENT WHERE rollno = '$_GET[rn]'";
 $result = mysqli_query($conn, $query);
if($result)
{
    //echo "Record deleted successfully";
    header("Location:display.php");
}
else
{
    echo "Record not deleted";
}

?>
