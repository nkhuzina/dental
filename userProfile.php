<?php
	
    require "C:\wamp64\www\dental\blocks\header.php"
?>
        <div class="appointment">
            <form action="makeAppointment.php" method="post" class="appointmentForm">
				<h3><?php echo 'Hello ' . htmlspecialchars($_GET["username"]) . '!'; ?></h3>
			    <input type="hidden" name="email" value="<?php echo htmlentities($_GET["email"]); ?>" />
				<input type="hidden" name="name" value="<?php echo htmlentities($_GET["username"]); ?>" />
                <table>
                    <tr>
                        <td class="name">Is it your first visit?</td>
                        <td><label>Yes</label><input type="radio" name="firstVisit" id="yes">
                            <label>No</label><input type="radio" name="firstVisit" id="no">
                        </td>
                    </tr>
                    <tr>
                        <td class="name">Appointment Preferred Date</td>
                        <td><input type="date" name="appDate" id="appDate"></td>
                    </tr> 
                    <tr>
                        <td class="name">Appointment Preferred Time</td>
                        <td><select name="time" id="time"> 
								<option value='11:00'>11:00</option>
								<option value='12:00'>12:00</option>
								<option value='13:00'>13:00</option>
								<option value='14:00'>14:00</option>
								<option value='15:00'>15:00</option>
								<option value='15:00'>16:00</option>
							</select>	
						</td>
                    </tr> 
                    <tr>
                        <td class="name">Prefer to be called</td>
                        <td><input type="input" name="pref_name" id="pref_name"></td>
                    </tr> 					
					<tr>
                        <td class="name">Gender</td>
                        <td><select name="gender" id="gender"> 
								<option value='f'>Femail</option>
								<option value='m'>Male</option>
							</select>	
						</td>
                    </tr> 
					<tr>
                        <td class="name">Birthday</td>
                        <td><input type="date" name="dob" id="dob"></td>
                    </tr> 
                    <tr>
                        <td class="name" >What services do you want to receive?</td>
                        <td><input value="checkup" type="checkbox" name="service[]"><label>Regular checkup </label> </br>
                            <input value="xray" type="checkbox" name="service[]"><label>X-Ray</label></br>
                            <input value="cleaning" type="checkbox" name="service[]"><label>Teeth cleaning</label></br>
                            <input value="extract" type="checkbox" name="service[]"><label>Dental extraction</label></br>
							<input value="root" type="checkbox" name="service[]"><label>Root canal</label></br>
							<input value="whitening" type="checkbox" name="service[]"><label>Teeth whitening</label></br>
                        </td>
                    </tr>
                    <tr>
                        <td class="name">Any additional information</td>
                        <td><input type="text" row name="message" id="message"></td>
                    </tr>
                </table>
				<div class="buttn"><button id="makeAppointment">Make Appointment</button></div>
            </form>
       </div>
		
<?php
    require "C:\wamp64\www\dental\blocks\bottom.php"
?>		