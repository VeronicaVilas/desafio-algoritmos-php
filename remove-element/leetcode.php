<?php
    class Solution {
        function removeElement(&$nums, $val) {
            $k = 0;

            for ($i = 0; $i < count($nums); $i++) {
                if ($nums[$i] !=$val) {
                    $nums[$k] = $nums[$i];
                    $k++;
                }
            }

            return $k;
        }
    }

    $nums = [0, 1, 2, 2, 3, 0, 4, 2];
    $val = 2;

    $solution = new Solution();
    $k = $solution->removeElement($nums, $val);
    echo "A função retorna k = $k, com os primeiros elementos de nums contendo [" . implode(",", array_slice($nums, 0, $k)) . "]\n";
?>