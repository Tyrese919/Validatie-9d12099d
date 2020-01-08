<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>

    <form method="post">

      <input type="email" placeholder="Voer je E-mailaderes in" size="17" name="email">
      <input type="submit" value="Verstuur">

    </form>

  </body>

  <?php

  if (isset ($_POST["email"])) {
    if ((filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))){
    echo"Dit is een geldige Email";}
  }
  else {
    echo"Dit is geen geldige Email";
  }

  ?>

</html>
