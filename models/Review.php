<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "review".
 *
 * @property int $id
 * @property int $id_user
 * @property int $id_product
 * @property string $advantages
 * @property string $disadvantages
 * @property float $rating
 * @property string $description
 * @property string $photo
 * @property string $video
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Product $product
 * @property User $user
 */
class Review extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'review';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'id_product', 'advantages', 'disadvantages', 'rating', 'description', 'photo', 'video', 'created_at', 'updated_at'], 'required'],
            [['id_user', 'id_product'], 'integer'],
            [['advantages', 'disadvantages', 'description'], 'string'],
            [['rating'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
            [['photo', 'video'], 'string', 'max' => 100],
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
            'id_product' => 'Название продукта',
            'advantages' => 'Преимущества',
            'disadvantages' => 'Недостатки',
            'rating' => 'Оценка',
            'description' => 'Описание',
            'photo' => 'Фото',
            'video' => 'Видео',
            'created_at' => 'Дата добавление',
            'updated_at' => 'Дата обновления',
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
