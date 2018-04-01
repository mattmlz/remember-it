<?php
  include '../includes/config.php';
  include '../includes/login.php';

  $query = $pdo->query('SELECT * from USERS');
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
    <div class="username">Welcome <?= $_COOKIE["firstname"] ?>!</div>
    <div class="tasks">
      <table>
        <tr>
          <th>What you have to do:</th>
          <th>State</th>
        </tr>

        <tr>
          <td>Wash my appartment</td>
          <td class="state">
            <form action="#" method="post" class="task_state">
              <select name="state">
                <option>Choose the state of the task!</option>
                <option value="todo">To do</option>
                <option value="inprogress">In progress</option>
                <option value="done">Done</option>
              </select>
              <button type="submit">Change state</button>
            </form>
          </td>
        </tr>

        <tr>
          <td colspan="2" class="add_task">
            <p class="title">Add a task:</p>
            <form action="#" method="post">
              <textarea name="task" cols="100" rows="3"></textarea>
              <button type="submit">Add</button>
            </form>
          </td>
        </tr>

      </table>
    </div>
  </div>

</body>
</html>