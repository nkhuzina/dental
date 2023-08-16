<?php
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "dental";

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $psw=$_POST['psw'];
    $email=$_POST['email'];

    $sql = "SELECT username, email, role FROM dental.users where email = '$email' and password = '$psw' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
         while($row = mysqli_fetch_assoc($result)) {
			 $name = $row["username"]; 
			 $email = $row["email"];
             if ($row["username"] == 'admin'){
                header('Location: http://localhost/dental/admin.php');
             } else {
                header('Location: http://localhost/dental/userProfile.php?username='.$name.'&email='.$email);
                //echo $row["username"]. " welcome to Dental Smile";
             }

         }
    } else {
        header('Location: http://localhost/dental/signin.php?error=Email or password is incorrect. Please try again');
      //echo "Email or password is incorrect. Please try again";
    }
    $conn->close();
?>