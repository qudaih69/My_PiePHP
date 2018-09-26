<?php
namespace Controller;

class TagController extends \Core\Controller {

      public function indexAction() {
        $this->render('index');
        $test = new \Model\TagModel(null);
        $test->findRelation();
    }
}