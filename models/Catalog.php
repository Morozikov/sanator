<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catalog".
 *
 * @property integer $id
 * @property string $name
 * @property string $image
 */
class Catalog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

   

    public static function tableName()
    {
        return 'catalog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
          
            [['id'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['image'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'image' => 'Image',
        ];
    }

    
}
