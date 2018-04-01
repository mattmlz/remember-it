<?php 
 include 'assets/includes/config.php';
 include 'assets/includes/login.php';

  // unset cookies
  if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- CSS & fonts -->
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono:400,700" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/reset.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <!-- FAVICONS -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="assets/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="assets/img/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="assets/img/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <title>Remember it!</title>
</head>
<body>
  <div class="introduction">
    <h1 class="logo">Remember it!</h1>
    <p class="description">Your new best to-do list.</p>
  </div>

  <div class="form">
    <form class="login-form" action="#" method="post">
      <input type="text" placeholder="E-mail adress" name="email">
      <input type="password" placeholder="Password" name="password">
      <button type="submit">login</button>
      <p class="message">Not registered? <a href="assets/pages/create_account.php">Create an account</a></p>
    </form>
  </div>

  <div class="messages">
    <?php foreach($successMessages as $message): ?>
      <p class="success_message"><?= $message ?></p>
    <?php endforeach ?>
    <?php foreach($errorMessages as $message): ?>
      <p class="error_message"><?= $message ?></p>
    <?php endforeach ?>
  </div>
  
</body>
</html>