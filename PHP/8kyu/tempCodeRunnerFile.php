<?php
function square_sum($numbers) : int {
    $sum = 0;
    foreach ($numbers as $number) {
      $sum += $number ** 2;
    }
    return $sum;
  }

  square_sum([1,2], 5);