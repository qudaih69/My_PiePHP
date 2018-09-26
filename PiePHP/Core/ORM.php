<?php

namespace Core;

class ORM{
    
    private $bdd;
    
    public function __construct() {
        $this->bdd = Database::connect();
    }

    public function create($table, $fields) {
        
        $sql = "INSERT INTO $table (";
        
        foreach ($fields as $key => $value) {
            $sql .= "$key, ";
        }
        
        $sql = substr($sql, 0, -2);
        
        $sql .= ") VALUES (";
        
        foreach ($fields as $key => $value) {
            $sql .= ":$key, ";
        }
        
        $sql = substr($sql, 0, -2);
        
        $sql .= ")";

        // echo $sql;
        
        $req = $this->bdd->prepare($sql);
        
        foreach ($fields as $key => $value) {
            if (is_numeric($value)) {
                $req->bindValue(":$key", $value, \PDO::PARAM_INT);  
            } else {
                $req->bindValue(":$key", $value, \PDO::PARAM_STR);
            }
        }
        
        $req->execute();
        
        $req->closeCursor();
        
        return $this->bdd->lastInsertId();
    }
    
    public function read($table, $id) {
        $sql =
        "SELECT 
        *
        FROM $table where id = $id";
        
        $req = $this->bdd->prepare($sql);
        
        $req->execute();
        
        $result = $req->fetch(\PDO::FETCH_ASSOC);
        
        $req->closeCursor();
        
        return $result;
    }
    
    public function update($table, $id, $fields) {
        
        $sql = "UPDATE $table SET ";
        
        foreach ($fields as $key => $value) {
            $sql .= "$key = :$key, ";
        }
        
        $sql = substr($sql, 0, -2);
        
        $sql .= " WHERE id = $id";
        
        $req = $this->bdd->prepare($sql);
        
        foreach ($fields as $key => $value) {
            if (is_numeric($value)) {
                $req->bindValue(":$key", $value, \PDO::PARAM_INT);  
            } else {
                $req->bindValue(":$key", $value, \PDO::PARAM_STR);
            }
        }
        
        $return =  $req->execute();
        
        $req->closeCursor();   
        
        return $return;
    }
    
    public function delete($table, $id) {
        
        $sql =
        "DELETE FROM $table
        WHERE id = $id";
        
        $req = $this->bdd->prepare($sql);
        
        $return = $req->execute();
        
        $req->closeCursor();
        
        return $return;
    }
    
    public function read_All($table) {
        
        $sql =
        "SELECT 
        *
        FROM $table";
        
        $req = $this->bdd->prepare($sql);
        
        $req->execute();
        
        $result = $req->fetchall(\PDO::FETCH_ASSOC);
        
        $req->closeCursor();
        
        return $result;
    }
    
    public function find($table, $params = array('WHERE' => '1', 'ORDER BY' => 'id ASC')) {
        
        $sql = "SELECT * FROM $table ";
        
        foreach ($params as $key => $value) {
            $sql .= $key . ' ' . $value . ' ';
        }
        
        $sql = trim($sql);
        
        // echo $sql;
        // echo '<br/>';
        
        $req = $this->bdd->prepare($sql);
        
        $req->execute();
        
        $result = $req->fetchall(\PDO::FETCH_ASSOC);
        
        $req->closeCursor();

        return $result;
    }

    public function findRelation($table, $params = array('WHERE' => '1', 'ORDER BY' => 'id ASC')) {


        $getClass = '\\Model\\'.$table.'Model';

        //model du resultat
        //check if relations est rempli
        // si oui , appelez find_relations
        // $model

        $relations = $getClass::$relations;

        var_dump($relations);

        $relations = explode(' ', $relations[0]);

        $oneTo = $relations[1];


        // $sql = "SELECT * FROM $table ";
        
        // foreach ($params as $key => $value) {
        //     $sql .= $key . ' ' . $value . ' ';
        // }
        
        // $sql = trim($sql);
        
        // // echo $sql;
        // // echo '<br/>';
        
        // $req = $this->bdd->prepare($sql);
        
        // $req->execute();
        
        // $result = $req->fetchall(\PDO::FETCH_ASSOC);
        
        // $req->closeCursor();

        // return $result;
    }

}