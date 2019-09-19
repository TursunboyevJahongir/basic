<?php

namespace app\controllers;



class HelloController extends AppController
{
    public $layout='sitelayout';
    public function actionIndex($id=null)
    {
        $hi="hi";
        $this->view->title='Home';
//        return $this->render('index',['hello'=>$hi]);
        return $this->render('index',compact('hi','id'));
    }
    public function actionCategories()
    {
        $this->view->title='Categories';
//        return $this->render('index',['hello'=>$hi]);
        return $this->render('categories',compact('hi','id'));
    }
    public function actionAjax()
    {
        $this->view->title='Ajax';
        $this->view->registerCsrfMetaTags(['name'=>'keywords','content'=>'Ajax...']);
//        return $this->render('index',['hello'=>$hi]);
        return $this->render('ajax',compact('hi','id'));
    }
    public function actionShow()
    {

//        return $this->render('index',['hello'=>$hi]);
        return $this->renderPartial('show',compact('hi','id'));
//        return $this->render('show',compact('hi','id'));
    }

}
