<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<style>
          @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
*{
    margin: 0;
    padding: 0;
    font-family: 'poppins',sans-serif;
}
section{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    width: 100%;
    background: url('bg_3.jpeg')no-repeat;
    background-position: center;
    background-size: cover;
}
.form-box{
    position: relative;
    width: 400px;
    height: 450px;
    background: transparent;
    border: 2px solid rgba(255,255,255,0.5);
    border-radius: 20px;
    backdrop-filter: blur(15px);
    display: flex;
    justify-content: center;
    align-items: center;

}
h2{
    font-size: 2em;
    color: #fff;
    text-align: center;
}
.inputbox{
    position: relative;
    margin: 30px 0;
    width: 310px;
    border-bottom: 2px solid #fff;
}
.inputbox label{
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    color: #fff;
    font-size: 1em;
    pointer-events: none;
    transition: .5s;
}
input:focus ~ label,
input:valid ~ label{
top: -5px;
}
.inputbox input {
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    padding:0 35px 0 5px;
    color: #fff;
}
.inputbox ion-icon{
    position: absolute;
    right: 8px;
    color: #fff;
    font-size: 1.2em;
    top: 20px;
}
.forget{
    margin: -15px 0 15px ;
    font-size: .9em;
    color: #fff;
    display: flex;
    justify-content: space-between;  
}

.forget label input{
    margin-right: 3px;
    
}
.forget label a{
    color: #fff;
    text-decoration: none;
}
.forget label a:hover{
    text-decoration: underline;
}
button{
    width: 100%;
    height: 40px;
    border-radius: 40px;
    background: #fff;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 1em;
    font-weight: 600;
}
.register{
    font-size: .9em;
    color: #fff;
    text-align: center;
    margin: 25px 0 10px;
}
.register p a{
    text-decoration: none;
    color: #fff;
    font-weight: 600;
}
.register p a:hover{
    text-decoration: underline;
      }
      .form-boxs{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border: 3px solid #000;
    padding: 30px;
      }

</style>
</head>
<body>

    <div class="login">

<?php
require('db.php');
if (isset($_POST['username']))
{
    $var = 0;
    if(isset($_POST['Email']))
    {
    $username = ($_POST['username']);
    $Email = ($_POST['Email']);
    $password = ($_POST['password']);
    
    if(!filter_var($Email, FILTER_VALIDATE_EMAIL))
    {
        $msg = 'The Email you have entered is invalid, please try again.';
        echo $msg;
    }else{

        $query = "INSERT INTO `users` (`username`, `password`, `Email`) VALUES ('$username', '$password', '$Email');"; 
        $result1 = mysqli_query($conn,$query);

        if($result1)
        {
            echo "<div class='form-boxs'>
            <h3>You are registered successfully.</h3>
            <br/>Click here to start <a href='index1.php'>Login</a></div>";
        }
  }  
  $conn->close();
    }
        }
else{
?>

<div class="form">
<form name="registration" action="" method="post">
<section>
      <div class="form-box">
        <div class="form-value">
          <form action="" method="post" name="login">
            <h2>Login</h2>
            <div class="inputbox">
              <ion-icon name="mail-outline"></ion-icon>
              <input
                type="text"
                name="username"
                required
              />
              <label for="">Username</label>
            </div>
            <div class="inputbox">
              <ion-icon name="lock-closed-outline"></ion-icon>
              <input type="Email" name="Email" required />
              <label for="">Email</label>
            </div>
            <div class="inputbox">
              <ion-icon name="lock-closed-outline"></ion-icon>
              <input
                type="password"
                name="password"
                required
              />
              <label for="">Password</label>
            </div>
            <div class="forget">
              <label for=""><input type="checkbox" />Remember Me</label>
            </div>
            <button>Register</button>
          </form>
        </div>
      </div>
    </section>
</form>
</div>
<?php } ?>
</body>
</html>