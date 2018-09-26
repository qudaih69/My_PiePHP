<?php

namespace Model;

class CommentModel extends \Core\Entity {

    public static $relations = ['has one article'];

    public function __construct($params) {
        parent::__construct($params);
    } 
}