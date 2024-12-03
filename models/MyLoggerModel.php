<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mylogger".
 *
 * @property int $id
 * @property string $message
 * @property string $created_at
 */
class MyLoggerModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mylogger';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['message'], 'required'],
            [['message'], 'string'],
            [['created_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'message' => 'Message',
            'created_at' => 'Created At',
        ];
    }
}
