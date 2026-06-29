<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>avers</title>
     <link rel="icon" href="bg/download (1).jpeg" alt="">
    <link rel="stylesheet" href="index.css">
    <!--<script src="index.js"></script>-->
</head>
<body>

    <div id="one">
    <div id="firsta">
    
     <img src="bg/gate.jpeg" alt="" id="firstimg1" class="firstimg">
     <img src="bg/02.jpg" alt="" id="firstimg2" class="firstimg">
      <img src="bg/03.jpg" alt="" id="firstimg3" class="firstimg">
     <img src="bg/04.jpg" alt="" id="firstimg4" class="firstimg">
     <img src="bg/05.jpg" alt="" id="firstimg5" class="firstimg">
     <img src="bg/06.jpg" alt="" id="firstimg6" class="firstimg">

    
     <div id="second">
        <h2>Create An Account</h2>
         <img src="bg/download (1).jpeg" alt="" id="logo">

        <form action="" method="post" id="form"> 
             <?php
   ini_set('display_errors', '1');
   include('db.php');
    error_reporting(E_ALL);
    if(isset($_REQUEST["submit"])){
        $fullname=trim(addslashes($_REQUEST["fullname"]));
        $matric=$_REQUEST["matric"];
         $email =$_REQUEST["email"];
        $number=$_REQUEST["number"];
        $password=$_REQUEST["password"];
        $department=$_REQUEST["department"];
       
        $check= mysqli_query($conn, "SELECT * FROM avers WHERE email='$email' OR `phone`='$number'");
        $checkrows = mysqli_num_rows($check);
        if($checkrows>0){
            echo"<script>alert('This student already exist in DB');
            window.location.href='login.php'</script>";
        $result=mysqli_query($conn, $sql);
        if($result){
             $sql = "INSERT INTO avers(fullname, matric, email, `phone`, `password`, department) VALUES('$fullname', '$matric', '$email', '$number', PASSWORD('$password'), '$department')";
           
        echo"<script>alert('Welcome to your dashboard');
        window.location.href='mainpage.php'</script>"; 
        }else{
             echo mysqli_error($conn);
            }
       
    }
    }
    ?> 
            <label for="firstname" id="name">Fullname: <br>
            </label>
            <input type="text" name="fullname" title="FULLNAME" placeholder="FULLNAME"  id="fora"  required><img src="bg/head.png" alt="" id="pic2">

            <label for="firstname" id="matr">Matric No: <br>
            </label>
            <input type="text" name="matric"  title="MATRIC NO" placeholder="MATRIC NO"  id="matric"  required>
           
            <label for="email" id="ema">Email: <br>
            </label>
            <input type="email" name="email" title="EMAIL" placeholder="EMAIL"  id="mail"  required> <img src="bg/10.png" alt="" id="pic">
           
            <label for="email" id="dep">Department: <br>
            </label>
            <input type="text" name="department" title="DEPARTMENT" placeholder="department"  id="dept"  required>
           
            <label for="password" id="pho">Phone Number: <br>
            </label>
            <input type="phone" name="number" title="PHONE NUMBER" placeholder="+234xxxxxxxxxx" id="phone" maxlength="11"  required><img src="bg/phone.png" alt="" id="phn">
            <label for="password" id="pass">Password: <br>
            </label>
            <input type="password" name="password" title="PASSWORD" placeholder="PASSWORD"  id="password" maxlength="8" required> <span id="togglePassword" onclick="togglePassword()" >
               👁️
           </span>

           
            <button type="submit" name="submit" id="acc" onclick="return confirm('are you sure you want to proceed with this')">Create Account</button>  
            <a href="login.html" id="get" title="tap here only if you already have an account on the portal">Already have an account| login</a>
        </form>

        <a href="admin.html" title="only the school admins should tap here"><button type="submit" name="admin" id="admin" >Admin login</button></a>  
        <p id="ajeh"></p>
        <p id="ajah"></p>
     </div>
    </div>
    </div>
   
</body>
</html>