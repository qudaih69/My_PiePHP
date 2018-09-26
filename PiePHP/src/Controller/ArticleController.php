<?php
namespace Controller;

class ArticleController extends \Core\Controller {

      public function indexAction() {
        $this->render('index');
        $test = new \Model\ArticleModel(null);
        $test->findRelation();
    }
}