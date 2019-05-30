<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Users extends ActiveRecord
{

    /**
     * Define DB's table name.
     *
     * @return string
     */
    public static function tableName()
    {
        return 'users';
    }

}