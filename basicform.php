<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP form</title>
</head>
<body>
<form method="POST" action="">
    <input type="text" name="tasks" required>
    <button type="submit">Enter</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tasks = trim($_POST['tasks']);
    if (!empty($tasks)) {
        file_put_contents('zadaci.txt', $tasks . PHP_EOL, FILE_APPEND);
    }
}
?>
<?php
  echo "<ul>";
    $tasks = file('zadaci.txt', FILE_IGNORE_NEW_LINES);
    foreach ($tasks as $t) {
        echo '<li>' . htmlspecialchars($t) . "</li>";
    }
echo "</ul>";
?>
</body>
</html>