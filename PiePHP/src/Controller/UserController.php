<?php

namespace Controller;


class UserController extends \Core\Controller {
    
    public $params;
    
    public function __construct() {
        $Request = new \Core\Request;
        $this->params = $Request->getQueryParams();
    }
    
    public function indexAction() {
        $this->render('index');
    }
    
    public function addAction() {
        $this->render('add');
    }
    
    
    public function registerAction() {
        
        extract($this->params);
        
        if(!empty($this->params)) {
            
            if(!empty($email) && !empty($password)) {
                $userExist = new \Model\UserModel(array('WHERE' => "email = '$email'"));
                $returnFind = $userExist->find();
                if (empty($returnFind)) {
                    $add = new \Model\UserModel($this->params);
                    $save = $add->save();
                    if($save != 0) {
                        $this->render('login/login');
                        return $save;
                    } else {
                        $this->render('404');
                        return $save;
                    }         
                } else {
                    $this->render('register/exist_register');
                }
            } else {
                $this->render('register/error_register');
            }
            
        } else {
            $this->render('register/register');
        }
    }
    
    public function loginAction() {
        
        extract($this->params);
        
        if(!empty($this->params)) {
            if(!empty($email) && !empty($password)) {
                $userValid = new \Model\UserModel(array('WHERE' => "email = '$email' AND password = '$password'"));
                $returnFind =  $userValid->find();
                if(!empty($returnFind)) {
                    $userValid = new \Model\UserModel(array('WHERE' => "email = '$email' AND password = '$password'"));
                    $returnFind =  $userValid->find();

                    session_start();

                    $_SESSION['id'] = $returnFind[0]['id'];

                    $this->render('show', $returnFind);

                } else {
                    $this->render('login/error_login');
                }
            } else {
                $this->render('login/error_login');
            }
            
        } else {
            $this->render('login/login');
        }
    }
}