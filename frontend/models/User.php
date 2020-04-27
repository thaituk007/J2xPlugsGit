<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property string $pcucode
 * @property string $username
 * @property string|null $password
 * @property string|null $grouplevel
 * @property string|null $fullname
 * @property string|null $officertype
 * @property string|null $officerposition
 * @property string|null $noofoccupation
 * @property string|null $markdelete
 * @property string|null $docspecial1
 * @property string|null $docremark
 * @property string|null $idcard
 * @property string|null $prename
 * @property string|null $fname
 * @property string|null $lname
 * @property string|null $licenseno
 * @property string|null $workoffice
 * @property string|null $usersex
 * @property string|null $userbirth
 * @property string|null $dateworkhere
 * @property string|null $datemovehere
 * @property string|null $pcucodemovefrom
 * @property string|null $pcucodemoveto
 * @property string|null $privilegeprovisservice
 * @property string|null $privilegeucode
 * @property string|null $dateupdate
 * @property string|null $council
 * @property string|null $avatar
 * @property string|null $sti_vct
 * @property string|null $pcccode
 * @property string|null $email
 * @property string|null $status
 * @property string|null $name
 * @property string|null $auth_key
 * @property string|null $password_reset_token
 * @property string|null $password_hash
 * @property string|null $register
 *
 * @property House[] $houses
 * @property Person[] $people
 * @property Studenthealthdental[] $studenthealthdentals
 * @property Studenthealthear[] $studenthealthears
 * @property Studenthealtheye[] $studenthealtheyes
 * @property Studenthealthiodein[] $studenthealthiodeins
 * @property Studenthealthnutrition[] $studenthealthnutritions
 * @property Studenthealthworm[] $studenthealthworms
 * @property Cpccteam $pcccode0
 * @property Office $pcucode0
 * @property Usertab[] $usertabs
 * @property Visit[] $visits
 * @property Visitcataractofficer[] $visitcataractofficers
 * @property Visitdentalcheck[] $visitdentalchecks
 * @property Visitdiag[] $visitdiags
 * @property Visitdrug[] $visitdrugs
 * @property Visithomehealthindividual[] $visithomehealthindividuals
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pcucode', 'username'], 'required'],
            [['userbirth', 'dateworkhere', 'datemovehere', 'dateupdate'], 'safe'],
            [['pcucode', 'pcucodemovefrom', 'pcucodemoveto'], 'string', 'max' => 5],
            [['username', 'fname'], 'string', 'max' => 35],
            [['password'], 'string', 'max' => 60],
            [['grouplevel', 'usersex', 'privilegeprovisservice', 'privilegeucode'], 'string', 'max' => 1],
            [['fullname'], 'string', 'max' => 200],
            [['officertype', 'prename'], 'string', 'max' => 3],
            [['officerposition', 'lname'], 'string', 'max' => 50],
            [['noofoccupation', 'markdelete', 'licenseno'], 'string', 'max' => 30],
            [['docspecial1', 'council'], 'string', 'max' => 2],
            [['docremark', 'avatar', 'email', 'status', 'name', 'auth_key', 'password_reset_token', 'password_hash', 'register'], 'string', 'max' => 255],
            [['idcard'], 'string', 'max' => 13],
            [['workoffice'], 'string', 'max' => 256],
            [['sti_vct'], 'string', 'max' => 12],
            [['pcccode'], 'string', 'max' => 6],
            [['pcucode', 'username'], 'unique', 'targetAttribute' => ['pcucode', 'username']],
            [['pcccode'], 'exist', 'skipOnError' => true, 'targetClass' => Cpccteam::className(), 'targetAttribute' => ['pcccode' => 'pcccode']],
            [['pcucode'], 'exist', 'skipOnError' => true, 'targetClass' => Office::className(), 'targetAttribute' => ['pcucode' => 'offid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pcucode' => Yii::t('app', 'Pcucode'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'grouplevel' => Yii::t('app', 'Grouplevel'),
            'fullname' => Yii::t('app', 'Fullname'),
            'officertype' => Yii::t('app', 'Officertype'),
            'officerposition' => Yii::t('app', 'Officerposition'),
            'noofoccupation' => Yii::t('app', 'Noofoccupation'),
            'markdelete' => Yii::t('app', 'Markdelete'),
            'docspecial1' => Yii::t('app', 'Docspecial1'),
            'docremark' => Yii::t('app', 'Docremark'),
            'idcard' => Yii::t('app', 'Idcard'),
            'prename' => Yii::t('app', 'Prename'),
            'fname' => Yii::t('app', 'Fname'),
            'lname' => Yii::t('app', 'Lname'),
            'licenseno' => Yii::t('app', 'Licenseno'),
            'workoffice' => Yii::t('app', 'Workoffice'),
            'usersex' => Yii::t('app', 'Usersex'),
            'userbirth' => Yii::t('app', 'Userbirth'),
            'dateworkhere' => Yii::t('app', 'Dateworkhere'),
            'datemovehere' => Yii::t('app', 'Datemovehere'),
            'pcucodemovefrom' => Yii::t('app', 'Pcucodemovefrom'),
            'pcucodemoveto' => Yii::t('app', 'Pcucodemoveto'),
            'privilegeprovisservice' => Yii::t('app', 'Privilegeprovisservice'),
            'privilegeucode' => Yii::t('app', 'Privilegeucode'),
            'dateupdate' => Yii::t('app', 'Dateupdate'),
            'council' => Yii::t('app', 'Council'),
            'avatar' => Yii::t('app', 'Avatar'),
            'sti_vct' => Yii::t('app', 'Sti Vct'),
            'pcccode' => Yii::t('app', 'Pcccode'),
            'email' => Yii::t('app', 'Email'),
            'status' => Yii::t('app', 'Status'),
            'name' => Yii::t('app', 'Name'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'password_reset_token' => Yii::t('app', 'Password Reset Token'),
            'password_hash' => Yii::t('app', 'Password Hash'),
            'register' => Yii::t('app', 'Register'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHouses()
    {
        return $this->hasMany(House::className(), ['pcucode' => 'pcucode', 'usernamedoc' => 'username']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeople()
    {
        return $this->hasMany(Person::className(), ['pcucodeperson' => 'pcucode', 'userpccprivatedoc' => 'username']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudenthealthdentals()
    {
        return $this->hasMany(Studenthealthdental::className(), ['pcucodeperson' => 'pcucode', 'username' => 'username']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudenthealthears()
    {
        return $this->hasMany(Studenthealthear::className(), ['pcucodeperson' => 'pcucode', 'username' => 'username']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudenthealtheyes()
    {
        return $this->hasMany(Studenthealtheye::className(), ['pcucodeperson' => 'pcucode', 'username' => 'username']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudenthealthiodeins()
    {
        return $this->hasMany(Studenthealthiodein::className(), ['pcucodeperson' => 'pcucode', 'username' => 'username']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudenthealthnutritions()
    {
        return $this->hasMany(Studenthealthnutrition::className(), ['pcucodeperson' => 'pcucode', 'username' => 'username']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudenthealthworms()
    {
        return $this->hasMany(Studenthealthworm::className(), ['pcucodeperson' => 'pcucode', 'username' => 'username']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPcccode0()
    {
        return $this->hasOne(Cpccteam::className(), ['pcccode' => 'pcccode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPcucode0()
    {
        return $this->hasOne(Office::className(), ['offid' => 'pcucode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsertabs()
    {
        return $this->hasMany(Usertab::className(), ['pcucode' => 'pcucode', 'username' => 'username']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisits()
    {
        return $this->hasMany(Visit::className(), ['pcucode' => 'pcucode', 'username' => 'username']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitcataractofficers()
    {
        return $this->hasMany(Visitcataractofficer::className(), ['pcucode' => 'pcucode', 'provider' => 'username']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitdentalchecks()
    {
        return $this->hasMany(Visitdentalcheck::className(), ['pcucode' => 'pcucode', 'provider' => 'username']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitdiags()
    {
        return $this->hasMany(Visitdiag::className(), ['pcucode' => 'pcucode', 'doctordiag' => 'username']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitdrugs()
    {
        return $this->hasMany(Visitdrug::className(), ['pcucode' => 'pcucode', 'doctor1' => 'username']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisithomehealthindividuals()
    {
        return $this->hasMany(Visithomehealthindividual::className(), ['pcucode' => 'pcucode', 'user' => 'username']);
    }

    /**
     * {@inheritdoc}
     * @return UserQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserQuery(get_called_class());
    }
}
