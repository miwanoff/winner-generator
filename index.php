<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    h3 {
      margin: 10px;
      color: blue;
    }

    form {
      margin: 10px;
    }
  </style>
</head>

<body>
  <div class="container-fluid p-4 bg-primary text-white text-center">
    <h1>Winner generator</h1>
  </div>
  <form action=<?= $_SERVER['PHP_SELF'] ?> method="post">
    <div class="btn-group container-fluid p-4">
      <input type='submit' name='winner' class="btn btn-primary" value='Знайти переможця'><br>
      <input type='submit' name='db' class="btn btn-primary" value='Занести дані до бази даних'><br>
    </div>
  </form>
  <?php
  $json_file = fopen("students.json", "a+");
  $content_json_file = fread($json_file, filesize("students.json"));
  $students = json_decode($content_json_file);
  //визначення переможця
  if (isset($_POST['winner'])) {
    $randNum = rand(0, count($students) - 1);
    foreach ($students as $key => $value) {
      if ($key == $randNum) {
        echo "<h3>Переможець: " . $value->name . "</h3>";
        break;
      }
    }
  }

  //переадресація користувача до сторінки admin-panel.php
  if (isset($_POST['db'])) {
    header("Location: admin-panel.php");
    ob_end_flush();
  }
  ?>

  <div id="participants"></div>
  <script src="./loader.js"></script>
</body>

</html>