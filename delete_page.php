<?php include('dbcon.php');?>

<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM students WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query failed". mysqli_error());
    }
    else{
        header("Location: index.php?delete_msg=Data deleted successfully");
    }

}


?>