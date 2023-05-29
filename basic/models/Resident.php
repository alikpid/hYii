<?php

namespace app\models;

use yii\db\ActiveRecord;

class Resident extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%resident}}';
    }
}