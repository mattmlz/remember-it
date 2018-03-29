<?php
  include '../includes/config.php';
  include '../includes/login.php';

  $query = $pdo->query('SELECT first_name from USERS');
  $users = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- CSS & fonts -->
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/tasks.css">
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
  <div class="container">
    <div class="username">Welcome <?php foreach ($_SESSION as $session) {echo $session;} ?>!</div>
    <div class="tasks">
      <table>
        <tr>
          <th>What you have to do:</th>
          <th>State</th>
        </tr>
        <tr>
          <td>Wash my appartment</td>
          <td class="state"></td>
        </tr>
      </table>
    </div>
  </div>

</body>
</html>