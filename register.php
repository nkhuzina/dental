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

    $uname=$_POST['name'];
    $psw=$_POST['psw'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $sql = "INSERT INTO dental.users(username, password, email, phone, role)
            VALUES('$uname', '$psw', '$email', '$phone', 'user')";

    if ($conn->query($sql) === TRUE) {
       header('Location: http://localhost/dental/userProfile.php?username='.$uname.'&email='.$email);
    } else {
       header('Location: http://localhost/dental/signin.php');
      //echo "Error: " . $sql . "<br>" . $conn->error;
    }



//     if ($conn->query($sql) === TRUE) {
//       echo "You are registered";
//     } else {
//       echo "Error: " . $sql . "<br>" . $conn->error;
//     }



    $conn->close();
?>