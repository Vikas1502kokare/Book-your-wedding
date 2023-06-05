
<section class="header">
   
   <a href="home.php" class="logo">Wedding.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="portfolio.php">portfolio</a>
      <a href="pricing.php">pricing</a>
      
      <?php  
         session_start();
         if(isset($_SESSION["username"])) {?>
            <a href="contact.php">contact</a>
            <a href="fetch.php">users</a>
            <a href="logout.php">logout</a>
         <?php } else { ?>
            <a href="login.php">Login</a>
      <?php } ?>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>