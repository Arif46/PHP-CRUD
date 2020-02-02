<?php
try{
    $conn = new PDO("mysql:host=localhost;dbname=db_crud_frist", "root", "");
    $id=$_GET['id'];
    $sql='DELETE FROM tbl_crud_frist WHERE id=:sid';
    $data=$conn->prepare($sql);
    $data->bindParam(':sid', $id);
    $data->execute();
    header("location:view_crud_frist.php");
} catch (Exception $ex) {
echo "connection failed".$ex->getMessage();
}


