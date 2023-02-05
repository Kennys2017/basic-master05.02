<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property int $id
 * @property int $id_user
 * @property string $name
 * @property int $INN
 * @property string $photo
 * @property string $created_at
 * @property string $updated_at
 * @property string $link
 *
 * @property Product[] $products
 * @property User $user
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'name', 'INN', 'photo', 'created_at', 'updated_at', 'link'], 'required'],
            [['id_user', 'INN'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'photo', 'link'], 'string', 'max' => 255],
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
            'id_user' => 'Логин менеджера',
            'name' => 'Название',
            'INN' => 'ИНН',
            'photo' => 'Фото',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
            'link' => 'Ссылка',
        ];
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::class, ['id_company' => 'id']);
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
