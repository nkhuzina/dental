<?php
    require "C:\wamp64\www\dental\blocks\header.php"
?>
<?php
    if (!empty($_GET['success']) && $_GET['success']=='true'){
		echo '<h2>
			Your order has been accepted. Our team will contact you within 24 houres. </br>
		</h2></br></br>';		
	}
?>
        <main>
            <h1>Services we offer</h1>
            <div class="column1 outline">
                <img src="images/dental_exam.png" alt="Dental Exam"/>
                <div class="service">Dental Exam</div>
            </div>

            <div class="column2 outline">
                <img src="images/procedures.png" alt="Procedures"/>
                <div class="service">Procedures</div>
            </div>

            <div class="column3 outline">
                <img src="images/emergency.png" alt="Emergency"/>
                <div class="service">Emergency</div>
            </div>
        </main>
</body>
</html>