<?php
// Zain Abbas, 10/4/2024, IT202-MC, Phase 1 Assignment: Login and Logout, zaa24@njit.edu
if (isset($_SESSION['login'])) {
   unset($_SESSION['login']);
}
header("Location: index.php");
?>
