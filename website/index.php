<?php
// Zain Abbas, 10/4/2024, IT202-MC, Phase 1 Assignment: Login and Logout, zaa24@njit.edu
session_start();
?>
<!DOCTYPE HTML>

<head><title>Home Appliances Inventory</title></head>

<body>

<?php
include("header.inc.php");
include("nav.inc.php");
?>

<section id="container">
    <main>
        <?php

        if (isset($_REQUEST['content'])) {
            ?><br><?php
            include($_REQUEST['content'] . ".inc.php");
            ?><br><?php
        } else {
            include("main.inc.php");
        }

        ?>
    </main>
</section>

<?php
include("footer.inc.php");
?>

</body>

</html>