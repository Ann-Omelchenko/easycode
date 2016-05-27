<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guestbook".
 *
 * @property string $id
 * @property string $name
 * @property string $email
 * @property string $text
 * @property string $date_creation
 */
class Guestbook extends \yii\db\ActiveRecord
{
    const PATH_TO_IMG_UPLOAD_FOLDER = 'uploads/images/';
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'guestbook';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'text'], 'required'],
            [['text'], 'string'],
            [['date_creation'], 'safe'],
            [['name', 'email'], 'string', 'max' => 40],
            [['img'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'            => 'ID',
            'name'          => 'Name',
            'email'         => 'Email',
            'text'          => 'Ваш отзыв',
            'date_creation' => 'Date Creation',
            'img'           => 'Image',
        ];
    }

    public function getPathToImage(){
        
        return self::PATH_TO_IMG_UPLOAD_FOLDER . $this->img;
    }
}
