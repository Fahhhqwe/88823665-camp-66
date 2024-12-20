<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_02</title>
    <link rel="stylesheet" href="mystyle_02.css">
</head>

<body>
    <h1>1-100 เช็คเลขคู่และเลขคี่</h1>
    <div class="wrapper">
    <table> <!-- สร้างตาราง -->
        <tr>
            <th>เลข</th> <!-- หัวข้อคอลัมน์ -->
            <th>ประเภท</th> <!-- หัวข้อคอลัมน์ -->
        </tr>
        <?php
        for ($i = 1; $i <= 100; $i++) {
            echo "<tr>"; //สร้างแถว
            echo "<td>$i</td>"; //ใส่ข้อมูลในช่อง ใส่เลขในคอลัมน์เลข
            echo "<td>" . ($i % 2 == 0 ? "เลขคู่" : "เลขคี่") . "</td>"; //ใส่ข้อมูลในช่อง ใส่ประเภทของเลขว่าเป็นเลขคู่หรือคี่ในคอลัมน์ประเภท
            echo "</tr>"; //ปิดแถว
            echo "<br>";
        }
        ?>
    </table>  <!-- ปิดตาราง -->
    </div>
</body>
</html>