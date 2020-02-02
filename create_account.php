<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=db_crud_frist", "root", "");
    // set the PDO error mode to exception
    if (isset($_POST['btn'])) {
        try {
            $frist_name = $_POST['frist_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $address = $_POST['address'];

            $sql = "INSERT INTO tbl_crud_frist (frist_name,last_name,email,address)"
                    . "VALUES(:sfname,:slname,:semail,:address)";
            $data = $conn->prepare($sql);
            $data->bindParam(":sfname", $frist_name);
            $data->bindParam(":slname", $last_name);
            $data->bindParam(":semail", $email);
            $data->bindParam(":address", $address);
            $data->execute();
        } catch (Exception $ex) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
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
        <title>NEW ACCOUNT CREATE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 offset-3">
                    <form action="" method="post">
                        <div class="form-group">
                            <h1>Be great at what you do</h1>
                            <h2>Get started - it's free.</h2>
                            <label for="exampleInputEmail1">Frist Name</label>
                            <input type="name" name="frist_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Frist Name">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="name" name="last_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">address</label>
                            <input type="address" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="address">

                        </div>

                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit"name="btn" class="btn btn-primary">Submit</button>
                    </form>
                </div> 


            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 offset-9">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link " href="view_crud_frist.php"> view information</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 ">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="create_account.php"> Add information</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <script src="style/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>


