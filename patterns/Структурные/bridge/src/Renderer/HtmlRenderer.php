<?php

namespace Структурные\bridge\src\Renderer;
use Renderer;

require_once 'Renderer.php';

class HtmlRenderer implements Renderer
{
    public function render(array $data): string
    {
        if ($data['type'] === 'article') {
            return "<h1>{$data['title']}</h1><p>{$data['content']}</p>";
        } elseif ($data['type'] === 'report') {
            $tableRows = '';
            foreach ($data['data'] as $key => $value) {
                $tableRows .= "<tr><td>{$key}</td><td>{$value}</td></tr>";
            }
            return "<h1>{$data['name']}</h1><table>{$tableRows}</table><p>Date: {$data['date']}</p>";
        }
        return '';
    }
}
