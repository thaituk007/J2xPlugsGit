<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "person".
 *
 * @property string $pcucodeperson
 * @property int $pid
 * @property int $hcode
 * @property string|null $prename
 * @property string $fname
 * @property string|null $lname
 * @property string|null $birth
 * @property string $sex
 * @property string|null $idcard
 * @property string|null $bloodgroup
 * @property string|null $bloodrh
 * @property string|null $allergic
 * @property string|null $marystatus
 * @property string|null $educate
 * @property string|null $occupa
 * @property string|null $nation
 * @property string|null $origin
 * @property string|null $intercode
 * @property string|null $religion
 * @property int|null $familyno
 * @property string|null $familyposition
 * @property float|null $income
 * @property string|null $typelive
 * @property string|null $datein
 * @property string|null $dischargetype
 * @property string|null $dischargedate
 * @property string|null $father
 * @property string|null $fatherid
 * @property string|null $mother
 * @property string|null $motherid
 * @property string|null $mate
 * @property string|null $mateid
 * @property string|null $privatedoc
 * @property string|null $rightcode
 * @property string|null $rightno
 * @property string|null $hosmain
 * @property string|null $hossub
 * @property string|null $dateregis
 * @property string|null $datestart
 * @property string|null $dateexpire
 * @property string|null $officework
 * @property string|null $hnomoi
 * @property string|null $roadmoi
 * @property string|null $mumoi
 * @property string|null $subdistcodemoi
 * @property string|null $distcodemoi
 * @property string|null $provcodemoi
 * @property string|null $postcodemoi
 * @property string|null $telephoneperson
 * @property string|null $mobile
 * @property int|null $hcodeoldin
 * @property string|null $dateupdate
 * @property string|null $flag18fileexpo
 * @property string|null $messengername
 * @property string|null $messengeraddr
 * @property string|null $messengertel
 * @property string|null $patientrelate
 * @property int|null $mommilk
 * @property string|null $persondisease
 * @property string|null $flagoffline
 * @property string|null $nickname
 * @property string|null $prenameeng
 * @property string|null $fnameeng
 * @property string|null $lnameeng
 * @property int|null $person_house_position_id_from_hosxp
 * @property string|null $passpotnumber
 * @property string|null $workpermitnumber
 * @property string|null $hidmoi11
 * @property string|null $housetype
 * @property string|null $roomno
 * @property string|null $condo
 * @property string|null $soisub
 * @property string|null $soimain
 * @property string|null $dateupdateaddressout
 * @property string|null $candobedhomesocial
 * @property string|null $beastprojectout
 * @property string|null $healthcuation
 * @property resource|null $fingerprintr1 ลายพิมพ์นิ้วหัวแม่มือขวา
 * @property resource|null $fingerprintr2 ลายพิมพ์นิ้วชี้ขวา
 * @property string|null $userpccprivatedoc
 *
 * @property F43HealthbehaviorAnamai[] $f43HealthbehaviorAnamais
 * @property F43specialpp[] $f43specialpps
 * @property Ncdpersonscreenall[] $ncdpersonscreenalls
 * @property Chospital $hossub0
 * @property House $pcucodeperson0
 * @property Ceducation $educate0
 * @property Chospital $hosmain0
 * @property Cnation $nation0
 * @property Coccupa $occupa0
 * @property Cnation $origin0
 * @property Creligion $religion0
 * @property Cright $rightcode0
 * @property Cstatus $marystatus0
 * @property User $pcucodeperson1
 * @property Personaddresscontact $personaddresscontact
 * @property Personalergic[] $personalergics
 * @property Cdrug[] $drugcodes
 * @property Personbehavior $personbehavior
 * @property Personchilddevelop[] $personchilddevelops
 * @property Personchronic[] $personchronics
 * @property Cdisease[] $chroniccodes
 * @property Personchronicfamily[] $personchronicfamilies
 * @property Personcirclemember[] $personcirclemembers
 * @property Persondeath $persondeath
 * @property Personfamilyfolder[] $personfamilyfolders
 * @property Personfamilyfolder[] $personfamilyfolders0
 * @property Persongrow[] $persongrows
 * @property Personhabit[] $personhabits
 * @property Personstudent $personstudent
 * @property Persontemplemem $persontemplemem
 * @property Persontype[] $persontypes
 * @property Cpersontype[] $typecodes
 * @property Personunable $personunable
 * @property Popdataexam[] $popdataexams
 * @property Visit[] $visits
 * @property Visitancdeliverchild $visitancdeliverchild
 * @property Visitancpregnancy[] $visitancpregnancies
 * @property Visitbabycare[] $visitbabycares
 * @property Visitcataractvolunteer[] $visitcataractvolunteers
 * @property Visitdentalcheck[] $visitdentalchecks
 * @property Visitepi[] $visitepis
 * @property Visitfp[] $visitfps
 * @property Visithealthperformance[] $visithealthperformances
 * @property Visitlabblood[] $visitlabbloods
 * @property Visitlabcancer[] $visitlabcancers
 * @property Visitlabchcyhembmsse[] $visitlabchcyhembmsses
 * @property Women $women
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'person';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pid', 'fname', 'sex'], 'required'],
            [['pid','familyno', 'hcodeoldin', 'mommilk', 'person_house_position_id_from_hosxp'], 'integer'],
            [['birth', 'datein', 'dischargedate', 'dateregis', 'datestart', 'dateexpire', 'dateupdate', 'dateupdateaddressout'], 'safe'],
            [['income'], 'number'],
            [['fingerprintr1', 'fingerprintr2'], 'string'],
            [['pcucodeperson', 'postcodemoi'], 'string', 'max' => 5],
            [['prename'], 'string', 'max' => 20],
            [['fname', 'nickname', 'prenameeng'], 'string', 'max' => 25],
            [['lname', 'telephoneperson', 'fnameeng', 'userpccprivatedoc'], 'string', 'max' => 35],
            [['sex', 'bloodrh', 'marystatus', 'familyposition', 'typelive', 'dischargetype', 'flag18fileexpo', 'flagoffline', 'housetype', 'candobedhomesocial', 'beastprojectout'], 'string', 'max' => 1],
            [['idcard', 'fatherid', 'motherid', 'mateid'], 'string', 'max' => 13],
            [['bloodgroup', 'educate', 'intercode', 'religion', 'mumoi', 'subdistcodemoi', 'distcodemoi', 'provcodemoi'], 'string', 'max' => 2],
            [['allergic'], 'string', 'max' => 100],
            [['occupa', 'rightcode'], 'string', 'max' => 4],
            [['nation', 'origin'], 'string', 'max' => 3],
            [['father', 'mother', 'mate'], 'string', 'max' => 257],
            [['privatedoc', 'messengername', 'messengeraddr', 'patientrelate', 'soisub', 'soimain'], 'string', 'max' => 255],
            [['rightno'], 'string', 'max' => 18],
            [['hosmain', 'hossub'], 'string', 'max' => 9],
            [['officework'], 'string', 'max' => 254],
            [['hnomoi', 'condo'], 'string', 'max' => 75],
            [['roadmoi'], 'string', 'max' => 50],
            [['mobile'], 'string', 'max' => 15],
            [['messengertel'], 'string', 'max' => 55],
            [['persondisease'], 'string', 'max' => 350],
            [['lnameeng'], 'string', 'max' => 45],
            [['passpotnumber', 'workpermitnumber'], 'string', 'max' => 37],
            [['hidmoi11'], 'string', 'max' => 11],
            [['roomno'], 'string', 'max' => 10],
            [['healthcuation'], 'string', 'max' => 450],
            [['pcucodeperson', 'idcard'], 'unique', 'targetAttribute' => ['pcucodeperson', 'idcard']],
            [['pcucodeperson', 'rightno'], 'unique', 'targetAttribute' => ['pcucodeperson', 'rightno']],
            [['pcucodeperson', 'pid'], 'unique', 'targetAttribute' => ['pcucodeperson', 'pid']],
            [['hossub'], 'exist', 'skipOnError' => true, 'targetClass' => Chospital::className(), 'targetAttribute' => ['hossub' => 'hoscode']],
            [['pcucodeperson', 'hcode'], 'exist', 'skipOnError' => true, 'targetClass' => House::className(), 'targetAttribute' => ['pcucodeperson' => 'pcucode', 'hcode' => 'hcode']],
            [['educate'], 'exist', 'skipOnError' => true, 'targetClass' => Ceducation::className(), 'targetAttribute' => ['educate' => 'educationcode']],
            [['hosmain'], 'exist', 'skipOnError' => true, 'targetClass' => Chospital::className(), 'targetAttribute' => ['hosmain' => 'hoscode']],
            [['nation'], 'exist', 'skipOnError' => true, 'targetClass' => Cnation::className(), 'targetAttribute' => ['nation' => 'nationcode']],
            [['occupa'], 'exist', 'skipOnError' => true, 'targetClass' => Coccupa::className(), 'targetAttribute' => ['occupa' => 'occupacode']],
            [['origin'], 'exist', 'skipOnError' => true, 'targetClass' => Cnation::className(), 'targetAttribute' => ['origin' => 'nationcode']],
            [['religion'], 'exist', 'skipOnError' => true, 'targetClass' => Creligion::className(), 'targetAttribute' => ['religion' => 'religioncode']],
            [['rightcode'], 'exist', 'skipOnError' => true, 'targetClass' => Cright::className(), 'targetAttribute' => ['rightcode' => 'rightcode']],
            [['marystatus'], 'exist', 'skipOnError' => true, 'targetClass' => Cstatus::className(), 'targetAttribute' => ['marystatus' => 'statuscode']],
            [['pcucodeperson', 'userpccprivatedoc'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['pcucodeperson' => 'pcucode', 'userpccprivatedoc' => 'username']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'fname' => Yii::t('app', 'Fname'),
            'lname' => Yii::t('app', 'Lname'),
            'birth' => Yii::t('app', 'Birth'),
            'sex' => Yii::t('app', 'Sex'),
            'idcard' => Yii::t('app', 'Idcard'),
            'bloodgroup' => Yii::t('app', 'Bloodgroup'),
            'bloodrh' => Yii::t('app', 'Bloodrh'),
            'allergic' => Yii::t('app', 'Allergic'),
            'marystatus' => Yii::t('app', 'Marystatus'),
            'educate' => Yii::t('app', 'Educate'),
            'occupa' => Yii::t('app', 'Occupa'),
            'nation' => Yii::t('app', 'Nation'),
            'origin' => Yii::t('app', 'Origin'),
            'intercode' => Yii::t('app', 'Intercode'),
            'religion' => Yii::t('app', 'Religion'),
            'familyno' => Yii::t('app', 'Familyno'),
            'familyposition' => Yii::t('app', 'Familyposition'),
            'income' => Yii::t('app', 'Income'),
            'typelive' => Yii::t('app', 'Typelive'),
            'datein' => Yii::t('app', 'Datein'),
            'dischargetype' => Yii::t('app', 'Dischargetype'),
            'dischargedate' => Yii::t('app', 'Dischargedate'),
            'father' => Yii::t('app', 'Father'),
            'fatherid' => Yii::t('app', 'Fatherid'),
            'mother' => Yii::t('app', 'Mother'),
            'motherid' => Yii::t('app', 'Motherid'),
            'mate' => Yii::t('app', 'Mate'),
            'mateid' => Yii::t('app', 'Mateid'),
            'privatedoc' => Yii::t('app', 'Privatedoc'),
            'rightcode' => Yii::t('app', 'Rightcode'),
            'rightno' => Yii::t('app', 'Rightno'),
            'hosmain' => Yii::t('app', 'Hosmain'),
            'hossub' => Yii::t('app', 'Hossub'),
            'dateregis' => Yii::t('app', 'Dateregis'),
            'datestart' => Yii::t('app', 'Datestart'),
            'dateexpire' => Yii::t('app', 'Dateexpire'),
            'officework' => Yii::t('app', 'Officework'),
            'hnomoi' => Yii::t('app', 'Hnomoi'),
            'roadmoi' => Yii::t('app', 'Roadmoi'),
            'mumoi' => Yii::t('app', 'Mumoi'),
            'subdistcodemoi' => Yii::t('app', 'Subdistcodemoi'),
            'distcodemoi' => Yii::t('app', 'Distcodemoi'),
            'provcodemoi' => Yii::t('app', 'Provcodemoi'),
            'postcodemoi' => Yii::t('app', 'Postcodemoi'),
            'telephoneperson' => Yii::t('app', 'Telephoneperson'),
            'mobile' => Yii::t('app', 'Mobile'),
            'hcodeoldin' => Yii::t('app', 'Hcodeoldin'),
            'dateupdate' => Yii::t('app', 'Dateupdate'),
            'flag18fileexpo' => Yii::t('app', 'Flag18fileexpo'),
            'messengername' => Yii::t('app', 'Messengername'),
            'messengeraddr' => Yii::t('app', 'Messengeraddr'),
            'messengertel' => Yii::t('app', 'Messengertel'),
            'patientrelate' => Yii::t('app', 'Patientrelate'),
            'mommilk' => Yii::t('app', 'Mommilk'),
            'persondisease' => Yii::t('app', 'Persondisease'),
            'flagoffline' => Yii::t('app', 'Flagoffline'),
            'nickname' => Yii::t('app', 'Nickname'),
            'prenameeng' => Yii::t('app', 'Prenameeng'),
            'fnameeng' => Yii::t('app', 'Fnameeng'),
            'lnameeng' => Yii::t('app', 'Lnameeng'),
            'person_house_position_id_from_hosxp' => Yii::t('app', 'Person House Position Id From Hosxp'),
            'passpotnumber' => Yii::t('app', 'Passpotnumber'),
            'workpermitnumber' => Yii::t('app', 'Workpermitnumber'),
            'hidmoi11' => Yii::t('app', 'Hidmoi11'),
            'housetype' => Yii::t('app', 'Housetype'),
            'roomno' => Yii::t('app', 'Roomno'),
            'condo' => Yii::t('app', 'Condo'),
            'soisub' => Yii::t('app', 'Soisub'),
            'soimain' => Yii::t('app', 'Soimain'),
            'dateupdateaddressout' => Yii::t('app', 'Dateupdateaddressout'),
            'candobedhomesocial' => Yii::t('app', 'Candobedhomesocial'),
            'beastprojectout' => Yii::t('app', 'Beastprojectout'),
            'healthcuation' => Yii::t('app', 'Healthcuation'),
            'fingerprintr1' => Yii::t('app', 'ลายพิมพ์นิ้วหัวแม่มือขวา'),
            'fingerprintr2' => Yii::t('app', 'ลายพิมพ์นิ้วชี้ขวา'),
            'userpccprivatedoc' => Yii::t('app', 'Userpccprivatedoc'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getF43HealthbehaviorAnamais()
    {
        return $this->hasMany(F43HealthbehaviorAnamai::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getF43specialpps()
    {
        return $this->hasMany(F43specialpp::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNcdpersonscreenalls()
    {
        return $this->hasMany(Ncdpersonscreenall::className(), ['pcucode' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHossub0()
    {
        return $this->hasOne(Chospital::className(), ['hoscode' => 'hossub']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPcucodeperson0()
    {
        return $this->hasOne(House::className(), ['pcucode' => 'pcucodeperson', 'hcode' => 'hcode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEducate0()
    {
        return $this->hasOne(Ceducation::className(), ['educationcode' => 'educate']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHosmain0()
    {
        return $this->hasOne(Chospital::className(), ['hoscode' => 'hosmain']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNation0()
    {
        return $this->hasOne(Cnation::className(), ['nationcode' => 'nation']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOccupa0()
    {
        return $this->hasOne(Coccupa::className(), ['occupacode' => 'occupa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrigin0()
    {
        return $this->hasOne(Cnation::className(), ['nationcode' => 'origin']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReligion0()
    {
        return $this->hasOne(Creligion::className(), ['religioncode' => 'religion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRightcode0()
    {
        return $this->hasOne(Cright::className(), ['rightcode' => 'rightcode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMarystatus0()
    {
        return $this->hasOne(Cstatus::className(), ['statuscode' => 'marystatus']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPcucodeperson1()
    {
        return $this->hasOne(User::className(), ['pcucode' => 'pcucodeperson', 'username' => 'userpccprivatedoc']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonaddresscontact()
    {
        return $this->hasOne(Personaddresscontact::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonalergics()
    {
        return $this->hasMany(Personalergic::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDrugcodes()
    {
        return $this->hasMany(Cdrug::className(), ['drugcode' => 'drugcode'])->viaTable('personalergic', ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonbehavior()
    {
        return $this->hasOne(Personbehavior::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonchilddevelops()
    {
        return $this->hasMany(Personchilddevelop::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonchronics()
    {
        return $this->hasMany(Personchronic::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChroniccodes()
    {
        return $this->hasMany(Cdisease::className(), ['diseasecode' => 'chroniccode'])->viaTable('personchronic', ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonchronicfamilies()
    {
        return $this->hasMany(Personchronicfamily::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersoncirclemembers()
    {
        return $this->hasMany(Personcirclemember::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersondeath()
    {
        return $this->hasOne(Persondeath::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonfamilyfolders()
    {
        return $this->hasMany(Personfamilyfolder::className(), ['pcucode' => 'pcucodeperson', 'pidhead' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonfamilyfolders0()
    {
        return $this->hasMany(Personfamilyfolder::className(), ['pcucode' => 'pcucodeperson', 'pidmate' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersongrows()
    {
        return $this->hasMany(Persongrow::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonhabits()
    {
        return $this->hasMany(Personhabit::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonstudent()
    {
        return $this->hasOne(Personstudent::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersontemplemem()
    {
        return $this->hasOne(Persontemplemem::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersontypes()
    {
        return $this->hasMany(Persontype::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTypecodes()
    {
        return $this->hasMany(Cpersontype::className(), ['persontypecode' => 'typecode'])->viaTable('persontype', ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonunable()
    {
        return $this->hasOne(Personunable::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPopdataexams()
    {
        return $this->hasMany(Popdataexam::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisits()
    {
        return $this->hasMany(Visit::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitancdeliverchild()
    {
        return $this->hasOne(Visitancdeliverchild::className(), ['pcucodechild' => 'pcucodeperson', 'pidchild' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitancpregnancies()
    {
        return $this->hasMany(Visitancpregnancy::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitbabycares()
    {
        return $this->hasMany(Visitbabycare::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitcataractvolunteers()
    {
        return $this->hasMany(Visitcataractvolunteer::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitdentalchecks()
    {
        return $this->hasMany(Visitdentalcheck::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitepis()
    {
        return $this->hasMany(Visitepi::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitfps()
    {
        return $this->hasMany(Visitfp::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisithealthperformances()
    {
        return $this->hasMany(Visithealthperformance::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitlabbloods()
    {
        return $this->hasMany(Visitlabblood::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitlabcancers()
    {
        return $this->hasMany(Visitlabcancer::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitlabchcyhembmsses()
    {
        return $this->hasMany(Visitlabchcyhembmsse::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWomen()
    {
        return $this->hasOne(Women::className(), ['pcucodeperson' => 'pcucodeperson', 'pid' => 'pid']);
    }

    /**
     * {@inheritdoc}
     * @return PersonQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PersonQuery(get_called_class());
    }
}
