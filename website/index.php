<?php
// Zain Abbas, 10/4/2024, IT202-MC, Phase 1 Assignment: Login and Logout, zaa24@njit.edu
session_start();
?>
<!DOCTYPE HTML>

<head><title>Home Appliances Inventory</title></head>

<body>

<section id="container">
    <main>
        <?php

        if (isset($_REQUEST['content'])) {
            include($_REQUEST['content'] . ".inc.php");
        } else {
            include("main.inc.php");
        }

        ?>
    </main>
</section>

</body>

</html>