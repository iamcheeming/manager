<?php
class Category extends CActiveRecord
{
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return '{{category}}';
    }

    public function getMaxSortnum($pid = 0)
    {
        $record = $this->findByAttributes(array('pid' => $pid), array('select' => 'sortnum', 'order' => 'sortnum desc'));
        if ($record) {
            return $record->sortnum + 10;
        }
        return 10;
    }
}