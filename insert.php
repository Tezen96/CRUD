<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insert</title>
</head>
<body>
    <h1>New Student</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>RollNo</td>
                <td><input type="text" name="srollno" required></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="sname" required></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="saddress" required></td>
            </tr>
            <tr>
                <td>Course</td>
                <td><input type="text" name="scourse" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>

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

        if(isset($_POST['submit'])) {
            $rollno = $_POST['srollno'];
            $name = $_POST['sname'];
            $address = $_POST['saddress'];
            $course = $_POST['scourse'];

            $query = "INSERT INTO STUDENT VALUES ('$rollno', '$name', '$address', '$course')";
            $result = mysqli_query($conn, $query);
            if($result) {
                //echo "Data inserted successfully";
                header('location:display.php');
            } else {
                die(mysqli_error($result));
            }
        }
        ?>
    </form>
</body>
</html>
