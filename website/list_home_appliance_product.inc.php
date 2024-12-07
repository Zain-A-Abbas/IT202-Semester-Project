<!--Zain Abbas, 12/06/2024, IT202-MC, Phase 5 Assignment: Javascript, zaa24@njit.edu-->
<h2>Select Item</h2>
<form name="products" method="post">
<select name="productID" size="20">
    <?php
        $products = HomeApplianceProduct::getProducts();
        foreach ($products as $product) {
            $productID = $product->HomeApplianceProductID;
            $productName = $product->HomeApplianceProductName;
            $option = $productID . " - " . $productName;
            echo "<option value=\"$productID\">$option</option>\n";
        }
    ?>
</select>
</form>
