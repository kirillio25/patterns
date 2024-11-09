<?php

require_once __DIR__ . '/Document/Article.php';
require_once __DIR__ . '/Document/Report.php';
require_once __DIR__ . '/Renderer/HtmlRenderer.php';
require_once __DIR__ . '/Renderer/JsonRenderer.php';

// Рендеринг статьи в HTML
$htmlRenderer = new HtmlRenderer();
$article = new Article($htmlRenderer, "PHP Patterns", "Learn the Bridge pattern in PHP!");
echo $article->render();

// Рендеринг отчёта в JSON
$jsonRenderer = new JsonRenderer();
$report = new Report($jsonRenderer, "Monthly Report", ['Revenue' => '$5000', 'Expenses' => '$2000'], '2024-11-09');
echo $report->render();
