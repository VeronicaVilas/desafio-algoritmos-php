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
    $result = $solution->romanToInt("MCMXCIV");
    echo $result;
?>