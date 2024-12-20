<?php
$number = 2;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="mystyle_01.css">
</head>

<body>
    <h1>สูตรคูณแม่ 2</h1>
    <div class="wrapper">
        <?php
        echo "<table>"; //เปิดตาราง+เว้นระยะห่างระหว่างช่องให้เท่ากัน+จัดให้ข้อความอยู่ตรงกลาง
        for ($i = 1; $i <= 12; $i++) {
            echo "<tr>";
            echo "<td>" . $number . " x " . $i . "</td>";
            echo "<td>=</td>";
            echo "<td>" . ($number * $i) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>
</body>
</html>