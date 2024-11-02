<form action="index.php?content=add_home_appliance_products" method="POST">
    <table>
        <tr>
            <td><label for="ID">Product ID:</label></td>
            <td><input type="number" id="ID" name="ID" min="1" required></td>
        </tr>
        <tr>
            <td><label for="CODE">Product Code:</label></td>
            <td><input type="text" id="CODE" name="CODE" required></td>
        </tr>
        <tr>
            <td><label for="NAME">Product Name:</label></td>
            <td><input type="text" id="NAME" name="NAME" required></td>
        </tr>
        <tr>
            <td><label for="DESC">Product Description:</label></td>
            <td><input type="text" id="DESC" name="DESC" required></td>
        </tr>
        <tr>
            <td><label for="COLOR">Product Color:</label></td>
            <td><input type="text" id="COLOR" name="COLOR" required></td>
        </tr>
        <tr>
            <td><label for="CATID">Category ID:</label></td>
            <td><input type="number" id="CATID" name="CATID" min="1" required></td>
        </tr>
        <tr>
            <td><label for="WHOLEPRICE">Product Wholesale Price:</label></td>
            <td><input type="number" id="WHOLEPRICE" name="WHOLEPRICE" step="0.01" required></td>
        </tr>
        <tr>
            <td><label for="LISTPRICE">Product List Price:</label></td>
            <td><input type="number" id="LISTPRICE" name="LISTPRICE" step="0.01" required></td>
        </tr>

        <tr>
            <td><input type="submit" value="Insert Product"></td>
        </tr>
    </table>
</form>