<?php

require_once '../core/connect.php';

if (isset($_POST['search_term']) == true && empty($_POST['search_term']) == false) {
    $search_term = mysql_real_escape_string($_POST['search_term']);

    $query = mysql_query("SELECT `city` FROM `cities` WHERE `city` LIKE '$search_term%'") or die(mysql_error());
    while (($row = mysql_fetch_assoc($query) or die(mysql_error())) != false) {
        echo '<li>' . $row['city'] . '</li>';
    } 
   
}
?>