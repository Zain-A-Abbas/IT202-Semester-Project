<?php
// error_log("\$_GET " . print_r($_GET, true));
// include("category.php");
if (isset($_SESSION['login'])) {
   $categoryID = $_POST['categoryID'];
   $category = HomeApplianceCategory::findCategory($categoryID);
   $result = $category->removeCategory();
   if ($result)
       echo "<h2>Category $categoryID removed</h2>\n";
   else
       echo "<h2>Sorry, problem removing category $categoryID</h2>\n";
} else {
   echo "<H2>Not logged in.</h2>\n";
}
?>
