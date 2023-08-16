<?php
    require "C:\wamp64\www\dental\blocks\header.php"
?>
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

    $sql = "SELECT u.username, u.email, u.phone, case when a.first_visit = 0 then 'Yes' else 'No' End first_visit, a.app_date, a.app_time, a.pref_name, a.gender, a.dob, a.service, a.message FROM appontments a, users u where a.email=u.email ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='applist'>
		      <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>First Visit</th>
                <th>Appointment Date</th>
                <th>Appointment Time</th>
                <th>Preferred Name</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Services</th>
				<th>Message</th>				
                </tr>";
        while($row = mysqli_fetch_assoc($result)) {
              echo "<tr><td>".$row["username"]."</td>
                        <td>".$row["email"]."</td>
                        <td>".$row["phone"]."</td>
						<td>".$row["first_visit"]."</td>
						<td>".$row["app_date"]."</td>
						<td>".$row["app_time"]."</td>
						<td>".$row["pref_name"]."</td>
						<td>".$row["gender"]."</td>
						<td>".$row["dob"]."</td>
						<td>".$row["service"]."</td>
						<td>".$row["message"]."</td>
                    </tr>";
        }
        echo "</table></body>";
    } else {
        echo "0 results";
    }
    $conn->close();
?>
<?php
    require "C:\wamp64\www\dental\blocks\bottom.php"
?>