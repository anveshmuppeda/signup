<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class = "signup">
      <h1>SIGN UP</h1>
      <form action="#" method= "POST">
        <label>First Name</label>
        <input type="text" placeholder="Enter the FisrtName" name="fname">
        <label>Last Name</label>
        <input type="text" placeholder="Enter the LastName" name="lname">
        <label>Email</label>
        <input type="email" placeholder="Enter the Email" name="email">
        <label>Username</label>
        <input type="text" name="Enter the UserName">
        <label>Password</label>
        <input type="password" placeholder="Enter the Password" name="password">
        <label>Confirm Password</label>
        <input type="password" placeholder="Re-Enter the Password" name="conpassword">
        <input type="submit" value="Register" class="btn" name="register">

      </form>
        <p>Already Have an Account? <a href="./html/index.html" target="_blank">LOGIN HERE</a></p>

    </div>


  </body>
</html>

<?php
if($_POST['register'])
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $username = $_POST['usrename'];
    $password = $_POST['password'];
    $conpassword = $_POST['conpassword'];
  $query = "INSERT INTO REGISTRATION VALUES('$fname', '$lname', '$email','$username', '$password', '$conpassword')";
  $data = mysqli_query($conn, $query);
  if($data)
  {
    echo "Data Inserted into database";
  }
  else
  {
    echo "Failed";
  }


}
 ?>
