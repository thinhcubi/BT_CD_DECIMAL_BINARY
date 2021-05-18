<?php


class Stack
{
    public array $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function push($index)
    {

        $i  = 0;
        while ($index>1){
            $index1 = $index % 2;
            $index2 = $index / 2;
            $index = $index2;
            array_unshift($this->stack, $index1);
            $i++;
        }
      return $this->stack;
    }

    public function pop()
    {
        array_shift($this->stack);
    }

    public function get(): array
    {
        return $this->stack;
    }
}