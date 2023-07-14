<?php

/**
 * User class for each active user in our application.
 */
class User{
    public $username;
    public $email;
    public $image;

    /**
     * Creates a new instance of a User.
     *
     * @param String $username The user's username.
     * @param String $email The user's email.
     * @param String $image The user's profile image url.
     */
    function __construct( String $username,  String $email, String $image){
        $this->username = $username;
        $this->email = $email;
        $this->image = $image;
    }
}