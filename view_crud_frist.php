<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=db_crud_frist", "root", "");
    $sql = 'SELECT * FROM tbl_crud_frist';
    $data = $conn->prepare($sql);
    $data->execute();
} catch (Exception $ex) {
    echo "connected failed!:" . $e->getMessage();
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <script type="text/javascript">
            function checkDelete() {
                var msg = confirm('Are you sure delete that!');
                if (msg) {
                    return true;
                } else {
                    return false;
                }
            }
        </script>

    </head>
    <body>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
                    ?>

                    <tr>
                        <th scope="row"><?php echo $row['id'] ?></th>
                        <td><?php echo $row['frist_name'] ?></td>
                        <td><?php echo $row['last_name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['address'] ?></td>
                        <td>
                            <a href="edit_crud_frist.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Edit</a>
                            <a href="delete_crud_frist.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" onclick ="return checkDelete()">delete</a>

                        </td>
                    </tr>
<?php } ?>
            </tbody>
        </table>

        <div class="row">
            <div class="col-lg-3 offset-9">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link " href="view_crud_frist.php"> view information</a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-3 ">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="create_account.php"> Add information</a>
                    </li>
                </ul>
            </div>
        </div>

        <script src="style/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>


