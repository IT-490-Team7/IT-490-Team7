<?php
$link = mysqli_connect("25.14.30.215", "test", "it490123", "test_database");

if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

printf("Connection Success Host information: %s\n", mysqli_get_host_info($link));

/* close connection */
mysqli_close($link);

?>





