<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registration Form</title>

  </head>
  <body>
    <section class="container">
      <header>Registration Form</header>
      <form action="insert.php" class="form" method="post">
        <div class="input-box">
          <label>CUSTOMER NAME</label>
          <input type="text" placeholder="Enter full name" required / name="txtName" id="txtName">
        </div>

        <div class="input-box">
          <label>ADDRESS</label>
		  <textarea name="txtAddress" id="txtAddress" cols="35" rows="3"></textarea>
        
        </div>

		<div class="input-box">
		<label>CITY:</label>	
		<div class="select-box">
			
              <select name="cmbCity" id="cmbCity">
                <option hidden>CITY:</option>
                <option>JABALPUR</option>
                <option>BHOPAL</option>
                <option>INDORE</option>
                <option>CHHINDWARA</option>
              </select>
            </div>


		<div class="input-box">
          <label>EMAIL ID:</label>
          <input type="text" placeholder="Enter email-id" name="txtEmail" id="txtEmail" />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="text" placeholder="Enter phone number" required  name="txtMobile" id="txtMobile" />
          </div>
        </div>

         <div class="column">
        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">

            <select name="rdGender" id="rdGender">
              <option>Male</option>
              <option>Female</option>
			  <option>Prefer not to say</option>
            </select>
            </div>
            <div class="input-box">
            <label>Birth Date</label>
            <input type="date" placeholder="Enter birth date" required  name="txtDate" id="txtDate">
          </div>
          </div>
          </div>
        </div>


        <div class="input-box">
          <label>USERNAME: </label>
          <input type="text"placeholder="Enter username" required name="txtUserName" id="txtUserName3" />
          </div>

		  <div class="input-box">
		  <label>PASSWORD: </label>
		  <input type="password" placeholder="Enter password" required name="txtPassword" id="txtPassword" />
          </div>

        </div>
 <br>
 <br>
 
        <input type="submit" name="button2" id="button2" value="Register" class="btn"/>  <a href="index.php">  back</a>
      </form>
    </section>
  </body>
</html>
<style>
	/* Import Google font - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  background: purple;
}
.container {
  position: relative;
  max-width: 700px;
  width: 100%;
  background: #fff;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}
.container header {
  font-size: 1.5rem;
  color: #333;
  font-weight: 500;
  text-align: center;
}
.container .form {
  margin-top: 30px;
}
.form .input-box {
  width: 100%;
  margin-top: 20px;
}
.input-box label {
  color: #333;
}
.form :where(.input-box input, .select-box) {
  position: relative;
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #707070;
  margin-top: 8px;
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 15px;
}
.input-box input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}
.form .column {
  display: flex;
  column-gap: 15px;
}
.form .gender-box {
  margin-top: 20px;
}
.gender-box h3 {
  color: #333;
  font-size: 1rem;
  font-weight: 400;
  margin-bottom: 8px;
}
.form :where(.gender-option, .gender) {
  display: flex;
  align-items: center;
  column-gap: 50px;
  flex-wrap: wrap;
}
.form .gender {
  column-gap: 5px;
}
.gender input {
  accent-color: rgb(130, 106, 251);
}
.form :where(.gender input, .gender label) {
  cursor: pointer;
}
.gender label {
  color: #707070;
}
.address :where(input, .select-box) {
  margin-top: 15px;
}
.select-box select {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  color: #707070;
  font-size: 1rem;
}
.form button {
  height: 55px;
  width: 100%;
  color: #fff;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 30px;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease;
  background: rgb(130, 106, 251);
}
.form button:hover {
  background: rgb(88, 56, 250);
}
.btn
{
    color:white;
    width: 90px;
    height:45px;
    padding:15px 10px;
    border-radius: 20px;
    background: purple;
    font-size: 17px;
}
/*Responsive*/
@media screen and (max-width: 500px) {
  .form .column {
    flex-wrap: wrap;
  }
  .form :where(.gender-option, .gender) {
    row-gap: 15px;
  }
}

</style>
