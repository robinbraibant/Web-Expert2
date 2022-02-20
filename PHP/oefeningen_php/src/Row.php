<?php

class Row
{
    public function createRow(int $min, int $max): array
    {
        $numbers = [];
        if ($min < $max) {
            $index = $min;
            while ($index <= $max) {
                $numbers[] = $index;
                $index++;
            }
        }
        return $numbers;
    }

    public function createRowStep(int $min, int $max, int $step = 1)
    {
        $numbers = [];
        $index = $min;
        if ($min < $max) {
            while ($index <= $max) {
                $numbers[] = $index;
                $index += $step;
            }
        } else {
            while ($index >= $max) {
                $numbers[] = $index;
                $index += $step;
            }
        }
        return $numbers;
    }
}