<?php

namespace Core;

class  Request{
    
    public function getQueryParams() {

        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            $params = $_POST;
        } else {
            $params =$_GET;
        }

        //$params = $_POST;

        if(empty($params)) {
            return $params;
        } else {

            foreach ($params as $key => $value) {
 
                if (ctype_digit($value)) {
                    $value = intval($value);
                    $params[$key] = $value;
                } else {
                    $value = htmlspecialchars($value);
                    $value = stripslashes($value);
                    $value = addcslashes($value, "%_'");
                    $value = trim($value);
                    $params[$key] = $value;
                }
            }
            return $params;
        }
    }
}
