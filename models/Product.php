<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $id_category
 * @property int $id_company
 * @property string $name
 * @property string $image
 * @property float $discount
 * @property string $description
 * @property string $characteristic
 * @property string $mode_of_application
 * @property string $link
 * @property float $rating
 * @property string $created_at
 * @property string $updated_at
 * @property float $price
 * @property int $isDiscount
 *
 * @property Busket[] $buskets
 * @property Category $category
 * @property Company $company
 * @property Favourites[] $favourites
 * @property Order[] $orders
 * @property Review[] $reviews
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_category', 'id_company', 'name', 'image', 'discount', 'description', 'characteristic', 'mode_of_application', 'link', 'rating', 'created_at', 'updated_at', 'price', 'isDiscount'], 'required'],
            [['id_category', 'id_company', 'isDiscount'], 'integer'],
            [['discount', 'rating', 'price'], 'number'],
            [['description', 'characteristic', 'mode_of_application'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'image'], 'string', 'max' => 100],
            [['link'], 'string', 'max' => 300],
            [['id_category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['id_category' => 'id']],
            [['id_company'], 'exist', 'skipOnError' => true, 'targetClass' => Company::class, 'targetAttribute' => ['id_company' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Код',
            'id_category' => 'Категория',
            'id_company' => 'Компания',
            'name' => 'Название',
            'image' => 'Изображение',
            'discount' => 'Скидка',
            'description' => 'Описание',
            'characteristic' => 'Характеристики',
            'mode_of_application' => 'Способ применения',
            'link' => 'Ссылка',
            'rating' => 'Оценка',
            'created_at' => 'Дата созднания',
            'updated_at' => 'Дата обновления',
            'price' => 'Цена',
            'isDiscount' => 'По скидке',
        ];
    }

    /**
     * Gets query for [[Buskets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBuskets()
    {
        return $this->hasMany(Busket::class, ['id_product' => 'id']);
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'id_category']);
    }

    /**
     * Gets query for [[Company]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Company::class, ['id' => 'id_company']);
    }

    /**
     * Gets query for [[Favourites]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFavourites()
    {
        return $this->hasMany(Favourites::class, ['id_product' => 'id']);
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::class, ['id_product' => 'id']);
    }

    /**
     * Gets query for [[Reviews]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReviews()
    {
        return $this->hasMany(Review::class, ['id_product' => 'id']);
    }
}
