<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update</title>
</head>
<body>
<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "my_CRUD";
     $port = 3300;
     $conn = mysqli_connect($servername, $username, $password, $dbname, $port);
    
     // Check connection
     if (!$conn) {
         die(mysqli_error($conn));
     }
     $rollno = $_GET['rn'];
    $query = "SELECT * FROM STUDENT WHERE Rollno = '$rollno'";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
   

     ?>


    <h1>Edit Student</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>RollNo</td>
                <td><input type="text" name="srollno" value="<?php echo $data['Rollno']; ?>" required></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="sname" value="<?php echo $data['Name']; ?>" required></td>

            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="saddress" value="<?php echo $data['Address']; ?>" required></td>
            </tr>
            <tr>
                <td>Course</td>
                <td><input type="text" name="scourse" value="<?php echo $data['Course']; ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Update"></td>
            </tr>
        </table>
        <?php
        if(isset($_POST['submit']))
        {
            $rollno = $_POST['srollno'];
            $name = $_POST['sname'];
            $address = $_POST['saddress'];
            $course = $_POST['scourse'];

            $query = "UPDATE STUDENT SET Name = '$name', Address ='$address', Course = '$course' WHERE Rollno = $rollno";
            $result = mysqli_query($conn, $query);
            if($result)
            {
                header("Location:display.php");
            }
            else
            {
                echo "Record not updated";
            }
        }
        



       ?>   
    </form>
</body>
</html>
