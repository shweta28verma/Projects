<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Online Clothing Store</title>
<link href="" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
.style8 {font-size: 24px}
.style9 {font-size: 95%; font-weight: bold; color: #003300; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->
</style>
</head>
<body>

  

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ONLINE CLOTHING STORE</title>
  <link rel="stylesheet" href="">
  <!-- Google Icons Link -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
</head>
<body>
  <header>
    <nav class="navbar">
    <a href="#" class="logo">
        <img src="img/logo.png" alt="Fiverr Logo" style="width:120px;border-radius:15px;height:120px;">
      </a>


      <ul class="menu-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="category.php">Category</a></li>
        <li><a href="Products.php">Products</a></li>
        <li><a href="register.php">Sign In</a></li>
        <li><a href="Offers.php">Offers</a></li>
        <li class="join-btn"><a href="right.php">login</a></li>
        <span id="close-menu-btn" class="material-symbols-outlined">close</span>
      </ul>
      
      
      <span id="hamburger-btn" class="material-symbols-outlined">menu</span>
    </nav>
  </header>

  <section class="hero-section">
    <div class="content">
      <h1>Find the right choice here , right away</h1>
     
      <div class="popular-tags">
        Popular:
        <ul class="tags">
          <li><a href="products.php">JEANS</a></li>
          <li><a href="products.php">Bleasures</a></li>
          <li><a href="products.php">T-Shirts</a></li>
          <li><a href="products.php">Kurtis</a></li>
        </ul>
      </div>
    </div>
  </section>
  
  <script>
    const header = document.querySelector("header");
    const hamburgerBtn = document.querySelector("#hamburger-btn");
    const closeMenuBtn = document.querySelector("#close-menu-btn");

    // Toggle mobile menu on hamburger button click
    hamburgerBtn.addEventListener("click", () => header.classList.toggle("show-mobile-menu"));

    // Close mobile menu on close button click
    closeMenuBtn.addEventListener("click", () => hamburgerBtn.click());
  </script>
</body>
</html>

<style>
  /* Importing Google font - Fira Sans */
@import url('https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700&display=swap');
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Fira Sans', sans-serif;
}

body {
  background: #1B1B1D;
}

header {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  z-index: 1;
  padding: 20px;
}

header .navbar {
  max-width: 1280px;
  margin: 0 auto;
  
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.navbar .menu-links {
  display: flex;
  align-items: center;
  list-style: none;
  gap: 30px;
}

.navbar .menu-links li a {
    /*background-color:cornflowerblue;*/
    color: #fff;
  font-size:30px;
  font-weight: 600;
  text-decoration: none;
  transition: 0.2s ease;
}

.navbar .menu-links .language-item a {
  display: flex;
  gap: 8px;
  align-items: center;
}

.navbar .menu-links .language-item span {
  font-size: 3.3rem;
}

.navbar .menu-links li a:hover {
  color: #1dbf73;
}

.navbar .menu-links .join-btn a {
  border: 1px solid #fff;
  padding: 8px 15px;
  border-radius: 4px;
}

.navbar .menu-links .join-btn a:hover {
  color: #fff;
  border-color: transparent;
  background: #1dbf73;
}

.hero-section {
  height: 100vh;
  background-image: url("images/clothes.webp");
  background-position: center;
  background-size: cover;
  position: relative;
  display: flex;
  padding: 0 20px;
  align-items: center;
}

.hero-section .content {
  max-width: 1280px;
  margin: 0 auto 40px;
  width: 100%;
}

.hero-section .content h1 {
  color: white;
  margin-top:2%;
  font-size: 3rem;
  max-width: 630px;
  line-height: 65px;
}

.hero-section .search-form {
  height: 48px;
  display: flex;
  max-width: 630px;
  margin-top: 30px;
}

.hero-section .search-form input {
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  padding: 0 15px;
  font-size: 1rem;
  border-radius: 4px 0 0 4px;
}

.hero-section .search-form button {
  height: 100%;
  width: 60px;
  border: none;
  outline: none;
  cursor: pointer;
  background: #1dbf73;
  color: #fff;
  border-radius: 0 4px 4px 0;
  transition: background 0.2s ease;
}

.hero-section .search-form button:hover {
  background: #19a463;
}

.hero-section .popular-tags {
  display: flex;
  color: black;
  gap: 25px;
  font-size: 0.875rem;
  font-weight: 500;
  margin-top: 25px;
}

.hero-section .popular-tags .tags {
  display: flex;
  gap: 15px;
  align-items: center;
  list-style: none;
}

.hero-section .tags li a {
  text-decoration: none;
  color: #fff;
  border: 1px solid #fff;
  padding: 4px 12px;
  border-radius: 50px;
  transition: 0.2s ease;
}

.hero-section .tags li a:hover {
  color: #000;
  background: #fff;
}

.navbar #hamburger-btn {
  color: #fff;
  cursor: pointer;
  display: none;
  font-size: 1.7rem;
}

.navbar #close-menu-btn {
  position: absolute;
  display: none;
  color: #000;
  top: 20px;
  right: 20px;
  cursor: pointer;
  font-size: 1.7rem;
}

@media screen and (max-width: 900px) {
  header.show-mobile-menu::before {
    content: "";
    height: 100%;
    width: 100%;
    position: fixed;
    left: 0;
    top: 0;
    backdrop-filter: blur(5px);
  }

  .navbar .menu-links {
    height: 100vh;
    max-width: 300px;
    width: 100%;
    background: #fff;
    position: fixed;
    left: -300px;
    top: 0;
    display: block;
    padding: 75px 40px 0;
    transition: left 0.2s ease;
  }

  header.show-mobile-menu .navbar .menu-links {
    left: 0;
  }

  .navbar .menu-links li {
    margin-bottom: 30px;
  }

  .navbar .menu-links li a {
    color: #000;
    font-size: 1.1rem;
  }

  .navbar .menu-links .join-btn a {
    padding: 0;
  }

  .navbar .menu-links .join-btn a:hover {
    color: #1dbf73;
    background: none;
  }

  .navbar :is(#close-menu-btn, #hamburger-btn) {
    display: block;
  }

  .hero-section {
    background: none;
  }

  .hero-section .content {
    margin: 0 auto 80px;
  }

  .hero-section .content :is(h1, .search-form) {
    max-width: 100%;
  }

  .hero-section .content h1 {
    text-align: center;
    font-size: 2.5rem;
    line-height: 55px;
  }

  .hero-section .search-form {
    display: block;
    margin-top: 20px;
  }

  .hero-section .search-form input {
    border-radius: 4px;
  }
  
  .hero-section .search-form button {
    margin-top: 10px;
    border-radius: 4px;
    width: 100%;
  }

  .hero-section .popular-tags {
    display: none;
  }
}
</style>