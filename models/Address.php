<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "address".
 *
 * @property int $id
 * @property int $id_user
 * @property string $city
 * @property string $street
 * @property string $house
 * @property int $flat_number
 * @property string $comment
 *
 * @property Order[] $orders
 * @property User $user
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'address';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'city', 'street', 'house', 'flat_number', 'comment'], 'required'],
            [['id_user', 'flat_number'], 'integer'],
            [['comment'], 'string'],
            [['city', 'street', 'house'], 'string', 'max' => 255],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Код',
            'id_user' => 'Логин пользователя',
            'city' => 'Город',
            'street' => 'Улица',
            'house' => 'Дом',
            'flat_number' => 'Номер квартиры',
            'comment' => 'Комментарий',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::class, ['id_address' => 'id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'id_user']);
    }
}
