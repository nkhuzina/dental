<?php
    require "C:\wamp64\www\dental\blocks\header.php"
?>
<section>
  <div class="login">
  <form action="register.php" method="post" class="registrationForm">
    <table align="center">
      <tr>
        <td>Name</td>
        <td><input type="text" name="name" id="name"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" name="psw" id="psw" autocomplete="off"></td>
      </tr>
      <tr>
        <td>E-mail</td>
        <td><input type="email" name="email" id="email"></td>
      </tr>
      <tr>
        <td>Phone</td>
        <td><input type="text" name="phone" id="phone"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"> <button id="registration">Register</button> </td>
      </tr>
    </table>
  </form>
  </div>
</section>

<?php
    require "C:\wamp64\www\dental\blocks\bottom.php"
?>