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
            <div class="container">
                <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php session_unset();
                } ?>
            </div>
            <div class="card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" placeholder="task title" name="title" class="form-control" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea rows="2" placeholder="task description" name="description"
                            class="form-control"></textarea>
                    </div>
                    <input type="submit" name="save-task" value="success" class="btn btn-success btn-block">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Task description</th>
                        <th scope="col">Created at</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $query = "SELECT * from task";
                        $result_query=mysqli_query($conn,$query);
                        while ($row=mysqli_fetch_array($result_query)) { ?>
                        <tr>
                            <th scope="row"><?php echo $row["id"] ?> </th>
                            <td> <?php echo $row["title"]?></td>
                            <td> <?php echo $row["description"]?></td>
                            <td> <?php echo $row["created_at"]?></td>
                        </tr>
                        <?php
                        } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include("includes/footer.php") ?>