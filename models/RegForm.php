<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property int $id_role
 * @property int $id_card
 * @property string $login
 * @property string $password
 * @property string $email
 * @property string $phone
 * @property string $gender
 * @property string $city
 * @property string $currency
 * @property string $date_of_birth
 *
 * @property Address[] $addresses
 * @property Busket[] $buskets
 * @property Card $card
 * @property Company[] $companies
 * @property Favourites[] $favourites
 * @property Order[] $orders
 * @property Review[] $reviews
 * @property Role $role
 */
class RegForm extends User
{
    public $passwordConfirm;
    public $agree;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_role', 'id_card', 'login', 'password', 'passwordConfirm', 'email', 'phone', 'gender', 'city', 'currency', 'date_of_birth', 'agree'], 'required'],
            ['login', 'match', 'pattern' => '/^[A-Za-z\$\-]{0,}$/u', 'message'=>'Только Латинские буквы'],
            ['login', 'unique', 'message'=>'Такой логин уже существует'],
            ['email', 'email', 'message' => 'Некорректный email'],
            ['passwordConfirm', 'compare', 'compareAttribute' => 'password', 'message' => 'Пароли должны совпадать'],
            ['agree', 'boolean'],
            ['agree', 'compare', 'compareValue' => true, 'message' => 'Необходимо согласие на обработку данных'],
            ['phone', 'match', 'pattern' => '/^[0-9\$\-]{0,}$/u', 'message' => 'Некорректный номер телефона'],
            [['id_role', 'id_card'], 'integer'],
            [['date_of_birth'], 'safe'],
            [['id_card'], 'exist', 'skipOnError' => true, 'targetClass' => Card::class, 'targetAttribute' => ['id_card' => 'id']],
            [['id_role'], 'exist', 'skipOnError' => true, 'targetClass' => Role::class, 'targetAttribute' => ['id_role' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Код',
            'id_role' => 'Роль',
            'id_card' => 'Карта',
            'login' => 'Логин',
            'password' => 'Пароль',
            'passwordConfirm' => 'Подтверждение пароля',
            'email' => 'Электронная почта',
            'phone' => 'Телефон',
            'gender' => 'Пол',
            'city' => 'Город',
            'currency' => 'Валюта',
            'date_of_birth' => 'Дата рождения',
            'agree' => 'Даю согласие на обработку персональных данных',
        ];
    }


}
