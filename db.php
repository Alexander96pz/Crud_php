<?php

session_start();

$conn = mysqli_connect(
    "bzioh9m4vwvoshn9oebr-mysql.services.clever-cloud.com",
    "u0hzf4t3vypi4gaa",
    "8KoYYAznhQXfnXpR8Kv6",
    "bzioh9m4vwvoshn9oebr"
);

 if (isset($conn)) {
    echo "DB conect";
}else{
    echo "No contect"
}

?>