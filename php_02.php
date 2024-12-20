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
        <table>
            <?php
             for ($i = 1; $i <= 50; $i++) {
                echo "<tr>";
                if ($i % 2 == 0) {
                    echo "<td>" . $i . " = เลขคู่";
                } else {
                    echo "<td>" . $i . " = เลขคี่";
                }
                echo "<br>";
                echo "<br>";
                echo "</tr>";
            }
            ?>
        </table>
        <br>
        <table>
            <?php
            for ($i = 51; $i <= 100; $i++) {
                echo "<tr>";
                if ($i % 2 == 0) {
                    echo "<td>" . $i . " = เลขคู่";
                } else {
                    echo "<td>" . $i . " = เลขคี่";
                }
                echo "<br>";
                echo "<br>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>