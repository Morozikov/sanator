<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hit".
 *
 * @property integer $id
 * @property integer $id_top
 */
class Hit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['id'], 'required'],
            [['id', 'id_top'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_top' => 'Id Top',
        ];
    }
    
    public function getNameProduct(){
        $name = '';
        $model = TopP::findOne($this->id_top);
        if (isset($model)){
            $name = $model->name;
        }
        return $name;
    }
}
