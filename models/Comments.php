<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%comments}}".
 *
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property int $article_id
 * @property int $comment_id
 * @property int $is_check
 * @property string $title
 * @property string $body
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%comments}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['article_id', 'comment_id', 'is_check'], 'integer'],
            [['title', 'body'], 'string', 'max' => 255],
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
            'article_id' => Yii::t('app', 'Article ID'),
            'comment_id' => Yii::t('app', 'Comment ID'),
            'is_check' => Yii::t('app', 'Is Check'),
            'title' => Yii::t('app', 'Title'),
            'body' => Yii::t('app', 'Body'),
        ];
    }
}
