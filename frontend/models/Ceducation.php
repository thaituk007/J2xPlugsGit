<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ceducation".
 *
 * @property string $educationcode
 * @property string|null $educationname
 *
 * @property Person[] $people
 */
class Ceducation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ceducation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['educationcode'], 'required'],
            [['educationcode'], 'string', 'max' => 2],
            [['educationname'], 'string', 'max' => 85],
            [['educationcode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'educationcode' => Yii::t('app', 'Educationcode'),
            'educationname' => Yii::t('app', 'Educationname'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeople()
    {
        return $this->hasMany(Person::className(), ['educate' => 'educationcode']);
    }

    /**
     * {@inheritdoc}
     * @return CeducationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CeducationQuery(get_called_class());
    }
}
