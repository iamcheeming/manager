<?php
class CategoryController extends DManagerController
{
    public function actionIndex()
    {
        $rows = Category::model()->findAllByAttributes(
            array('pid' => 0),
            array('order' => 'sortnum asc')
        );
        $this->render('index', array('rows' => $rows));
    }

    public function actionAdd()
    {
        $record = array(
            'id' => 0,
            'sortnum' => Category::model()->getMaxSortnum(),
            'max_level' => 2,
            'name' => '',
            'has_alter' => 1,
        );
        $this->render('form', array('record' => $record));
    }

    public function actionEdit()
    {
        $id = Yii::app()->request->getQuery('id');
        if ($id < 1) {
            $this->redirect(Yii::app()->request->urlReferrer);
        }
        $record = Category::model()->findByPk($id);
        $this->render('form', array('record' => $record));
    }

    public function actionForm()
    {
        if (!Yii::app()->request->isPostRequest) {
            Yii::app()->user->setFlash('error', '错误的请求方式');
            $this->redirect(Yii::app()->request->urlReferrer);
        }
        $request = Yii::app()->request;
        $id = $request->getPost('id');
        $sortnum = $request->getPost('sortnum');
        $max_level = $request->getPost('max_level');
        $name = $request->getPost('name');
        $has_alter = $request->getPost('has_alter');
        if (!$sortnum || empty($name)) {
            Yii::app()->user->setFlash('error', '请填写完整');
            $this->redirect(Yii::app()->request->urlReferrer);
        }
        if ($id > 0) {
            $model = Category::model()->findByPk($id);
        } else {
            $model = new Category();
            $model->pid = 0;
            $model->route = '';
            $model->pic = '';
            $model->intro = '';
            $model->has_sub = 1;
        }
        $model->sortnum = $sortnum;
        $model->name = $name;
        $model->max_level = $max_level;
        $model->has_alter = $has_alter;
        if ($model->save()) {
            Yii::app()->user->setFlash('success', '保存栏目成功');
            $this->redirect(array('index'));
        }
        Yii::app()->user->setFlash('error', '保存栏目失败');
        $this->redirect(Yii::app()->request->urlReferrer);
    }

    public function actionDel()
    {
        $id = Yii::app()->request->getQuery('id');
        if ($id < 1) {
            $this->redirect(Yii::app()->request->urlReferrer);
        }
        $model = Category::model()->findByPk($id);
        if (!$model) {
            $this->redirect(Yii::app()->request->urlReferrer);
        }
        if (Category::model()->countByAttributes(array('pid' => $id))) {
            Yii::app()->user->setFlash('error', '栏目下有子栏目，请先删除子栏目');
        } else {
            $model->delete();
            Yii::app()->user->setFlash('success', '删除栏目成功');
        }
        $this->redirect(array('index'));
    }
}