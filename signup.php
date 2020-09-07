<?php

 ?>

<html>
<body>
<h2>Signup Page</h2>
 <form action="signup.php" method="post">
<label for="Vnaam">Voornaam(mandatory):</label>
<input type="text" id="Vnaam" name="Vnaam"><br>
<label for="Tvoeg">Tussenvoegsel(optional):</label>
<input type="text" id="Tvoeg" name="Tvoeg"><br>
<label for="Anaam">Achternaam(mandatory):</label>
<input type="text" id="Anaam" name="Anaam"><br>
<label for="E-mail">E-mail(mandatory):</label>
<input type="text" id="E-mail" name="E-mail"><br>
<label for="Gnaam">Gebruikersnaam(mandatory):</label>
<input type="text" id="Gnaam" name="Gnaam"><br>
<label for="psw">password:</label>
<input type="password" id="psw" name="psw"><br>
<label for="checkpsw">check password :</label>
<input type="password" id="checkpsw" name="checkpsw"><br>
<button type="button" name="signup"><br>
  <a href="index.php">Do you already have an account? Back to login page</a><br>
  <a href="lostpsw.php">Restore Password</a>
</form>

</body>
</html>
