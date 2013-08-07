<?php
class Article extends CActiveRecord
{
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return '{{article}}';
    }

    public function getMaxSortnum($categoryId)
    {
        $record = $this->findByAttributes(
            array('category_id' => $categoryId),
            array('select' => 'sortnum', 'order' => 'sortnum desc')
        );
        if ($record) {
            return $record->sortnum + 5;
        }
        return 5;
    }

    protected function beforeSave()
    {
        if ($this->isNewRecord) {
            $this->created_time = new CDbExpression('now()');
        }
        return true;
    }
}