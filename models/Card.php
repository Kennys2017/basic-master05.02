<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "card".
 *
 * @property int $id
 * @property string $number
 * @property int $is_default
 *
 * @property Order[] $orders
 * @property User[] $users
 */
class Card extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'card';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number', 'is_default'], 'required'],
            [['is_default'], 'integer'],
            [['number'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Код',
            'number' => 'Номер карты',
            'is_default' => 'По умолчанию',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::class, ['id_card' => 'id']);
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::class, ['id_card' => 'id']);
    }
}
