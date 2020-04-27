<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "creligion".
 *
 * @property string $religioncode
 * @property string|null $religionname
 *
 * @property Office[] $offices
 * @property Person[] $people
 */
class Creligion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'creligion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['religioncode'], 'required'],
            [['religioncode'], 'string', 'max' => 2],
            [['religionname'], 'string', 'max' => 75],
            [['religioncode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'religioncode' => Yii::t('app', 'Religioncode'),
            'religionname' => Yii::t('app', 'Religionname'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOffices()
    {
        return $this->hasMany(Office::className(), ['religcode' => 'religioncode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeople()
    {
        return $this->hasMany(Person::className(), ['religion' => 'religioncode']);
    }

    /**
     * {@inheritdoc}
     * @return CreligionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CreligionQuery(get_called_class());
    }
}
