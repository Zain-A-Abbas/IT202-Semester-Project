<script language="javascript">
   function listbox_dblclick() {
       document.categories.displaycategory.click()
   }
   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this category?");
       }
       if (userConfirmed) {
           if (target == 0) categories.action = "index.php?content=display_home_appliance_category";
           if (target == 1) categories.action = "index.php?content=remove_home_appliance_category";
           if (target == 2) categories.action = "index.php?content=update_home_appliance_category";
       } else {
           alert("Action canceled.");
       }
   }
</script>


<h2>Select Category</h2>
<form name="categories" method="post">
<select ondblclick="listbox_dblclick()" name="categoryID" size="20">
    <?php
        $categories = HomeApplianceCategory::getCategories();
        foreach ($categories as $category) {
            $categoryID = $category->HomeApplianceCategoryID;
            $name = $categoryID . " - " . $category->HomeApplianceCategoryCode . ", " . $category->HomeApplianceCategoryName ;
            echo "<option value=\"$categoryID\">$name</option>\n";
        }
    ?>
</select>
<br>
<input type="submit" onClick="button_click(0)" name="display_home_appliance_category" value="View Category">
<input type="submit" onClick="button_click(1)" name="remove_home_appliance_category" value="Delete Category">
<input type="submit" onClick="button_click(2)" name="update_home_appliance_category" value="Update Category">

</form>