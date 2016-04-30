<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\User;

/**
 * Signup form
 */
class InstagramAccountForm extends Model
{
    public $account;
    public $password;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['account', 'filter', 'filter' => 'trim'],
            ['account', 'required'],
            ['password', 'required'],
            ['password', 'string'],
        ];
    }
    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            $user->save();
            return $user;
        }
        return null;
    }
}