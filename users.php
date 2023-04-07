<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['Student_ID'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM stud_info WHERE Student_ID = {$_SESSION['Student_ID']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
  </style>

          <center>
          <div class="details">
          <span><?php echo $row['Student_ID']. " | " .$row['Firstname']. " " .$row['Lastname']?></span>
        
<!-- Button trigger modal -->
<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
  Sign-out <i class="bx bx-log-out"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content"  style="margin-left: 110px; margin-right: 110px; padding: 5px 5px;  background-color:rgb(255,255,755, 0.3); border: 1px solid white;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: white; font-size: 13px; font-family: Sans-serif;";><b> Do you want to sign out <?php echo $row['Firstname']. "&nbsp;"  .$row['Lastname']?> ? </b></h5>
        
        </button>
      </div>
      <div class="modal-body">
      <a class="btn btn-danger" href="php/logout.php?logout_id=<?php echo $row['Student_ID']; ?>" class="logout"><b>Yes </b><i class="bx bx-log-out"></i></a>&nbsp;
      <a class="btn btn-primary" data-dismiss="modal" style="color: white"><b> No! </b></a>
          </div>
      </div>
      </div>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

          </center>
      </header>

    <!DOCTYPE html>
    <html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <div class="wrapper">
        <div class="title"> DASHBOARD </div>
        sdsds
        </div>
      
</body>
</html>

