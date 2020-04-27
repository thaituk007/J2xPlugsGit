<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "chospital".
 *
 * @property string $hoscode
 * @property string|null $hosname
 * @property string|null $hostype
 * @property string|null $address
 * @property string|null $road
 * @property string|null $mu
 * @property string|null $subdistcode
 * @property string|null $distcode
 * @property string|null $provcode
 * @property string|null $postcode
 * @property string|null $hoscodenew
 *
 * @property Office $office
 * @property Pccpcu[] $pccpcus
 * @property Cpccteam[] $pcccodes
 * @property Person[] $people
 * @property Person[] $people0
 * @property Personchronic[] $personchronics
 * @property Studenthealthear[] $studenthealthears
 * @property Studenthealtheye[] $studenthealtheyes
 * @property Visit[] $visits
 * @property Visit[] $visits0
 * @property Visit[] $visits1
 * @property Visit[] $visits2
 * @property Visitanc[] $visitancs
 * @property Visitancdeliver[] $visitancdelivers
 * @property Visitancmothercare[] $visitancmothercares
 * @property Visitbabycare[] $visitbabycares
 * @property Visitepi[] $visitepis
 * @property Visitfp[] $visitfps
 * @property Visitlabblood[] $visitlabbloods
 * @property Visitlabblood[] $visitlabbloods0
 * @property Visitlabcancer[] $visitlabcancers
 * @property Visitlabcancer[] $visitlabcancers0
 * @property Visitlabchcyhembmsse[] $visitlabchcyhembmsses
 * @property Visitlabchcyhembmsse[] $visitlabchcyhembmsses0
 */
class Chospital extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'chospital';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['hoscode'], 'required'],
            [['hoscode', 'postcode'], 'string', 'max' => 5],
            [['hosname'], 'string', 'max' => 255],
            [['hostype', 'mu', 'subdistcode', 'distcode', 'provcode'], 'string', 'max' => 2],
            [['address', 'road'], 'string', 'max' => 50],
            [['hoscodenew'], 'string', 'max' => 9],
            [['hoscode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'hoscode' => Yii::t('app', 'Hoscode'),
            'hosname' => Yii::t('app', 'Hosname'),
            'hostype' => Yii::t('app', 'Hostype'),
            'address' => Yii::t('app', 'Address'),
            'road' => Yii::t('app', 'Road'),
            'mu' => Yii::t('app', 'Mu'),
            'subdistcode' => Yii::t('app', 'Subdistcode'),
            'distcode' => Yii::t('app', 'Distcode'),
            'provcode' => Yii::t('app', 'Provcode'),
            'postcode' => Yii::t('app', 'Postcode'),
            'hoscodenew' => Yii::t('app', 'Hoscodenew'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOffice()
    {
        return $this->hasOne(Office::className(), ['offid' => 'hoscode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPccpcus()
    {
        return $this->hasMany(Pccpcu::className(), ['pcucode' => 'hoscode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPcccodes()
    {
        return $this->hasMany(Cpccteam::className(), ['pcccode' => 'pcccode'])->viaTable('pccpcu', ['pcucode' => 'hoscode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeople()
    {
        return $this->hasMany(Person::className(), ['hossub' => 'hoscode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeople0()
    {
        return $this->hasMany(Person::className(), ['hosmain' => 'hoscode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonchronics()
    {
        return $this->hasMany(Personchronic::className(), ['cup' => 'hoscode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudenthealthears()
    {
        return $this->hasMany(Studenthealthear::className(), ['hosrefer' => 'hoscode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudenthealtheyes()
    {
        return $this->hasMany(Studenthealtheye::className(), ['hosrefer' => 'hoscode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisits()
    {
        return $this->hasMany(Visit::className(), ['hossub' => 'hoscode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisits0()
    {
        return $this->hasMany(Visit::className(), ['receivefromhos' => 'hoscode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisits1()
    {
        return $this->hasMany(Visit::className(), ['refertohos' => 'hoscode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisits2()
    {
        return $this->hasMany(Visit::className(), ['hosmain' => 'hoscode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitancs()
    {
        return $this->hasMany(Visitanc::className(), ['hosservice' => 'hoscode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitancdelivers()
    {
        return $this->hasMany(Visitancdeliver::className(), ['hosservice' => 'hoscode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitancmothercares()
    {
        return $this->hasMany(Visitancmothercare::className(), ['hosservice' => 'hoscode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitbabycares()
    {
        return $this->hasMany(Visitbabycare::className(), ['hosservice' => 'hoscode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitepis()
    {
        return $this->hasMany(Visitepi::className(), ['hosservice' => 'hoscode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitfps()
    {
        return $this->hasMany(Visitfp::className(), ['hosservice' => 'hoscode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitlabbloods()
    {
        return $this->hasMany(Visitlabblood::className(), ['hosservice' => 'hoscode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitlabbloods0()
    {
        return $this->hasMany(Visitlabblood::className(), ['hoslab' => 'hoscode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitlabcancers()
    {
        return $this->hasMany(Visitlabcancer::className(), ['hosservice' => 'hoscode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitlabcancers0()
    {
        return $this->hasMany(Visitlabcancer::className(), ['hoslab' => 'hoscode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitlabchcyhembmsses()
    {
        return $this->hasMany(Visitlabchcyhembmsse::className(), ['hosservice' => 'hoscode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitlabchcyhembmsses0()
    {
        return $this->hasMany(Visitlabchcyhembmsse::className(), ['hoslab' => 'hoscode']);
    }

    /**
     * {@inheritdoc}
     * @return ChospitalQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ChospitalQuery(get_called_class());
    }
}
