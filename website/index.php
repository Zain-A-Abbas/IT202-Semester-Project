<?php
// Zain Abbas, 10/4/2024, IT202-MC, Phase 1 Assignment: Login and Logout, zaa24@njit.edu
session_start();
include("home_appliance_category.php");
include("home_appliance_product.php");
?>
<!DOCTYPE HTML>

<head>
    <title>Home Appliances Inventory</title>

    <script language="javascript" type="text/javascript">
   function getRealTime() {
       // retrieve the DOM objects to place the content
       var domcategories = document.getElementById("categorycount");
       var domitems = document.getElementById("itemcount");
       var domlistpricetotal = document.getElementById("listpricetotal");
       //send the GET request to retrieve the data
       var request = new XMLHttpRequest();
       request.open("GET", "realtime.php", true);
       request.onreadystatechange = function() {
           if (request.readyState == 4 && request.status == 200) {
               //parse the XML document to get each data element
               var xmldoc = request.responseXML;
               var xmlcategories = xmldoc.getElementsByTagName("categories")[0];
               var categories = xmlcategories.childNodes[0].nodeValue;
               var xmlitems = xmldoc.getElementsByTagName("items")[0];
               var items = xmlitems.childNodes[0].nodeValue;
               var xmllistpricetotal = xmldoc.getElementsByTagName("listpricetotal")[0];
               var listpricetotal = xmllistpricetotal.childNodes[0].nodeValue;
               domcategories.innerHTML = categories;
               domitems.innerHTML = items;
               domlistpricetotal.innerHTML = listpricetotal;
           }
       };
       request.send();
   }
</script>


</head>

<body>

<?php
include("header.inc.php");
?>
<section style="height: 425px;">
<nav style="float: left; height: 100%;">
    <?php include("nav.inc.php"); ?>
</nav>
    <main>
        <?php
            if (isset($_REQUEST['content'])) {
                include($_REQUEST['content'] . ".inc.php");
            } else {
                include("main.inc.php");
            }
        ?>
    </main>
    <aside>
           <?php include("aside.inc.php"); ?>
           <script language="javascript" type="text/javascript" >
               getRealTime();
               setInterval(getRealTime, 5000);
           </script>
       </aside>
</section>

<footer>
    <?php include("footer.inc.php"); ?>
</footer>

</body>

</html>