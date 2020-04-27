<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "cnation".
 *
 * @property string $nationcode
 * @property string $mapnation
 * @property string|null $nationname
 *
 * @property Office[] $offices
 * @property Person[] $people
 * @property Person[] $people0
 */
class Cnation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cnation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nationcode', 'mapnation'], 'required'],
            [['nationcode', 'mapnation'], 'string', 'max' => 3],
            [['nationname'], 'string', 'max' => 100],
            [['nationcode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nationcode' => Yii::t('app', 'Nationcode'),
            'mapnation' => Yii::t('app', 'Mapnation'),
            'nationname' => Yii::t('app', 'Nationname'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOffices()
    {
        return $this->hasMany(Office::className(), ['nationcode' => 'nationcode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeople()
    {
        return $this->hasMany(Person::className(), ['nation' => 'nationcode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeople0()
    {
        return $this->hasMany(Person::className(), ['origin' => 'nationcode']);
    }

    /**
     * {@inheritdoc}
     * @return CnationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CnationQuery(get_called_class());
    }
}
