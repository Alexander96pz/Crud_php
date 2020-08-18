<?php include("db.php") ?>
<?php include("includes/header.php") ?>
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a href="index.php" class="navbar-brand">PHP MYSQL CRUD</a>
    </div>
</nav>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?=$_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                    <strong><?php= $_SESSION['message'] ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php session_unset(); } ?>
            <div class="card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" placeholder="task title" name="title" class="form-control" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea rows="2" placeholder="task description" name="description" class="form-control"></textarea>
                    </div>
                    <input type="submit" name="save-task" value="success" class="btn btn-success btn-block">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php") ?>