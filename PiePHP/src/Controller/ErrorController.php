<?php

namespace Controller;

class ErrorController extends \Core\Controller {

      public function errorAction() {
        $this->render('404');
    }
}