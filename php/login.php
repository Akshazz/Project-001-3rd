<?php 
    session_start();
    include_once "config.php";
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    if(!empty($username) && !empty($pass)){
        $sql = mysqli_query($conn, "SELECT * FROM stud_info WHERE username = '{$username}' AND pass = '{$pass}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);

            if($pass === $pass){

                if($sql){
                    $_SESSION['Student_ID'] = $row['Student_ID'];
                    echo "success";
                }else{
                    echo "Something went wrong. Please try again!";
                }
            }else{
                echo "Invalid Student ID or Password!";
            }
        }else{
            echo "$username - Please enter correct password or username";
        }
    }else{
        echo "All input fields are required!";
    }
?>