<?php
// print_r($_POST);
// die();
include('../admin/include/config.php');
if (isset($_POST['submit'])) {

  // Assuming $con is your connection variable, ensure it is initialized before this code block
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $subject = mysqli_real_escape_string($con, $_POST['subject']);
  $message = mysqli_real_escape_string($con, $_POST['message']);
  $status = 'pending'; // Define the status variable, adjust as needed

  $sql = "INSERT INTO contact (name, email, subject, message, status) VALUES ('$name', '$email', '$subject', '$message', 1)";
  $result = mysqli_query($con, $sql);
    
  if ($result) {
   header('location: contact.php');
  // Ensure no further code is executed after the redirect
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
}
?>
