<!--Zain Abbas, 12/06/2024, IT202-MC, Phase 5 Assignment: Javascript, zaa24@njit.edu-->
<form action="index.php?content=change_home_appliance_product" method="POST">
    <table>
    <tr>
            <td><label for="ID">Product ID:</label></td>
            <td><input type="number" id="ID" name="ID" min="1" required minlength="1" maxlength="10"></td>
        </tr>
        <tr>
            <td><label for="CODE">Product Code:</label></td>
            <td><input type="text" id="CODE" name="CODE" required minlength="3" maxlength="10"></td>
        </tr>
        <tr>
            <td><label for="NAME">Product Name:</label></td>
            <td><input type="text" id="NAME" name="NAME" required minlength="5" maxlength="100"></td>
        </tr>
        <tr>
            <td><label for="DESC">Product Description:</label></td>
            <td><input type="text" id="DESC" name="DESC" required minlength="5" maxlength="255"></td>
        </tr>
        <tr>
            <td><label for="COLOR">Product Color:</label></td>
            <td><input type="text" id="COLOR" name="COLOR" required minlength="0" maxlength="16"></td>
        </tr>
        <tr>
            <td><label for="CATID">Category ID:</label></td>
            <td><input type="number" id="CATID" name="CATID" min="1" required minlength="1" maxlength="10"></td>
        </tr>
        <tr>
            <td><label for="WHOLEPRICE">Product Wholesale Price:</label></td>
            <td><input type="number" inputmode="decimal" id="WHOLEPRICE" name="WHOLEPRICE" step="0.01" required min="1.0" max="4000.0"></td>
        </tr>
        <tr>
            <td><label for="LISTPRICE">Product List Price:</label></td>
            <td><input type="number" inputmode="decimal" id="LISTPRICE" name="LISTPRICE" step="0.01" required min="1.0" max="4000.0"></td>
        </tr>

        <tr>
            <td><input type="submit" value="Insert Product"></td>
        </tr>
    </table>
</form>