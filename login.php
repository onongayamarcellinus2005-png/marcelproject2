<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
       <link rel="icon" href="bg/download (1).jpeg" alt="">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div id="first">
<img src="bg/download (1).jpeg" alt="" id="img">
<div id="second">
    <h1>Welcome Back!!</h1>
    <p>please login securely using your credentials </p>
    <hr>
    <h2>student login</h2>
    <form action="" method="post">
           <?php
   ini_set('display_errors', '1');
    error_reporting(E_ALL);
     include('db.php');
    if(isset($_REQUEST["submit"])){
        $matric=$_REQUEST["matric"];
        $email=$_REQUEST["email"];
        $password=$_REQUEST["password"];
        $sql = "INSERT INTO avers(fullname, matric, email,` password`, `number`,) VALUES('$fullname', '$matric, '$email', '$password, '$number)";
        $result=mysqli_query($conn, $sql);
        // if($result){
        // echo "<script> alert('Welcome to your dashboard')</script>";
        // }else{
        //      echo mysqli_error($conn);
        //     }
              // Compare passwords
        if($password == $row['password'])
        {
            echo "<script>
                    alert('Login Successful');
                    window.location='mainpage.php';
                  </script>";
        }
        else
        {
            echo "<script>
                    alert('Incorrect Password');
                    window.location='login.php';
                  </script>";
        }
    }
    else
    {
        // echo "<script>
        //         alert('Email Not Found');
        //         window.location='index.php';
        //       </script>";
    }

    ?> 
        <label for="" id="for">
            Student ID:
             </label>
            <input type="text" title="Enter your ID/matric number" placeholder="Enter your ID/matric number"  id="fora" required >

        <label for="" id="pass">
            Password:
        </label>
            <input type="password" placeholder="Enter your password" id="forb" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\w_]).{8}$"
    title="password must be exactly 8 characters and include uppercase,number,and special characters" maxlength="8" required name="password">
         <a href="forgetpassword.php" id="forget" title="forgot password">Forgot password!?</a> 
       <a href="mainpage.php" name="submit"><button type="submit" id="log" title="login" name="submit">Login</a></button>
        <hr id="hr1"> 
        <p id="pa">OR</p>
        <hr id="hr2">
    </form>
    <a href="www.email.com"><button type="submit" id="mail" title="Continue with Email">Continue with Email</button></a>

</div>
<div id="third">
<p id="pea">&copy;2026 Adekunle Ajasin University, Akungba Akoko.</p>
</div>
    </div>
</body>
</html>


