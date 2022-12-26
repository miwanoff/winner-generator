<?php
echo "<h1>Winner generator</h1>";
echo "<form action=" . $_SERVER['PHP_SELF'] . " method='post'>
Введіть ім'я: <input type='text' name='name'><br>
Введіть прізвище: <input type='text' name='surname'><br>
Введіть посилання на Інстаграм: <input type='text' name='link_instagram'><br>
Введіть посилання на роботу в Figma: <input type='text' name='link_figma'><br>
<input type='submit' name='submit' value='Підтвердити'><br>
</form>";
// if (isset($_POST['submit'])) {
//     echo $_POST['name'];
// }
