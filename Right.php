<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
 

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="">
</head>
<php
  include"Header.php";
  ?>
<body>
 
  <div class="wrapper">
 
  <form  name="form1" method="post" action="login.php">
      <h2>Login</h2>
        <div class="input-field">
        <input type="text" required name="txtUserName"  id="txtUserName" />
        <label>Enter your username</label>
      </div>
      <div class="input-field">
        <input type="password" required name="txtPassword"  id="txtPassword">
        <label>Enter your password</label>
      </div>
      <div class="forget">
      <h4>User-Type:</h4>
        <label for="remember">
        <label>
                <input type="radio" name="rdType" value="Admin" id="rdType_0" required>
               <pre> Admin    </pre></label>
              <br><br>
              <label>
                <br><br><input type="radio" name="rdType" value="Customer" id="rdType_1">
                Customer</label>
              <br>
         
        </label>
    
      </div>
      <div class="submit">
      <input type="submit" name="button" id="button"  value="Login">
      </div>
      <div class="register">
        <p>Don't have an account? <a href="register.php">Register</a></p>
        <br><p> <a href="index.php">>>Back</a></p>
      </div>
    </form>
  </div>
</body>
</html>

 <script type="text/javascript">
<!--
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
//-->
</script>

<style>
  @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@200;300;400;500;600;700&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Open Sans", sans-serif;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  width: 100%;
  padding: 0 10px;
}

body::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 90%;
  background: url("images/download.jpeg"), #000;
  background-position: center;
  background-size: cover;
}

.wrapper {
  width: 400px;
  border-radius: 8px;
  padding: 30px;
  text-align: center;
  border: 1px solid rgba(255, 255, 255, 0.5);
  backdrop-filter: blur(9px);
  -webkit-backdrop-filter: blur(9px);
}

form {
  display: flex;
  flex-direction: column;
}

h2 {
  font-size: 2rem;
  margin-bottom: 20px;
  color: #fff;
}

.input-field {
  position: relative;
  border-bottom: 2px solid #ccc;
  margin: 15px 0;
}

.input-field label {
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  color: #fff;
  font-size: 21px;
  pointer-events: none;
  transition: 0.15s ease;
}

.input-field input {
  width: 100%;
  height: 40px;
  background: transparent;
  border: none;
  outline: none;
  font-size: 16px;
  color: #fff;
}

.input-field input:focus~label,
.input-field input:valid~label {
  font-size: 0.8rem;
  top: 10px;
  transform: translateY(-120%);
}

.forget {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin: 25px 0 35px 0;
  color: #fff;
}

#remember {
  accent-color: #fff;
}

.forget label {
  display: flex;
  align-items: center;
}

.forget label p {
  margin-left: 8px;
}

.wrapper a {
  color: #efefef;
  text-decoration: none;
}

.wrapper a:hover {
  text-decoration: underline;
}

.submit {
  background: #fff;
  color: #000;
  font-weight: 600;
  border: none;
  padding: 12px 20px;
  cursor: pointer;
  border-radius: 3px;
  font-size: 16px;
  border: 2px solid transparent;
  transition: 0.3s ease;
}

.submit:hover {
  color: #fff;
  border-color: #fff;
  background: rgba(255, 255, 255, 0.15);
}

.register {
  text-align: center;
  margin-top: 30px;
  color: #fff;
}
  </style>