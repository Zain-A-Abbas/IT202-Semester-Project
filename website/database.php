<?php
// Zain Abbas, 10/4/2024, IT202-MC, Phase 1 Assignment: Login and Logout, zaa24@njit.edu
function getDB() {
    $host = "sql1.njit.edu";
    $port = 3306;
    $dbName = "zaa24";
    $username = "zaa24";
    $password = "MYSQLpassword2!";

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    try {
        $db = new mysqli($host, $username, $password, $dbName, $port);
        error_log("Connected to $host database.");
        return $db;
    } catch (mysqli_sql_exception $e) {
        error_log($e->getMessage(), 0);
    }
}
//getDB();

?>