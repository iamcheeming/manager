<?php
class NavController extends DManagerController
{
    public function actionIndex()
    {
        $pid = Yii::app()->request->getQuery('pid');
        if ($pid < 1) {
            $this->redirect(Yii::app()->request->urlReferrer);
        }
        $parent_record = Category::model()->findByPk($pid);
        if (!$parent_record) {
            $this->redirect(Yii::app()->request->urlReferrer);
        }
        $rows = Category::model()->findAllByAttributes(array('pid' => $pid));
        $this->render('index', array('rows' => $rows, 'parent_record' => $parent_record));
    }

    public function actionAdd()
    {
        $pid = Yii::app()->request->getQuery('pid');
        if ($pid < 1) {
            $this->redirect(Yii::app()->request->urlReferrer);
        }
        $parent_model = Category::model()->findByPk($pid);
        if (!$parent_model) {
            Yii::app()->user->setFlash('error', '不存在的父栏目');
            $this->redirect(Yii::app()->request->urlReferrer);
        }
        if (!$parent_model->has_alter || $parent_model->max_level < 0) {
            Yii::app()->user->setFlash('error', '父栏目无法添加子栏目');
            $this->redirect(Yii::app()->request->urlReferrer);
        }
        $record = array(
            'id' => 0,
            'pid' => $pid,
            'sortnum' => Category::model()->getMaxSortnum($pid),
            'max_level' => $parent_model->max_level - 1,
            'name' => '',
            'has_sub' => ($parent_model->max_level - 1) ? 1 : 0,
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
        $id = (int) $request->getPost('id');
        $pid = (int) $request->getPost('pid');
        $sortnum = (int) $request->getPost('sortnum');
        $max_level = (int) $request->getPost('max_level');
        $name = $request->getPost('name');
        $has_sub = $request->getPost('has_sub');
        if (!$sortnum || empty($name)) {
            Yii::app()->user->setFlash('error', '请填写完整');
            $this->redirect(Yii::app()->request->urlReferrer);
        }
        $parent_model = Category::model()->findByPk($pid);
        if (!$parent_model) {
            Yii::app()->user->setFlash('error', '不存在的父栏目');
            $this->redirect(Yii::app()->request->urlReferrer);
        }
        if (!$parent_model->has_alter) {
            Yii::app()->user->setFlash('error', '父栏目无法添加子栏目');
            $this->redirect(Yii::app()->request->urlReferrer);
        }
        if ($max_level > $parent_model->max_level - 1) {
            $max_level = $parent_model->max_level - 1;
        }
        if (!$max_level) {
            $has_sub = 0;
        }
        if ($id > 0) {
            $model = Category::model()->findByPk($id);
        } else {
            $model = new Category();
            $model->pid = $pid;
            $model->route = "{$parent_model->route},{$pid}";
            $model->pic = '';
            $model->intro = '';
            $model->has_alter = 1;
        }
        $model->sortnum = $sortnum;
        $model->name = $name;
        $model->max_level = $max_level;
        $model->has_sub = $has_sub;
        if ($model->save()) {
            $this->redirect(array('index', 'pid' => $model->pid));
        }
        Yii::app()->user->setFlash('error', '保存子栏目失败');
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
            Yii::app()->user->setFlash('error', '不存在的栏目无法删除');
            $this->redirect(Yii::app()->request->urlReferrer);
        }
        if (!$model->has_alter) {
            Yii::app()->user->setFlash('error', '栏目无法修改');
            $this->redirect(Yii::app()->request->urlReferrer);
        }
        if (Category::model()->countByAttributes(array('pid' => $id))) {
            Yii::app()->user->setFlash('error', '栏目下有子栏目，请先删除子栏目');
        } else {
            $model->delete();
        }
        $this->redirect(array('index'));
    }
}