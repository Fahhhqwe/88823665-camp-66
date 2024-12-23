<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_04</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="mystyle_04.css">
</head>

<body>
    <h1>เช็คเลขคู่หรือเลขคี่</h1>
    <div class="wrapper">
        <form action="" method="get">
            <div class="form-check">
                <input type="number" name="num1" id="input-number1" placeholder="กรุณากรอกตัวเลขเริ่มต้น" required> <br>
                <label>ถึง</label> <br>
                <input type="number" name="num2" id="input-number2" placeholder="กรุณากรอกตัวเลขสิ้นสุด" required> <br>
                <button type="submit">submit</button>
            </div>
        </form>
        <div class="output">
            <table> <!-- สร้างตาราง -->
                <?php 
                    if (isset($_GET['num1']) && isset($_GET['num2']) && $_GET['num1'] !== '' && $_GET['num2'] !== ''){
                        $number1 = intval($_GET['num1']);
                        $number2 = intval($_GET['num2']);
                        if ($number1 <= $number2) {
                            for ($i = $number1; $i <= $number2; $i++) {
                                echo "<tr>";
                                echo "<td>$i</td>";
                                echo "<td>" . ($i % 2 == 0 ? "เลขคู่" : "เลขคี่") . "</td>";
                                echo "</tr>";
                            }
                        }
                    }
                ?>
            </table> <!-- ปิดตาราง -->
        </div>
    </div>
</body>
</html>