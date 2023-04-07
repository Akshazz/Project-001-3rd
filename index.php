<?php 
  session_start();
  if(isset($_SESSION['Student_ID'])){
    header("location: users.php");
  }
?>
<?php include_once "header.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Project-001 </title>
        <link rel="manifest" href="manifest.json">
        <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    </head>
    
<body>
<br>
<br>
<br>

<div class="form">

    <section class="form login" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; margin: auto; width: 30%; padding: 10px;">
      <header style="color:rgb(44, 44, 44); font-size: 15; font-family:Arial, Helvetica, sans-serif;"> | Login Form </header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        
        <div class="field input">
          <label>&nbsp Student ID</label>
          <input style="border: 1px solid grey;" class="form-control" type="text" name="username" placeholder="  Enter Your Student ID" required>
        </div>
        <div class="field input">
          <label>&nbsp Password </label>
          <input style="border: 1px solid grey;" class="form-control" type="password" name="pass" placeholder="  Enter Your Password" required>
          <i class="fas fa-eye"></i>
        </div>
        
         <!-- ETO YUNG MODAL PAR -->
         &nbsp;&nbsp;&nbsp;
  <input type="checkbox" required>
  <label><p style="text-decoration: none; color: blue; font-size: 11px;"> I agree to this <a href="">Terms and Conditions</a></p></label>
  
  <script>
    $(document).ready(function(){
      $("#modal").click(function(){
        $("#termsModal").modal('show');
      });
    });
  </script>

        <div class="field button">
          <input class="btn btn-success btn-sm" type="submit" name="submit" value="Sign in">
        </div>
        
        <div class="frame">

</div>

        <a href=""><p class="forg"> Forgot password? </p></a>

        <div class="error-text"></div>

      </form>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>
        
    </body>
     
</html>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>