<?php
require_once "connection.php";
if($_SERVER['REQUEST_METHOD']=="POST"){
if(isset($_POST['submit'])){
$data= "select r_id,email,password from logins";
$data1 = $conn->query($data);
 $role=0; 
 foreach($data1 as $b)
  { 
    if($b['email'] == $_POST['username'] && $b['password'] == $_POST['password']) 
    { 
    $role=$b['r_id'];
    break;
    } 
} 

if($role == 1)
{ 
    header("Location:User.php");
    echo '<script language="javascript">';
    echo 'alert("Login Successful")'; 
    echo '</script>';
} 
else if($role == 2)
{
    header("Location:Dealer.php");
    echo '<script language="javascript">';
    echo 'alert("Login Successful")'; 
    echo '</script>';
}
else if($role == 3)
{
    header("Location:Supplier.php");
    echo '<script language="javascript">';
    echo 'alert("Login Successful")'; 
    echo '</script>';
}
else
{ 
    echo '<script language="javascript">';
    echo 'alert("Please enter the correct Password and Username")'; 
    echo '</script>';
} 
} 
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Document</title>
    <style>
        body {
            background: url('landscape-5296144_1280.jpg') no-repeat;
            background-size: cover;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
      .form {
        border: 2px solid red;
        padding: 20px;
        border-radius: 10px;
        backdrop-filter: blur(8px);
        width: 100%;
        max-width: 220px;
      }
      .name1 {
        background-color: transparent;
        border: none;
        border-bottom: 2px solid black;
        max-inline-size: 200px;
      }
      .name1 , 
      .password1 {
        background-color: transparent;
        border: none;
        border-bottom: 2px solid black;
        max-inline-size: 200px;
        outline:none;
      }
      .login {
        max-inline-size: 50px;
        background-color: transparent;
        margin-left: 80px;
        cursor: pointer;
        border-radius:5px;
      }
      ::placeholder{
        color:rgb(22, 22, 22);
      }
    </style>
  </head>
  <body
  >
    <form
      class="form"
      action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"
      method="post"
      style="
        display: flex;
        flex-direction: column;
        width: 20%;
        padding-inline: auto;
        margin: auto;
        margin-top: 15%;
      "
    >
      <label style="font-size: 1.5rem"><b>Login Page</b></label
      ><br />
      <input
        class="name1"
        type="text"
        name="username"
        placeholder="Username"
      /><br />
      <input
        class="password1"
        type="password"
        name="password"
        placeholder="Password"
      /><br />
      <button class="login" type="submit" name="submit">LogIn</button>
    </form>
  </body>
</html>
