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
echo "<form action=" . $_SERVER['PHP_SELF'] . " method='post'>
<input type='submit' name='clear' value='Очистити базу даних'><br>
</form>";
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
}

//визначення переможця
if (isset($_POST['winner'])) {
    $randNum = rand(0, count($students) - 1);
    foreach ($students as $key => $value) {
        echo "Переможець: $value->name";
        break;
    }
}

//очищення бази даних 
if (isset($_POST['clear'])) {
    $clearJSONfile = fopen("students.json", "w+");
    fwrite($clearJSONfile, "[]");
    fclose($clearJSONfile);
}
