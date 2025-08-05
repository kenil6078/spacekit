<?php
include 'connection1.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete_query = "DELETE FROM `registration` WHERE `registration`.`id` = '$id'";
    
    if(mysqli_query($conn, $delete_query)){
         // echo "<script>confirm('Are you sure you want to delete this user?');</script>";
          header("Location: dashboard.php?message=User deleted successfully");
        exit();
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
} else {
    echo "No user ID provided.";
}
?>