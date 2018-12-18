<?php

namespace App\Objects;
class ReminderObj
{
    public $id;
    public $title;
    public $body;

    function __construct($title, $body)
    {
        $this->title = (!empty($title) ? $title : 'standard title');
        $this->body = (!empty($body) ? $body : 'standard body');
    }
}
