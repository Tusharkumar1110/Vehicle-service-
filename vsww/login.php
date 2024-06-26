<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css"> 
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        body{
            background-image: url(login3.jpg);
        }
        .wrapper{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 500px;
            width: 450px;
            background:transparent;
            backdrop-filter: blur(50px);
            border: 2px solid black;
            color: white;
            border-radius: 12px;
            padding: 30px 40px;
            margin: 50px 450px;
        }
        .wrapper h1{
            font-size: 36px;
            text-align: center;
        }
        .wrapper .input-box{
            position: relative;
            width: 100%;
            height: 50px;
            
            margin: 30px 0;
        }
        .input-box input{
            width: 150%;
            height: 100%;
            background: transparent;
            font-size: 16px;
            color: white;
            padding: 20px;
            outline: none;
            border: 2px solid gray;
            border-radius: 400px;
            margin-left: -60px;
        }
        .input-box input::placeholder{
            color: rgb(0, 0, 0);
        }
        .input-box i{
            position: absolute;
            right: 0px;
            margin-right: -30px;
            top: 30%;
            transform: translate(-50%);
            font-size: 20px;
        }
        .wrapper .remember-forget{
            display: flex;
            justify-content: space-between;
            font-size: 14.5px;
            margin: -15px 0px 15px;
            margin-left: -50px;
            margin-top: 15px;
            color: black;

        }
        .remember-forget label input{
            accent-color: rgb(0, 0, 0);
            color: black;
            margin-right: 3px;
        }
        .remember-forget a{
            color: rgb(0, 0, 0);
            text-decoration: none;
            font-weight: 500;
            margin-right: -40px;
        }
        .remember-forget a:hover{
            text-decoration: underline;
            background: transparent;
        }
        .wrapper .btn{
            width: 100%;
            height: 45px;
            border-radius: 40px;
            border: none;
            outline: none;
            box-shadow:0 0 10px black;
            font-size: 16px;
            font-weight: 600;
            color: rgb(255, 255, 255);
            background-color: black;
        }
        .wrapper .btn:hover{
            background-color: rgb(34, 22, 22);
            color: white;
        }
        .wrapper .register-link{
            font-size: 14.5px;
            text-align: center;
            margin-top: 20px;
           

        }
        .register-link p a{
            text-decoration: none;
            color: black;
            font-weight: 500;
                     
            }
        .register-link p a:hover{
            text-decoration: underline;
            background: transparent;
           
        }


    </style>
</head>
<body>
    <header>
        <h1 id="auto">Automotive Services</h1>
        <nav class="navbar">
            <a href="index.html">Home</a>&emsp;&emsp;&emsp;
            <a href="about.html">About</a>&emsp;&emsp;&emsp;
            <a href="carousel.html">Services</a>&emsp;&emsp;&emsp;
         <!--    <a href="">Our Staff</a>&emsp;&emsp;&emsp; -->
            <a href="login.html">Login</a>
    
        </nav>
       
    </header>
    <div class="wrapper">
        <form action="login.php" method="post" class="form">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" name="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
           <!--  <div class="remember-forget">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forgot Password?</a>
            </div> -->
            <button type="submit" class="btn" name="submit">Login</button>
            <div class="register-link">
                <p>
                    Don't have an account? <a href="register.php">Register</a>
                </p>
            </div>
        </form>
    </div>
    
</body>
</html>
<?php
if(isset($_POST["submit"]))
{

$con = mysqli_connect('localhost' , 'root', '' , 'vehicle');

$Username=$_POST["Username"];
$Password=$_POST["Password"];

$sql="select Username,Password from register where Username='$Username' and Password='$Password'";
$data=mysqli_query($con,$sql);
//first method
if(mysqli_num_rows($data)> 0)
echo"<script>alert('Logged in successfully')</script>";
else
echo"<script>alert('Invalid User')</script>";

//end of first method

/*Other Method
$found=false;
while($row=mysqli_fetch_assoc($data))
{
 $found=true;
}

if($found==true)
echo"<script>alert('Logged in successfully')</script>";
//end other method */



    
}
?>