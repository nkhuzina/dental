<?php
    require "C:\wamp64\www\dental\blocks\header.php"
?>

<section>
    <div class="login">
    <form action="login.php" method="post" class="loginForm">
        <table align="center">
            <tr><td colspan = "2" color="red"><?php if (!empty($_GET['error'])) echo htmlentities($_GET['error']) ?></br></br> </td></tr>
			<tr>
                <td>E-mail</td>
                <td><input type="email" name="email" id="uemail"></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type="password" name="psw" id="upsw" autocomplete="off"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"> <button id="login">Sign-in</button> </td>
            </tr>
        </table>
    </form>
	</div>
</section>
<?php
    require "C:\wamp64\www\dental\blocks\bottom.php"
?>