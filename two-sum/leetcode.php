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
    $nums1 = [2, 7, 11, 15];
    $target1 = 9;
    $result1 = $solution->twoSum($nums1, $target1);
    echo "Output: indices = [" . implode(",", $result1['indices']) . "], numbers = [" . implode(",", $result1['numbers']) . "]\n";
?>

