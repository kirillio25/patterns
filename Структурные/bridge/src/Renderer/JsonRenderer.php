<?php

require_once 'Renderer.php';

class JsonRenderer implements Renderer
{
    public function render(array $data): string
    {
        return json_encode($data, JSON_PRETTY_PRINT);
    }
}
