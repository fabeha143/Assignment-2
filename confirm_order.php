<?php
    include('header.php');
    include('db_connect.php');
    if(isset($_POST['order_submit'])){
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $email = $_POST['email'];
        $phonenum = $_POST['pnumber'];

        $query = "INSERT INTO order_list (`firstname`, `lastname`, `email`, `phonenumber`)VALUES('$firstname','$lastname','$email','$phonenum')";

        $res = mysqli_query($conn,$query);
        header('location:checkout.php');
        // $msg = "Thank you for shopping your status is pending";
        // $subject = "Order confirm";
        // $header = "From:fabehanaqvi7@gmail.com";
        // if (mail($email, $subject, $msg, $header)) {
        //     echo "<script>alert('Order Confirmation Email has been send')</script>";
        // } else {
        //     echo "<script>alert('Email failed to send')</script>";
        // }
            


    }
    




?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  </head>
  <body>
  <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-lg-3">
            <form method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">First Name</label>
                    <input type="text" name ="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Last Name</label>
                    <input type="text" name ="lname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                    <input type="tel" name = "pnumber" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Not a Robot</label>
                </div>
                <button type="submit" name = "order_submit" class="btn btn-primary">Confirm</button>
            </form>
    
  </body>
</html>