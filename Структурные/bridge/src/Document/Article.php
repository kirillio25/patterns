<?php

require_once 'Document.php';

class Article extends Document
{
    private $title;
    private $content;

    public function __construct($renderer, $title, $content)
    {
        parent::__construct($renderer);
        $this->title = $title;
        $this->content = $content;
    }

    public function render(): string
    {
        return $this->renderer->render([
            'type' => 'article',
            'title' => $this->title,
            'content' => $this->content,
        ]);
    }
}
