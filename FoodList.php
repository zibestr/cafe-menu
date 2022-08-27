<?php

namespace food;

class DishesList
{
    public $dishes = array();

    function __construct($database)
    {
        $this->dishes = $this->getDishesList($database);
    }

    private function getDishesList($database): array
    {
        return array();
    }

}