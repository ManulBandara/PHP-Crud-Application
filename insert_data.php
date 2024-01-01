<?php
include "dbcon.php";
if(isset($_POST['add_students'])){

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    
   if($first_name == "" || empty($first_name)){
        header("Location: index.php?message=you must fill the required fields");
   }

   else{
        $query = "insert into students (first_name, last_name, age) values ('$first_name', '$last_name', '$age')";
    
        $result = mysqli_query($conn, $query);
    
        if(!$result){
            die("Query failed");
        }

        else{
        header("Location: index.php?insert_msg=Data inserted successfully");
        }
   }
}



?>
