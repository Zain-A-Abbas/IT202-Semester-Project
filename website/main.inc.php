<?php
// Zain Abbas, 10/4/2024, IT202-MC, Phase 1 Assignment: Login and Logout, zaa24@njit.edu
if (!isset($_SESSION['login'])) {
?>
  <h2>Please log in to the Home Appliances Site</h2><br>
  <form name="login" action="index.php" method="post">
    <label>Email:</label>
    <input type="text" name="emailAddress" size="20">
    <br>
    <br>
    <label>Password:</label>
    <input type="password" name="password" size="20">
    <br>
    <br>
    <input type="submit" value="Login">
    <input type="hidden" name="content" value="validate">
  </form>
<?php
} else {
   echo "<h2>Welcome to Inventory Helper, {$_SESSION['firstName']} {$_SESSION['lastName']}</h2>";
?>
   <p>This program tracks category and item inventory</p>
   <p>Please use the links in the navigation window</p>
   <p>Please DO NOT use the browser navigation buttons!</p>
   <a href="index.php?content=logout"><strong>Logout</strong></a>
<?php
}
?>
