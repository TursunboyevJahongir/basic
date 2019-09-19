<?php

namespace app\controllers;


class StartupController extends \yii\web\Controller
{
    public $layout= 'startup';
    public function actionIndex()
    {
        $this->view->title='Home';
        return $this->render('index');
        
    }

    public function actionAbout()
    {
        $this->view->title='About';
        return $this->render('about');
    }

    public function actionContact()
    {
        $this->view->title='Contact';
        return $this->render('contact');
    }

    public function actionFaq()
    {
        $this->view->title='Faq';
        return $this->render('faq');
    }

    public function action404()
    {
        $this->view->title='Faq';
        return $this->render('404');
    }


}
