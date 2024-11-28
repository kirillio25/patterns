<?php

require_once 'TreeType.php';

class Tree
{
    private int $x;
    private int $y;
    private int $z;
    private TreeType $type;

    public function __construct(int $x, int $y, int $z, TreeType $type)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
        $this->type = $type;
    }

    public function display(): void
    {
        $this->type->display($this->x, $this->y, $this->z);
    }
}
