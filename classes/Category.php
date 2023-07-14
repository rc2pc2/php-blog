<?php

/**
 * Category for each post of our web application.
 */
class Category{
    public $name;
    public $image;

    /**
     * Creates a new category, given a name and an image url.
     *
     * @param String $name The category's name.
     * @param String $image The category's image url.
     */
    function __construct( String $name, String $image){
        $this->name = $name;
        $this->image = $image;
    }
}