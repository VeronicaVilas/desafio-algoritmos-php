<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roman to Integer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Roman to Integer</h1>
    </header>
    <?php
        $s = $_GET['$s'] ?? 'I';
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="$s">Digite um número romano:</label>
            <input type="text" name="$s" id="$s" value="<?=$s?>" required>
            <input type="submit" value="Converter">
        </form>
    </main>
    <?php
        class Solution {
            function romanToInt($s) {
                $romanMap = [
                    'I' => 1,
                    'V' => 5,
                    'X' => 10,
                    'L' => 50,
                    'C' => 100,
                    'D' => 500,
                    'M' => 1000,
                ];

                $total = 0;

                $s = str_replace(["IV", "IX", "XL", "XC", "CD", "CM"], ["IIII", "VIIII", "XXXX", "LXXXX", "CCCC", "DCCCC"], $s);

                for ($index = 0; $index < strlen($s); $index++) {
                    $char = $s[$index];
                    $total += $romanMap[$char];
                }

                return $total;
            }
        }

        $solution = new Solution();
        $total = $solution->romanToInt($s);
    ?>
    <section>
        <h3>Resultado</h3>
        <p>O número romano <?=$s?> equivale à <?=$total?>.</p>
    </section>
</body>
</html>