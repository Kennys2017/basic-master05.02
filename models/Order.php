<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property int $id_user
 * @property int $id_address
 * @property int $id_card
 * @property int $id_product
 * @property int $id_status
 * @property float $discount
 * @property string $sum
 * @property string $date
 *
 * @property Address $address
 * @property Card $card
 * @property Product $product
 * @property Status $status
 * @property User $user
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'id_address', 'id_card', 'id_product', 'id_status', 'discount', 'sum', 'date'], 'required'],
            [['id_user', 'id_address', 'id_card', 'id_product', 'id_status'], 'integer'],
            [['discount'], 'number'],
            [['date'], 'safe'],
            [['sum'], 'string', 'max' => 100],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['id_user' => 'id']],
            [['id_address'], 'exist', 'skipOnError' => true, 'targetClass' => Address::class, 'targetAttribute' => ['id_address' => 'id']],
            [['id_card'], 'exist', 'skipOnError' => true, 'targetClass' => Card::class, 'targetAttribute' => ['id_card' => 'id']],
            [['id_product'], 'exist', 'skipOnError' => true, 'targetClass' => Product::class, 'targetAttribute' => ['id_product' => 'id']],
            [['id_status'], 'exist', 'skipOnError' => true, 'targetClass' => Status::class, 'targetAttribute' => ['id_status' => 'id']],
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
            'id_address' => 'Адресс',
            'id_card' => 'Карта',
            'id_product' => 'Название товара',
            'id_status' => 'Статус',
            'discount' => 'Скидка',
            'sum' => 'Сумма',
            'date' => 'Дата',
        ];
    }

    /**
     * Gets query for [[Address]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAddress()
    {
        return $this->hasOne(Address::class, ['id' => 'id_address']);
    }

    /**
     * Gets query for [[Card]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCard()
    {
        return $this->hasOne(Card::class, ['id' => 'id_card']);
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
     * Gets query for [[Status]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::class, ['id' => 'id_status']);
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
