<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "top_p".
 *
 * @property integer $id
 * @property string $name
 * @property string $price
 * @property string $netto
 * @property string $image
 */
class TopP extends \yii\db\ActiveRecord implements \pistol88\cart\interfaces\CartElement
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'top_p';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['id'], 'required'],
            [['id'], 'integer'],
            [['id_catalog'], 'integer'],
            [['name'], 'string', 'max' => 150],
            [['price', 'netto'], 'string', 'max' => 45],
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
            'price' => 'Price',
            'netto' => 'Netto',
            'image' => 'Image',
        ];
    }

    public function getCartId()
    {
        return $this->id;
    }

    public function getCartName()
    {
        return $this->name;
    }

    public function getCartPrice()
    {
        return $this->price;
    }

    //Опции продукта для выбора при добавлении в корзину
    public function getCartOptions()
    {
        return ['Цвет' => ['Красный', 'Белый', 'Синий'], 'Размер' => ['XXL']];
    }
    
    public function getCatalog(){
        $name = '';
        $model = Catalog::findOne($this->id_catalog);
        if (isset($model)){
            $name = $model->name;
        }
        return $name;
    }
}
