<?php

/**
 * This is the model class for table "photo".
 *
 * The followings are the available columns in table 'photo':
 * @property integer $id
 * @property string $title
 * @property string $path
 * @property string $created_at
 * @property integer $category_id
 *
 * The followings are the available model relations:
 * @property PhotoCategory $category
 * @property PhotoLang[] $photoLangs
 */
class Video extends CActiveRecord
{
    public $video;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'video';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, category_id', 'required'),
			array('category_id', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>500),
			array('path', 'length', 'max'=>255),
			array('created_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, path, created_at, category_id', 'safe', 'on'=>'search'),
			array('video', 'file', 'types'=>'avi, mp4'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'category' => array(self::BELONGS_TO, 'VideoCategory', 'category_id'),
			'videoLangs' => array(self::HAS_MANY, 'VideoLang', 'photo_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Описание к видео',
			'path' => 'Path',
			'created_at' => 'Дата создания',
			'category_id' => 'Альбом',
		);
	}

    public function behaviors(){
        return array(
            'ml' => array(
                'class' => 'ext.MultilingualBehavior',
                'langClassName' => 'VideoLang',
                'langTableName' => 'photo_lang',
                'langForeignKey' => 'photo_id',
                'localizedAttributes' => array('title'), //attributes of the model to be translated
                'languages' => Yii::app()->params['languages'], // array of your translated languages. Example : array('fr' => 'Français', 'en' => 'English')
                'defaultLanguage' => Yii::app()->params['defaultLanguage'], //your main language. Example : 'fr'
                'dynamicLangClass' => false, //Set to true if you don't want to create a 'PostLang.php' in your models folder
            ),

            't' => array(
                'class' => 'ext.TimestampableBehavior',
                'updatedField' => false
            ),
            // 'video' => array(
            //     'dir' => 'files/video',
            //     'class' => 'ext.VideoBehavior',
            //     'field' => 'path',
            //     'property' => 'uploadedImage',
            //     'minWidth' => 1000,
            //     'minHeight' => 600,
            //     'ratio'    => 2.53,
            //      'maxSize'  => 500000,
            //     // 'enableCropping' => true,
            //     'maxWidth' => 1600
            // )
        );
    }
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

        $criteria->order = 'created_at DESC';
		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('path',$this->path,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('category_id',$this->category_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Photo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
