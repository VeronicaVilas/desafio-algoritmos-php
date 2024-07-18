<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Element</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Remove Element</h1>
    </header>
    <?php
        $nums = isset($_GET['nums']) ? explode(',', $_GET['nums']) : [];
        $val = isset($_GET['val']) ? (int) $_GET['val'] : 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nums">Digite um conjunto de números: <span style="font-size: 0.7em;">(separados por vírgula)</span></label>
            <input type="text" name="nums" id="nums" value="<?=implode(',', $nums)?>" required>
            <label for="val">Qual número deseja remover?</label>
            <input type="number" name="val" id="val" value="<?=$val?>" required>
            <input type="submit" value="Remover elemento(s)">
        </form>
    </main>
    <?php
        class Solution {
            function removeElement(&$nums, $val) {
                $k = 0;
    
                for ($index = 0; $index < count($nums); $index++) {
                    if ($nums[$index] != $val) {
                        $nums[$k] = $nums[$index];
                        $k++;
                    }
                }
    
                return $k;
            }
        }

        $solution = new Solution();
        $k = $solution->removeElement($nums, $val);
    ?>
    <section>
        <h3>Resultado</h3>
        <p>A função retorna k = <?=$k?>, com os primeiros elementos de nums contendo [<?=implode(",", array_slice($nums, 0, $k))?>].</p>
    </section>
</body>
</html>