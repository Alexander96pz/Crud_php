<?php include("db.php") ?>
<?php include("includes/header.php") ?>
<!-- Obtengo los datos del BD -->
<?php 
    if (isset($_GET["id"])) {
        $id=$_GET["id"];
        // 
        $query="SELECT * FROM task WHERE id=$id";
        $result=mysqli_query($conn,$query);
        if (!$result) {
            die("conexion fallida");
        }else {
            if (mysqli_num_rows($result)==1) {
                $row=mysqli_fetch_array($result);
                $title=$row["title"];
                $description=$row["description"];
                # code...
            }
        }
    }  
?>
<!-- Actualizar -->
<?php
    if(isset($_POST["update"])){
        $title=$_POST["title"];
        $description=$_POST["description"];
        $query="UPDATE task SET title='$title', description='$description' WHERE id=$id";
        $result=mysqli_query($conn,$query);
        if(!$result){
            die("update fallida");
        }else {
            $_SESSION['message']="Update Successfully";
            $_SESSION['message_color']="success";
            header("Location: index.php");
        }
    }
?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $id ?>" method="POST">
                    <div class="form-group">
                        <input type="txt" class="form-control" name="title" value="<?php echo $title?>" placeholder="update title">
                    </div>
                    <div class="form-group">
                        <textarea name="description" id="" cols="30" rows="4"><?php echo $description ?></textarea>
                        <!-- <input type="txt" class="form-control" id="description"> -->
                    </div>
                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                </form>
            </div>

        </div>
    </div>
</div>
<?php include("includes/footer.php") ?>