<?php

namespace Model;

class ArticleModel extends \Core\Entity {

    public static $relations = ["has many comment", "has many tags"];

    public function __construct($params) {
        parent::__construct($params);
    } 
}