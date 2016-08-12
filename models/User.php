<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property integer $org
 * @property string $name
 * @property string $nik
 * @property string $pas
 * @property integer $count
 * @property string $data_reg
 * @property string $icon
 * @property string $email
 * @property string $ip_addr
 * @property integer $theme
 * @property string $last_log
 * @property integer $active
 * @property integer $field_set
 * @property integer $config
 * @property string $type
 * @property string $addon
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org', 'name', 'username', 'data_reg', 'ip_addr', 'last_log', 'addon'], 'required'],
            [['org', 'count', 'theme', 'active', 'field_set', 'config'], 'integer'],
            [['data_reg', 'last_log'], 'safe'],
            [['type'], 'string'],
            [['name'], 'string', 'max' => 75],
            [['username'], 'string', 'max' => 30],
            [['password'], 'string', 'max' => 32],
            [['icon'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 35],
            [['ip_addr'], 'string', 'max' => 15],
            [['addon'], 'string', 'max' => 36],
            [['auth_key'], 'string', 'max' => 32],
            [['access_token'], 'string', 'max' => 32],
            [['username'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'org' => 'Org',
            'name' => 'Name',
            'username' => 'Username',
            'password' => 'Password',
            'count' => 'Count',
            'data_reg' => 'Data Reg',
            'icon' => 'Icon',
            'email' => 'Email',
            'ip_addr' => 'Ip Addr',
            'theme' => 'Theme',
            'last_log' => 'Last Log',
            'active' => 'Active',
            'field_set' => 'Field Set',
            'config' => 'Config',
            'type' => 'Type',
            'addon' => 'Addon',
            'auth_key' => 'Authentication key',
            'access_token' => 'Access Token'
        ];
    }

    /**
     * Finds an identity by the given ID.
     *
     * @param string|integer $id the ID to be looked for
     * @return IdentityInterface|null the identity object that matches the given ID.
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * Finds an identity by the given token.
     *
     * @param string $token the token to be looked for
     * @return IdentityInterface|null the identity object that matches the given token.
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * @return int|string current user ID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string current user auth key
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @param string $authKey
     * @return boolean if auth key is valid for current user
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public function findByUsername($username)
    {
        $user = new User();
        return $user->findOne(['username' => $username]);
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $hash = Yii::$app->getSecurity()->generatePasswordHash($this->password);
                $this->pas = $hash;
            }
            return true;
        }
        return false;
    }
}
