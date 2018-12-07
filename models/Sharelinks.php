<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%sharelinks}}".
 *
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property string $name
 * @property string $thumb
 * @property int $is_check
 * @property string $link_url
 */
class Sharelinks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%sharelinks}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['is_check'], 'integer'],
            [['name', 'thumb', 'link_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'deleted_at' => Yii::t('app', 'Deleted At'),
            'name' => Yii::t('app', 'Name'),
            'thumb' => Yii::t('app', 'Thumb'),
            'is_check' => Yii::t('app', 'Is Check'),
            'link_url' => Yii::t('app', 'Link Url'),
        ];
    }
}
