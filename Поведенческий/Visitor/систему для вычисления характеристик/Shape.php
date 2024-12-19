<?php

interface Shape
{
    public function accept(Visitor $visitor): void;
}
