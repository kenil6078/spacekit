<?php
include 'connection1.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete_query = "DELETE FROM `contact` WHERE id='$id'";
    
    if(mysqli_query($conn, $delete_query)){
        header("Location: dashboard.php?message=Contact deleted successfully");
        exit();
    } else {
        echo "Error deleting contact: " . mysqli_error($conn);
    }
} else {
    echo "No contact ID provided.";
}
?>