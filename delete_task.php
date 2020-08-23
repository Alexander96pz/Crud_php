<?php
    include("db.php");
    if (isset($_GET["id"])) {
        $id=$_GET["id"];
        $query="DELETE FROM task WHERE id=$id";
        $result=mysqli_query($conn,$query);
        if (!$result) {
            die("fallido");
        }else {
            $_SESSION['message']='Delete Task Successfully';
            $_SESSION['message_color']='danger';
            header("Location: index.php");
        }
    }
?>