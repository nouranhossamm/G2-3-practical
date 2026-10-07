<?php

    require_once "connect.php";
    
    $sql = 'DELETE FROM products WHERE quantity = 0';
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo mysqli_affected_rows($conn) . 'Affected Rows' ;
    }

?>