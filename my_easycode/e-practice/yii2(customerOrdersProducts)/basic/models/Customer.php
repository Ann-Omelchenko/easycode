<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property string $id
 * @property string $name
 * @property string $date_creation
 *
 * @property OrderList[] $orderLists
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['date_creation'], 'safe'],
            [['name'], 'string', 'max' => 50],
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
            'date_creation' => 'Date Creation',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderLists()
    {
        return $this->hasMany(OrderList::className(), ['customer_id' => 'id']);
    }
}
