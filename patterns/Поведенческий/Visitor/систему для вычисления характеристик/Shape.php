<?php

namespace Поведенческий\Visitor\систему use Visitor;

для вычисления характеристик;
interface Shape
{
    public function accept(Visitor $visitor): void;
}
