<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%articles}}".
 *
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property int $category_id
 * @property string $title
 * @property string $thumb
 * @property string $tags
 * @property string $author
 * @property string $description
 * @property int $status
 * @property int $is_recommend
 * @property int $hits
 * @property string $body
 * @property int $up
 * @property int $down
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%articles}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['category_id', 'status', 'is_recommend', 'hits', 'up', 'down'], 'integer'],
            [['body'], 'string'],
            [['title', 'thumb', 'tags', 'author', 'description'], 'string', 'max' => 255],
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
            'category_id' => Yii::t('app', 'Category ID'),
            'title' => Yii::t('app', 'Title'),
            'thumb' => Yii::t('app', 'Thumb'),
            'tags' => Yii::t('app', 'Tags'),
            'author' => Yii::t('app', 'Author'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'is_recommend' => Yii::t('app', 'Is Recommend'),
            'hits' => Yii::t('app', 'Hits'),
            'body' => Yii::t('app', 'Body'),
            'up' => Yii::t('app', 'Up'),
            'down' => Yii::t('app', 'Down'),
        ];
    }
}
