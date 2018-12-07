<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%advers}}".
 *
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property string $title
 * @property string $thumb
 * @property int $sort
 * @property string $link_url
 * @property int $article_id
 */
class Advers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%advers}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['sort', 'article_id'], 'integer'],
            [['title', 'thumb', 'link_url'], 'string', 'max' => 255],
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
            'title' => Yii::t('app', 'Title'),
            'thumb' => Yii::t('app', 'Thumb'),
            'sort' => Yii::t('app', 'Sort'),
            'link_url' => Yii::t('app', 'Link Url'),
            'article_id' => Yii::t('app', 'Article ID'),
        ];
    }
}
