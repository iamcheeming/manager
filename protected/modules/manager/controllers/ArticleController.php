<?php
class ArticleController extends PController
{
    public function actionIndex()
    {
        $request = Yii::app()->request;
        $cid = $request->getQuery('cid');
        $category = Category::model()->findByPk($cid);
        if (!$category) {
            $this->redirect(Yii::app()->request->urlReferrer);
        }
        $pageNo = $request->getQuery('page', 1);
        $pageSize = 20;
        $rows = Article::model()->findAllByAttributes(array('category_id' => $cid),
            array('order' => 'sortnum desc', 'limit' => $pageSize, 'offset' => ($pageNo - 1) * $pageSize));
        $totalNum = Article::model()->countByAttributes(array('category_id' => $cid));
        $pagination = Helper::pagination($totalNum, $pageNo, $pageSize);
        $this->render('index', array('category' => $category, 'rows' => $rows, 'pagination' => $pagination));
    }

    public function actionAdd()
    {
        $request = Yii::app()->request;
        $cid = (int) $request->getQuery('cid');
        $category = Category::model()->findByPk($cid);
        if (!$category) {
            $this->redirect(Yii::app()->request->urlReferrer);
        }
        $record = new Article();
        $record->category_id = $cid;
        $record->sortnum = $record->getMaxSortnum($cid);
        $record->title = '';
        $record->link = '';
        $record->pic = '';
        $record->status = 2;
        $record->content = '';
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl
            . '/tinymce/plugins/moxiemanager/js/moxman.loader.min.js', CClientScript::POS_BEGIN);
        $this->render('form', array('category' => $category, 'record' => $record));
    }

    public function actionEdit()
    {
        $id = Yii::app()->request->getQuery('id');
        if ($id < 1) {
            $this->redirect(Yii::app()->request->urlReferrer);
        }
        $record = Article::model()->findByPk($id);
        $this->render('form', array('record' => $record));
    }

    public function actionForm()
    {
        if (!Yii::app()->request->isPostRequest) {
            Yii::app()->user->setFlash('error', '无效的请求');
            $this->redirect(Yii::app()->request->urlReferrer);
        }
        $request = Yii::app()->request;
        $id = (int) $request->getPost('id');
        $sortnum = (int) $request->getPost('sortnum');
        $title = $request->getPost('title');
        $link = $request->getPost('link');
        $pic = $request->getPost('pic');
        $status = (int) $request->getPost('status');
        $content = $request->getPost('content');
        if (!$sortnum || empty($title)) {
            Yii::app()->user->setFlash('error', '请填写完整');
            $this->redirect(Yii::app()->request->urlReferrer);
        }
        if ($id > 0) {
            $model = Article::model()->findByPk($id);
        } else {
            $model = new Article();
            $model->category_id = (int) $request->getPost('category_id');
            $model->admin_id = Yii::app()->user->id == -1 ? 1 : Yii::app()->user->id;
            $model->intro = '';
        }
        $model->sortnum = $sortnum;
        $model->title = $title;
        $model->link = $link;
        $model->pic = $pic;
        $model->status = $status;
        $model->content = $content;

        if ($model->save()) {
            $this->redirect(array('index', 'cid' => $model->category_id));
        }
        Yii::app()->user->setFlash('error', '保存信息失败');
        $this->redirect(Yii::app()->request->urlReferrer);
    }

    public function actionDel()
    {
        $id = Yii::app()->request->getQuery('id');
        if ($id < 1) {
            $this->redirect(Yii::app()->request->urlReferrer);
        }
        $model = Article::model()->findByPk($id);
        if (!$model) {
            Yii::app()->user->setFlash('error', '信息已经删除');
            $this->redirect(Yii::app()->request->urlReferrer);
        }
        $model->delete();
        $this->redirect(Yii::app()->request->urlReferrer);
    }

    public function actionBatch()
    {
        $ids = Yii::app()->request->getPost('ids');
        if ($ids) {
            Article::model()->deleteByPk($ids);
        }
        $this->redirect(Yii::app()->request->urlReferrer);
    }
}