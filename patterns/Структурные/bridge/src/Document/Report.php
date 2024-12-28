<?php

namespace Структурные\bridge\src\Document;
use Document;

require_once 'Document.php';

class Report extends Document
{
    private $name;
    private $data;
    private $date;

    public function __construct($renderer, $name, $data, $date)
    {
        parent::__construct($renderer);
        $this->name = $name;
        $this->data = $data;
        $this->date = $date;
    }

    public function render(): string
    {
        return $this->renderer->render([
            'type' => 'report',
            'name' => $this->name,
            'data' => $this->data,
            'date' => $this->date,
        ]);
    }
}
