<?php
include 'connection1.php';
if(isset($_GET['p_id'])){
    $id = $_GET['p_id'];
    $delete_query = "DELETE FROM `product` WHERE `product`.`p_id` = '$id'";
          if(mysqli_query($conn, $delete_query)){
          
            header("Location: dashboard.php?message=Product deleted successfully");
          exit();
          } else {
          echo "Error deleting product: " . mysqli_error($conn);
          }
} else {
    echo "No product ID provided.";
}
?>