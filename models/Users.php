<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%users}}".
 *
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property string $account
 * @property string $password
 * @property string $salt
 * @property int $gender
 * @property string $true_name
 * @property string $nick_name
 * @property int $status
 * @property string $jwt_token
 * @property string $login_time
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%users}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['account', 'password'], 'required'],
            [['account'], 'unique'],
            [['created_at', 'updated_at', 'deleted_at', 'login_time'], 'safe'],
            [['gender', 'status'], 'integer'],
            [['account', 'password', 'salt', 'true_name', 'nick_name', 'jwt_token'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'         => Yii::t('app', 'ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'deleted_at' => Yii::t('app', 'Deleted At'),
            'account'    => Yii::t('app', 'Account'),
            'password'   => Yii::t('app', 'Password'),
            'salt'       => Yii::t('app', 'Salt'),
            'gender'     => Yii::t('app', 'Gender'),
            'true_name'  => Yii::t('app', 'True Name'),
            'nick_name'  => Yii::t('app', 'Nick Name'),
            'status'     => Yii::t('app', 'Status'),
            'jwt_token'  => Yii::t('app', 'Jwt Token'),
            'login_time' => Yii::t('app', 'Login Time'),
        ];
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

    }
}
