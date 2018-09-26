<?php

namespace Model;

class TagModel extends \Core\Entity {

    public static $relations = ['has many article'];

    public function __construct($params) {
        parent::__construct($params);
    } 
}