<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two Sum</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Two Sum</h1>
    </header>
    <?php
        $nums = isset($_GET['nums']) ? explode(',', $_GET['nums']) : [];
       $target = isset($_GET['target']) ? (int)$_GET['target'] : 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nums">Digite um conjunto de números: <span style="font-size: 0.7em;">(separados por vírgula)</span></label>
            <input type="text" name="nums" id="nums" value="<?=implode(',', $nums)?>" required>
            <label for="target">Qual número deseja encontrar a soma?</label>
            <input type="number" name="target" id="target" value="<?=$target?>" required>
            <input type="submit" value="Remover elemento(s)">
        </form>
    </main>
    <?php
        class Solution {
            function twoSum($nums, $target) {
                $map = []; 
    
                for ($index = 0; $index < count($nums); $index++) {
                    $complement = $target - $nums[$index];
    
                    if (array_key_exists($complement, $map)) {
                        return [
                            'indices' => [$map[$complement], $index],
                            'numbers' => [$nums[$map[$complement]], $nums[$index]]
                        ];
                    }
    
                    $map[$nums[$index]] = $index;
                }
    
                return [];
            }
        }

        $solution = new Solution();
        $result = $solution->twoSum($nums, $target);
    ?>
    <section>
        <h3>Resultado</h3>
        <?php if (!empty($result)): ?>
            <p>Dentro do array [<?=implode(',', $nums)?>], os índices [<?=implode(",", $result['indices'])?>], correspondentes aos números [<?=implode(",", $result['numbers'])?>], somam um total de <strong><?=$target?></strong>.</p>
        <?php else: ?>
            <p>Nenhum par de números encontrado que soma <?=$target?>.</p>
        <?php endif; ?>
    </section>
</body>
</html>