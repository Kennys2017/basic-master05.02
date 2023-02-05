<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "busket".
 *
 * @property int $id
 * @property int $id_user
 * @property int $id_product
 * @property float $sum
 * @property float $amount
 * @property string $add_at
 * @property string $delete_at
 *
 * @property Product $product
 * @property User $user
 */
class Busket extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'busket';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_user', 'id_product', 'sum', 'amount', 'add_at', 'delete_at'], 'required'],
            [['id', 'id_user', 'id_product'], 'integer'],
            [['sum', 'amount'], 'number'],
            [['add_at', 'delete_at'], 'safe'],
            [['id'], 'unique'],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['id_user' => 'id']],
            [['id_product'], 'exist', 'skipOnError' => true, 'targetClass' => Product::class, 'targetAttribute' => ['id_product' => 'id']],
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
            'id_product' => 'Название товара',
            'sum' => 'Сумма',
            'amount' => 'Итого',
            'add_at' => 'Дата создания',
            'delete_at' => 'Дата удаления',
        ];
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::class, ['id' => 'id_product']);
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
