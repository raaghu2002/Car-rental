<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    
    // Use environment variables
    $con = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASSWORD'), getenv('DB_NAME'));

    if (!$con) {
        echo 'Please check your database connection';
    } else {
        echo 'Connected to the database successfully!';
    }
?>
