<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Display</title>
</head>
<body>
    <h1>Student Details</h1>
   <a href="insert.php"><button>Add+</button></a><br><br>
    <table border = "1" cellspacing='0'>
        <tr>
            <th>RollNo</th>
            <th>Name</th>
            <th>Address</th>
            <th>Course</th>
            <th>Action</th>
        </tr>
              <!-- php code  -->
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

         $query = "SELECT * FROM STUDENT";
         $result = mysqli_query($conn, $query);
         
         while($row = mysqli_fetch_assoc($result))
         {
                $rollno = $row['Rollno'];
                $name = $row['Name'];
                $address = $row['Address'];
                $course = $row['Course'];
                echo "<tr>
                        <td>$rollno</td>
                        <td>$name</td>
                        <td>$address</td>
                        <td>$course</td>
                        <td>
                        <a href='update.php?rn=$rollno'><button>Update</button></a>
                        <a href='delete.php?rn=$rollno'><button>Delete</button></a>
                    </td>
                    
                    </tr>";

         }
 



       ?>






        




 </table>
    
</body>
</html>