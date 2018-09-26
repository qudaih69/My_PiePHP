<?php
namespace Controller;

class CommentController extends \Core\Controller {

      public function indexAction() {
        $this->render('index');
        $test = new \Model\CommentModel(null);
        $test->findRelation();
    }
}