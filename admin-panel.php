<?php
echo "<h1>Winner generator</h1>";
echo "<form action=" . $_SERVER['PHP_SELF'] . " method='post'>
Введіть ім'я: <input type='text' name='name'><br>
Введіть прізвище: <input type='text' name='surname'><br>
Введіть посилання на Інстаграм: <input type='text' name='link_instagram'><br>
Введіть посилання на роботу в Figma: <input type='text' name='link_figma'><br>
Введіть нік в Інстаграмі: <input type='text' name='nickname'><br>
<input type='submit' name='submit' value='Підтвердити'><br>
<input type='submit' name='winner' value='Знайти переможця'><br><br>
Введіть назву для JSON-файлу без «.json»: <input type='text' name='fileJson'><br>
<input type='submit' name='submitFile' value='Створити'><br>
</form><br>";
// $students = [];
// $filename = "ffht";
if (isset($_POST['submitFile'])) {
    $filename = $_POST['fileJson'];
    $json_file = fopen("$filename.json", "a+");
    fwrite($json_file, "[]");
    $content_json_file = fread($json_file, filesize("$filename.json"));
    $students = json_decode($content_json_file);
}

// if (filesize("$filename.json") == 0) {
//     fwrite($json_file, "[]");
// }
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
    $json_fileClear = fopen("$filename.json", "w+");
    fwrite($json_fileClear, $studentsNewArr);
    // print_r($studentsNewArr);
    fclose($json_fileClear);
}
if (isset($_POST['winner'])) {
    $randNum = rand(0, count($students) - 1);
    foreach ($students as $key => $value) {
        if ($value->name == $_POST['name'] && $value->surname == $_POST['surname'] && $value->link_instagram == $_POST['link_instagram'] && $value->link_figma == $_POST['link_figma'] && $value->nickname == $_POST['nickname']) {
            if ($key == $randNum) {
                echo "Переможець: $value->name";
                break;
            }
        } else {
            echo "У базі даних немає такого учасника!";
            break;
        }
    }
}
