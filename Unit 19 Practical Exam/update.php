<?php
    
    require_once "connect.php";

    $sql = 'UPDATE products SET quantity = quantity + 10 WHERE name="laptop"';
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo mysqli_affected_rows($conn) . 'Affected Rows';
    }
    
?>
