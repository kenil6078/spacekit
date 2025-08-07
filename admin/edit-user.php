<?php
include "connection1.php";
$userID = $_GET['id'] ?? null;
$username = '';
$email = '';

if ($userID) {
          // Fetch current user data
          $result = mysqli_query($conn, "SELECT username, email FROM registration WHERE id = $userID");
          if ($row = mysqli_fetch_assoc($result)) {
                    $username = $row['username'];
                    $email = $row['email'];
          }
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_user'])) {
          $new_username = $_POST['username'];
          $new_email = $_POST['email'];
          $update = mysqli_query($conn, "UPDATE registration SET username = '$new_username', email = '$new_email' WHERE id = $userID");
          if ($update) {
                    echo "<script>alert('User updated successfully');window.location='dashboard.php';</script>";
                    exit;
          } else {
                    echo "<script>alert('Error updating user');</script>";
          }
}
?>

<!-- Bootstrap Modal Form -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="modal show" tabindex="-1" style="display:block; background:rgba(0,0,0,0.5);">
  <div class="modal-dialog">
                      <div class="modal-content">
                              <form method="post">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title">Edit User</h5>
                                                  </div>
                                                  <div class="modal-body">
                                                    <div class="form-group">
                                                                        <label>Username</label>
                                                                        <input type="text" name="username" class="form-control" value="<?php echo htmlspecialchars($username); ?>" required>
                                                    </div>
                                                    <div class="form-group">
                                                                        <label>Email</label>
                                                                        <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($email); ?>" required>
                                                    </div>
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="submit" name="update_user" class="btn btn-primary">Update</button>
                                                    <a href="dashboard.php" class="btn btn-secondary">Cancel</a>
                                                  </div>
                              </form>
                      </div>
  </div>
</div>
