<?php

session_start();

?>

<html>
<body>
<div id="wrapper">
 <form method="post" action="generate_code.php">

 <?php
echo "<h1>Testing</h1>";
echo $_SESSION["id"];
echo $_SESSION["Fname"];
echo $_SESSION["Mname"];
echo $_SESSION["Lname"];

echo "<br>";

echo "<a href='includes/logout.inc.php'>Log out</a>";
?>
  <input type="submit" name="generate_text" value="Show QR-code">
 </form>
</div>
</body>
</html>