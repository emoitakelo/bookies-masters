<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: index.php");
            exit;
        }
    }
    
    $is_invalid = true;
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

    <link rel="stylesheet" type="text/css" href="php-style.php" />
    <link rel="stylesheet" type="text/css" href="login-style.php" />
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
          <div class="loginbox">
    <h4>Login</h4>
    
    <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>
    
    <form method="post">
        <p>Email</p>
        <input type="email" name="email" id="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>"
        placeholder="Enter Email" />
        <p>Password</p>
        <input
          type="password"
          name="password"
          id="password"
          placeholder="Enter password"
        />
        <input type="submit" name="submit" value="Login " />
        
        <a href="register.html" class="log">Don't have an account?</a>
      </form>
      </div> 
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
</body>
</html>








