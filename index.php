<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Bookies Masters</title>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" type="text/css" href="index-style.php" />
    <link rel="stylesheet" type="text/css" href="php-style.php" />
    
    
</head>
<body>
    <div class="outer-grid">
      <header>
        <div class="left-header">
          <i class="fas fa-bars" onclick="toogleNav()"></i>
          <h2 id="master">Bookies masters</h2>
        </div>
        <div class="right-header">
          <div class="header-link">
            <a id="log" href="login.php">Login</a>
          </div>
          <div class="header-link">
            <a id="reg" href="register.html">Register</a>
          </div>
        </div>
      </header>
      <nav class="hide-nav">
        <div class="nav-link">
          <a class="find" href="home.html">Home</a>
        </div>
        <div class="nav-link">
          <a class="find" href="about.html">About</a>
        </div>
        <div class="nav-link">
          <a class="find" href="contact.html">Contact</a>
        </div>
      </nav>
      <div class="inner-grid">
        <main>
        
    <h4>Welcome</h4>
    
    <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["username"]) ?></p>
        
       <h4>Join our monthly Subscribers</h4>
        
        <p>
            Subscribe to daily 3-5 safe odds.Odds are provided atleast once and atmost thrice a week over the subscribed month to maximize on profit. </br> 
            Subscribe today at Kshs 1200/= per month.
        </p>

        <h4>How to join</h4>

        <p>
        <ol>
            <li>Go to Mpesa</li>
            <li>Send Money</li>
            <li>Number:0745676267</li>
            <li>Confirm Payment</li>
        </ol>
        </p>

        <h4>Confirm Subscription</h4>

        <p>
            On payment, a message will be sent to your mpesa number to confirm your subscription.
        </p>

        <p><a href="logout.php">Logout</a></p>
        </main>
        <aside>
          <div class="sidebar">
            <h4>More predictions</h4>
            <a class="more" href="wins.html">1x2</a>
            <a class="more" href="goal.html">Btts</a>

            <a class="more" href="over.html">Ov25</a>

            <a class="more" href="Under.html">Un35</a>
          </div>
        </aside>
        <footer>
          <b>Created by:</b> <a id="moha" href="contact.html"> Moha</a>
        </footer>
      </div>
    </div>
    <script src="script.js"></script>

    <?php else: ?>
        
        <p><a href="login.php">Login</a> or <a href="register.html">Register</a></p>
        
    <?php endif; ?>
    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    