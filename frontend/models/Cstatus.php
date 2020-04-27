<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "cstatus".
 *
 * @property string $statuscode
 * @property string|null $statusname
 * @property string|null $statuscode506
 *
 * @property Person[] $people
 */
class Cstatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cstatus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['statuscode'], 'required'],
            [['statuscode', 'statuscode506'], 'string', 'max' => 1],
            [['statusname'], 'string', 'max' => 75],
            [['statuscode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'statuscode' => Yii::t('app', 'Statuscode'),
            'statusname' => Yii::t('app', 'Statusname'),
            'statuscode506' => Yii::t('app', 'Statuscode506'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeople()
    {
        return $this->hasMany(Person::className(), ['marystatus' => 'statuscode']);
    }

    /**
     * {@inheritdoc}
     * @return CstatusQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CstatusQuery(get_called_class());
    }
}
