<style>
   form[name="category"] {
       display: grid;
       grid-template-columns: 125px 1fr;
       gap: 10px 5px;
       align-items: left;
       max-width: 300px;
       margin: 0px;
   }
   form[name="category"] label {
       text-align: left;
       padding-right: 5px;
   }
   form[name="category"] input[type="text"] {
       width: 100%;
   }
   form[name="category"] input[type="submit"] {
       grid-column: 2;
       justify-self: start;
   }
</style>


<?php

// include("category.php");
if (isset($_SESSION['login'])) {
   $categoryID = $_POST['categoryID'];
   $answer = $_POST['answer'];
   if ($answer == "Update Category") {
       $category = HomeApplianceCategory::findCategory($categoryID);
       $category->HomeApplianceCategoryID = $_POST['categoryID'];
       $category->HomeApplianceCategoryCode = $_POST['categoryCode'];
       $category->HomeApplianceCategoryName = $_POST['categoryName'];
       $result = $category->updateCategory();
       if ($result) {
           echo "<h2>Category $categoryID updated</h2>\n";
       } else {
           echo "<h2>Problem updating category $categoryID</h2>\n";
       }
   } else {
       echo "<h2>Update Canceled for category $categoryID</h2>\n";
   }
} else {
   echo "<h2>Please login first</h2>\n";
}
?>
