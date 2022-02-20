<?php

class Triangle
{
    private int $lines;
    private string $input;

    public function __construct(int $lines, string $input)
    {
        $this->setLines($lines);
        if (!$input || strlen($input) > 1) {
            $this->input = "#";
        } else {
            $this->input = $input;
        }
    }

    public function rightAngledTriangle(): string
    {
        $symbol = $this->input;
        $result = "";
        for ($i = 0; $i < $this->lines; $i++) {
            $result = $result . $symbol . "\n";
            $symbol = $symbol . $this->input;
        }
        return $result;
    }

    public function equilateralTriangle(): string
    {
        $symbol = $this->input;
        $result = "";
        for ($i = 0; $i < $this->lines; $i++) {
            for ($j = 0; $j < $this->lines - $i; $j++) {
                $result = $result . " ";
            }
            $result = $result . $symbol . "\n";
            $symbol = $symbol . $this->input . $this->input;;
        }
        return $result;
    }

    public function inverseRightAngledTriangle(): string
    {
        $symbol = $this->input;
        $result = "";
        for ($i = 0; $i < $this->lines; $i++) {
            for ($j = 0; $j < $this->lines - $i; $j++) {
                $result = $result . " ";
            }
            $result = $result . $symbol . "\n";
            $symbol = $symbol . $this->input;;
        }
        return $result;
    }

    public function intervalEquilateralTriangle(int $interval): string
    {
        $symbol = $this->input;
        $result = "";
        $index = 0;
        for ($i = 0; $i < $this->lines; $i++) {
            for ($j = 0; $j < $this->lines - $i; $j++) {
                $result = $result . " ";
            }
            for ($k = 0; $k < $i * 2 + 1; $k++) {
                if ($index % $interval === 0) {
                    $result = $result . "@";
                } else {
                    $result = $result . $this->input;
                }
                $index++;
            }
            $result = $result . "\n";
        }

        return $result;
    }

    private function setLines(int $lines): void
    {
        if ($lines == null || $lines <= 1) {
            $this->lines = 5;
        } else {
            $this->lines = $lines;
        }
    }
}