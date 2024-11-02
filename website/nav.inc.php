
<?php
# Zain Abbas, 11/02/2024, IT202-MC, Phase 3 Assignment: HTML Website Layout, zaa24@njit.edu
    if (isset($_SESSION['login'])) {    ?>
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="index.php?content=list_home_appliance_category">List Categories</a></li>
    <li><a href="index.php?content=new_home_appliance_category">Add New Category</a></li>
    <li><a href="index.php?content=list_home_appliance_product">List Products</a></li>
    <li><a href="index.php?content=new_home_appliance_product">Add New Product</a></li>
    <li><a href="index.php?content=logout">Logout</a></li>
</ul>    
Search for Product
<form action="index.php?content=find_home_appliance_products" method="POST">
    <input type="text" id="CATEGORY" name="CATEGORY" placeholder="Enter product ID" required>
    <button type="submit">Search Product</button>
</form>
<br>
Search for Category
<form action="index.php?content=find_home_appliance_categories" method="POST">
    <input type="text" id="CATEGORY" name="CATEGORY" placeholder="Enter category name" required>
    <td><input type="submit" value="Search Category"></td>
</form>
<?php
    }
?>
