<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        h3 {
            color: green;
            margin-left: 20px;
        }

        input {
            width: 300px !important;
        }

        form {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container-fluid p-4 bg-primary text-white text-center">
        <h1>Winner generator</h1>
    </div>
    <div class="container-fluid p-4">
    <form action=<?= $_SERVER['PHP_SELF'] ?> method='post'>
        <div class=" mb-3 mt-3">
        Введіть ім'я: <input type='text' class="form-control" name='name'>
    </div>
    <div class="mb-3">
        Введіть прізвище: <input type='text' class="form-control" name='surname'>
    </div>
    <div class="mb-3">
        Введіть посилання на Інстаграм: <input type='text' class="form-control" name='link_instagram'>
    </div>
    <div class="mb-3">
        Введіть посилання на роботу в Figma: <input type='text' class="form-control" name='link_figma'>
    </div>
    <div class="mb-3">
        Введіть нік в Інстаграмі: <input type='text' class="form-control" name='nickname'>
    </div>
    <input type='submit' name='submit' class="btn btn-primary" value='Підтвердити'>
    <!-- <input type='submit' name='winner' class="btn btn-primary" value='Знайти переможця'><br> -->
    </form>
    <form action=<?= $_SERVER['PHP_SELF'] ?> method='post'>
        <input type='submit' name='clear' class="btn btn-primary" value='Очистити базу даних'>
    </form>
    <form action=<?= $_SERVER['PHP_SELF'] ?> method='post'>
        <input type='submit' name='main' class="btn btn-primary" value='Перейти до головної сторінки'>
    </form>
    </div>
    <?php
    $json_file = fopen("students.json", "a+");
    $content_json_file = fread($json_file, filesize("students.json"));
    $students = json_decode($content_json_file);
    // print_r($students);

    //занесення учасників до бази даних
    if (isset($_POST['submit'])) {
        $studentsNewArr = $students;
        $studentsNewArr[count($students)] = [
            'name' => $_POST['name'],
            'surname' => $_POST['surname'],
            'link_instagram' => $_POST['link_instagram'],
            'link_figma' => $_POST['link_figma'],
            'nickname' => $_POST['nickname']
        ];
        $studentsNewArr = json_encode($studentsNewArr, JSON_UNESCAPED_UNICODE);
        $json_fileClear = fopen("students.json", "w+");
        fwrite($json_fileClear, $studentsNewArr);
        // print_r($studentsNewArr);
        fclose($json_fileClear);
        echo "<h3>Дані занесено успішно</h3>";
    }

    // //визначення переможця
    // if (isset($_POST['winner'])) {
    //     $randNum = rand(0, count($students) - 1);
    //     foreach ($students as $key => $value) {
    //         echo "Переможець: $value->name";
    //         break;
    //     }
    // }

    //очищення бази даних 
    if (isset($_POST['clear'])) {
        $clearJSONfile = fopen("students.json", "w+");
        fwrite($clearJSONfile, "[]");
        fclose($clearJSONfile);
    }

    //переадресація користувача на головну сторінку
    if (isset($_POST['main'])) {
        header("Location: index.html");
        ob_end_flush();
    }
    ?>
</body>

</html>