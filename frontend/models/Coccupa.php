<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "coccupa".
 *
 * @property string $occupacode
 * @property string|null $mapoccupa
 * @property string|null $occupaname
 * @property string|null $occupacode506
 *
 * @property Office[] $offices
 * @property Person[] $people
 */
class Coccupa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'coccupa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['occupacode'], 'required'],
            [['occupacode', 'mapoccupa'], 'string', 'max' => 4],
            [['occupaname'], 'string', 'max' => 255],
            [['occupacode506'], 'string', 'max' => 2],
            [['occupacode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'occupacode' => Yii::t('app', 'Occupacode'),
            'mapoccupa' => Yii::t('app', 'Mapoccupa'),
            'occupaname' => Yii::t('app', 'Occupaname'),
            'occupacode506' => Yii::t('app', 'Occupacode506'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOffices()
    {
        return $this->hasMany(Office::className(), ['occupacode' => 'occupacode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeople()
    {
        return $this->hasMany(Person::className(), ['occupa' => 'occupacode']);
    }

    /**
     * {@inheritdoc}
     * @return CoccupaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CoccupaQuery(get_called_class());
    }
}
