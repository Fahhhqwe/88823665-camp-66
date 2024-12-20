<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css&quot; rel=" stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js&quot; integrity=" sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="mystyle_03.css">
</head>

<body>
    <div class="wrapper">
        <h1>ตารางสูตรคูณ</h1>
        <form action="" method="get">
            <div class="form-check">
                <label for="input-number">Times Table</label><br>
                <input type="number" name="timesTable" id="input-number" placeholder="กรุณากรอกตัวเลข" required>
                <button type="submit">submit</button>
            </div>
        </form>

        <div class="timesTable">
            <?php
            if (isset($_GET['timesTable']) && $_GET['timesTable'] !== '') {
                $input = intval($_GET['timesTable']);
                echo "<table>";
                for ($i = 1; $i <= 12; $i++) {
                    echo "<tr>";
                    echo "<td>" . $input . " x " . $i . "</td>";
                    echo "<td> = </td>";
                    echo "<td>" . $input * $i . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
            ?>
        </div>
    </div>

</body>

</html>