<?php

/**
 * Class that represents a single Post object, with all its useful info.
 *
 */
class Post{
    public $dateTime;
    public $title;
    public $author;
    public $image;
    public $content;
    public $category;

    /**
     * Constructor for a new Post object.
     *
     * @param DateTime $dateTime The post's date.
     * @param String $title The post's title.
     * @param User $author The post's author.
     * @param String $image The post's image.
     * @param String $content The post's main content.
     * @param Category $category The post's main content.
     */
    function __construct(  DateTime $dateTime, String $title, User $author, String $image,  String $content, Category $category){
        $this->dateTime = $dateTime;
        $this->title = $title;
        $this->author = $author;
        $this->image = $image;
        $this->content = $content;
        $this->category = $category;
    }

    /**
     * Function that generates an return a brief overview of the post's content.
     *
     * @return String a brief post's overview.
     */
    public function getSynopsis(Int $length){
        return substr($this->content, 0, $length);
    }
}