<?php 
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // Use the correct MySQL host, username, password, and database name
    $con = mysqli_connect('your-database-hostname.render.com', 'your-database-username', 'your-database-password', 'carproject');

    if(!$con) {
        echo 'Please check your database connection';
    } else {
        echo 'Connected to the database successfully!';
    }
?>
