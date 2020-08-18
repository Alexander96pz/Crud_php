<?php
include("db.php");
if (isset($_POST['save-task'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    /*   echo $title;
        echo $description; */
    $query = "INSERT INTO task(title,description) VALUES ('$title','$description')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("fallido");
    } else {
        $_SESSION['message'] = 'Task Saved Successfully';
        //echo $_SESSION['message'];
        $_SESSION['message_type'] = 'success';
        header("Location: index.php");
    }
}
