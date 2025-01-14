<?php
// Zain Abbas, 10/4/2024, IT202-MC, Phase 1 Assignment: Login and Logout, zaa24@njit.edu
require_once('database.php');
$emailAddress = $_POST['emailAddress'];
$password = $_POST['password'];
if (filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
   $query = "SELECT firstName, lastName, pronouns, emailAddress FROM HomeAppliancesManagers " .
         "WHERE emailAddress = ? AND password = SHA2(?,256)";
   $db = getDB();
   $stmt = $db->prepare($query);
   $stmt->bind_param("ss", $emailAddress, $password);
   $stmt->execute();
   $stmt->bind_result($firstName, $lastName, $pronoun, $emailAddress);
   $fetched = $stmt->fetch();
   $name = "$firstName $lastName";
   if ($fetched && isset($name)) {
      echo "<h2>Welcome to Home Appliances Inventory Helper, $name, ($pronoun)</h2>\n";
      $_SESSION['login'] = true;
      $_SESSION['emailAddress'] = $emailAddress;
      $_SESSION['firstName'] = $firstName;
      $_SESSION['lastName'] = $lastName;
      $_SESSION['Pronoun'] = $pronoun;
      header("Location: index.php");
   } else {
      echo "<h2>Sorry, login incorrect</h2>\n";
      echo "<a href=\"index.php\">Please try again</a>\n";
   }
} else {
   echo "<h2>Please enter a valid email address</h2>\n";
   echo "<a href=\"index.php\">Please try again</a>\n";
}

?>
