<?php 
  include '../includes/config.php';
  include '../includes/handle_account_creating.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- CSS & fonts -->
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono:400,700" rel="stylesheet">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/main.css">
  <!-- FAVICONS -->
  <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">
  <link rel="manifest" href="../img/favicon/site.webmanifest">
  <link rel="mask-icon" href="../img/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="../img/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="../img/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <title>Remember it!</title>
</head>
<body>
  <div class="introduction">
    <h1 class="logo">Remember it!</h1>
    <p class="description">Create an account and start using right now.</p>
  </div>

  <div class="form">
    <form action="#" method="post" class="login-form">
      <input type="text" placeholder="First name" name="first-name" value="<?= $_POST['first-name'] ?>">
      <input type="text" placeholder="Last name" name="last-name" value="<?= $_POST['last-name'] ?>">
      <input type="text" placeholder="E-mail adress" name="e-mail" value="<?= $_POST['e-mail'] ?>">
      <input type="password" placeholder="Password" name="password" value="<?= $_POST['password'] ?>">
      <button type="submit">Create</button>
    </form>
  </div>

  <div class="messages">
    <?php foreach($errorMessages as $message): ?>
      <p class="error_message"><?= $message ?></p>
    <?php endforeach ?>
    <?php foreach($successMessages as $message): ?>
      <p class="success_message"><?= $message ?> <a href="../../index.php">Back home to log-in ?</a> </p>
    <?php endforeach ?>
  </div>
  
</body>
</html>