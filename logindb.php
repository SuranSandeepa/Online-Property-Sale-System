<?php require_once('includes/connect.php');
    $user_name = $_POST['user_name'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $user_name = stripcslashes($user_name);  
        $password = stripcslashes($password);  
        $user_name = mysqli_real_escape_string($conn, $user_name);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from register where user_name = '$user_name' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            //echo "<h1><center> Login successful </center></h1>"; 
            header("Location:index.php");
            exit();
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>"; 
            header("Location:login.php"); 
        }     



?>