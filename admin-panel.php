<?php
echo "<h1>Winner generator</h1>";
echo "<form action=" . $_SERVER['PHP_SELF'] . " method='post'>
Введіть ім'я: <input type='text' name='name'><br>
Введіть прізвище: <input type='text' name='surname'><br>
Введіть посилання на Інстаграм: <input type='text' name='link_instagram'><br>
Введіть посилання на роботу в Figma: <input type='text' name='link_figma'><br>
Введіть нік в Інстаграмі: <input type='text' name='nickname'><br>
<input type='submit' name='submit' value='Підтвердити'><br>
<input type='submit' name='winner' value='Знайти переможця'><br>
</form>";
$json_file = fopen("students.json", "a+");
$content_json_file = fread($json_file, filesize("students.json"));
$students = json_decode($content_json_file);
$name = $_POST['name'];
$surname = $_POST['surname'];
$link_instagram = $_POST['link_instagram'];
$link_figma = $_POST['link_figma'];
$nickname = $_POST['nickname'];
$lengthArr = count($students);
// print_r($students);
if (isset($_POST['submit'])) {
    $studentsNewArr = $students;
    $studentsNewArr[$lengthArr] = [
        'name' => $name,
        'surname' => $surname,
        'link_instagram' => $link_instagram,
        'link_figma' => $link_figma,
        'nickname' => $nickname
    ];
    $studentsNewArr = json_encode($studentsNewArr, JSON_UNESCAPED_UNICODE);
    $json_fileClear = fopen("students.json", "w+");
    fwrite($json_fileClear, $studentsNewArr);
    print_r($studentsNewArr);
    fclose($json_fileClear);
}
if (isset($_POST['winner'])) {
    $randNum = rand(0, $lengthArr - 1);
    foreach ($students as $key => $value) {
        if ($value->name == $name && $value->surname == $surname && $value->link_instagram == $link_instagram && $value->link_figma == $link_figma && $value->nickname == $nickname) {
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
