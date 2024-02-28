<?php
namespace Jacob\WebtCoreViewsInMvc;

class Hotel {
    public string $name;
    public string $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }
}