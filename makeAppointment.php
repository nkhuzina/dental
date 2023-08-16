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
	$email=$_POST['email'];
	$name=$_POST['name'];
    $firstVisit=$_POST['firstVisit'];
    $appDate=$_POST['appDate'];
    $time=$_POST['time'];
    $pref_name=$_POST['pref_name'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$service=$_POST['service'];
	$service_txt = "";
	foreach($service as $v){
		$service_txt = $service_txt.$v.",";
	}
	$message=$_POST['message'];


    $sql = "INSERT INTO dental.appontments(email, name, first_visit, app_date, app_time, pref_name, gender, dob, service, message)
            VALUES('$email', '$name', '$firstVisit', '$appDate', '$time', '$pref_name', '$gender', '$dob', '$service_txt', '$message')";

    if ($conn->query($sql) === TRUE) {
      header('Location: http://localhost/dental/index.php?success=true');
    } else {
      header('Location: http://localhost/dental/userProfile.php?sucsses=false&error='.$sql);
      //echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>