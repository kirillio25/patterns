<?php

abstract class Document
{
    protected $renderer;

    public function __construct($renderer)
    {
        $this->renderer = $renderer;
    }

    abstract public function render(): string;
}
