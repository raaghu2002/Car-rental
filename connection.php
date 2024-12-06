<?php 
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    
    // Use the actual hostname provided by Render
    $con = mysqli_connect('db-xyz1234.render.com', 'your-database-username', 'your-database-password', 'carproject');

    if(!$con) {
        echo 'Please check your database connection';
    } else {
        echo 'Connected to the database successfully!';
    }
?>
