
<!-- Zain Abbas, 11/02/2024, IT202-MC, Phase 3 Assignment: HTML Website Layout, zaa24@njit.edu -->
<form action="index.php?content=add_home_appliance_categories" method="POST">
    <table>
        <tr>
            <td><label for="ID">Category ID:</label></td>
            <td><input type="number" id="ID" name="ID" min="1" required minlength="1" maxlength="10"></td>
        </tr>
        <tr>
            <td><label for="CODE">Category Code:</label></td>
            <td><input type="text" id="CODE" name="CODE" required minlength="3" maxlength="10"></td>
        </tr>
        <tr>
            <td><label for="NAME">Category Name:</label></td>
            <td><input type="text" id="NAME" name="NAME" required minlength="5" maxlength="100"></td>
        </tr>
        <tr>
            <td><label for="AISLE">Category Aisle:</label></td>
            <td><input type="number" id="AISLE" name="AISLE" min="1" required minlength="3" maxlength="10"></td>
        </tr>

        <tr>
            <td><input type="submit" value="Insert Category"></td>
        </tr>
    </table>
</form>