<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "recept".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $full_text
 * @property string $image
 */
class Recept extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'recept';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['id'], 'required'],
            [['id'], 'integer'],
            [['full_text'], 'string'],
            [['name', 'image'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 150],
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
            'description' => 'Description',
            'full_text' => 'Full Text',
            'image' => 'Image',
        ];
    }
}
