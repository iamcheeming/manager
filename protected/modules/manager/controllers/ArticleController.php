<?php
class ArticleController extends PController
{
    public function actionIndex()
    {
        $request = Yii::app()->request;
        $pageNo = $request->getQuery('page', 1);
        $pageSize = 20;
        $pagination = Helper::pagination(1000, $pageNo, $pageSize);
        $this->render('index', array('pagination' => $pagination));
    }

    public function actionAdd()
    {
        $this->render('article');
    }

    public function actionEdit()
    {
        $this->render('article');
    }

    public function actionDel()
    {}
}