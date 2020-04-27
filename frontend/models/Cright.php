<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "cright".
 *
 * @property string $rightcode
 * @property string $mapright
 * @property string|null $rightname
 * @property string|null $rightgroup
 * @property string|null $rightcodedrg
 *
 * @property Person[] $people
 * @property Visit[] $visits
 */
class Cright extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cright';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rightcode', 'mapright'], 'required'],
            [['rightcode'], 'string', 'max' => 4],
            [['mapright'], 'string', 'max' => 40],
            [['rightname'], 'string', 'max' => 255],
            [['rightgroup'], 'string', 'max' => 1],
            [['rightcodedrg'], 'string', 'max' => 2],
            [['rightcode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'rightcode' => Yii::t('app', 'Rightcode'),
            'mapright' => Yii::t('app', 'Mapright'),
            'rightname' => Yii::t('app', 'Rightname'),
            'rightgroup' => Yii::t('app', 'Rightgroup'),
            'rightcodedrg' => Yii::t('app', 'Rightcodedrg'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeople()
    {
        return $this->hasMany(Person::className(), ['rightcode' => 'rightcode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisits()
    {
        return $this->hasMany(Visit::className(), ['rightcode' => 'rightcode']);
    }

    /**
     * {@inheritdoc}
     * @return CrightQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CrightQuery(get_called_class());
    }
}
