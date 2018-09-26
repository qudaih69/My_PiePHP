<?php

namespace Core;

class Entity  {

    public static $relations = [];
    
    protected $ORM;  
    protected $params;
    protected $table;
    
    public function __construct($params = null) {

        $this->ORM = new \Core\ORM();

        $this->params = $params;

        $this->table = get_class($this);
        $this->table = substr(str_replace('Model', '', $this->table), 1);
        // var_dump($this->table);
    }
    
    public function save() {
        if(key_exists('id', $this->params)) {
            $return = $this->ORM->update($this->table, $this->params['id'], $this->params);
            return $return;
        } else {
            $return = $this->ORM->create($this->table, $this->params);
            return $return;
        }
    }

    public function find() {
        if(is_int($this->params)) {
            $return = $this->ORM->read($this->table, $this->params);
            return $return;
        } elseif(is_array($this->params)) {
            $return = $this->ORM->find($this->table, $this->params);
            return $return;
        } else {
            $return = $this->ORM->read_all($this->table, $this->params);
            return $return;
        }
    }

    public function findRelation() {
        $return = $this->ORM->findRelation($this->table, $this->params);
    }
    
    public function delete() {
        $return = $this->ORM->delete($this->table, $this->params);
        return $return;
    }    
}