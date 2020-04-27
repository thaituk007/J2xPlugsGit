<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "house".
 *
 * @property string $pcucode
 * @property int $hcode
 * @property string $villcode
 * @property string|null $hid
 * @property string|null $hno
 * @property string|null $road
 * @property string|null $telephonehouse
 * @property string|null $pcucodeperson
 * @property int|null $pid
 * @property string|null $pcucodepersonvola
 * @property int|null $pidvola
 * @property string|null $area
 * @property int|null $communityno
 * @property string|null $dateregister
 * @property string|null $waterdrink
 * @property string|null $waterdrinkeno
 * @property string|null $wateruse
 * @property string|null $wateruseeno
 * @property string|null $toilet
 * @property string|null $waterassuage
 * @property string|null $pets
 * @property string|null $petsdung
 * @property string|null $garbageware
 * @property string|null $garbageerase
 * @property string|null $houseendur
 * @property string|null $houseclean
 * @property string|null $housecomplete
 * @property string|null $houseairflow
 * @property string|null $houselight
 * @property string|null $housesanitation
 * @property string|null $foodcook
 * @property string|null $foodkeepsafe
 * @property string|null $foodware
 * @property string|null $foodwarewash
 * @property string|null $foodwarekeep
 * @property string|null $foodgarbageware
 * @property string|null $foodcookroom
 * @property string|null $foodsanitation
 * @property string|null $iodeinsalt
 * @property string|null $iodeinmaterial
 * @property string|null $iodeinuse
 * @property string|null $ftlj
 * @property string|null $whjrk
 * @property string|null $slpp
 * @property string|null $cht
 * @property string|null $kmch
 * @property string|null $controlrat
 * @property string|null $controlcockroach
 * @property string|null $controlhousefly
 * @property string|null $controlmqt
 * @property string|null $controlinsetdisease
 * @property string|null $housechar
 * @property string|null $housecharground
 * @property string|null $housesurveydate
 * @property string|null $flag18fileexpo
 * @property string|null $xgis
 * @property string|null $ygis
 * @property resource|null $housepic
 * @property string|null $nearhouse
 * @property string|null $usernamedoc
 * @property int|null $headhealthhouse
 * @property string|null $dateupdate
 *
 * @property User $pcucode0
 * @property Village $pcucode1
 * @property Cwatertype $waterdrink0
 * @property Cwatertype $wateruse0
 * @property Houseanimal[] $houseanimals
 * @property Housegenusculex[] $housegenusculexes
 * @property Houserequest $houserequest
 * @property Person[] $people
 * @property Personfamilyfolder $personfamilyfolder
 */
class House extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'house';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pcucode', 'hcode', 'villcode'], 'required'],
            [['hcode', 'pid', 'pidvola', 'communityno', 'headhealthhouse'], 'integer'],
            [['dateregister', 'housesurveydate', 'dateupdate'], 'safe'],
            [['housepic'], 'string'],
            [['pcucode', 'pcucodeperson', 'pcucodepersonvola'], 'string', 'max' => 5],
            [['villcode'], 'string', 'max' => 8],
            [['hid'], 'string', 'max' => 11],
            [['hno'], 'string', 'max' => 120],
            [['road'], 'string', 'max' => 257],
            [['telephonehouse', 'usernamedoc'], 'string', 'max' => 35],
            [['area', 'waterdrinkeno', 'wateruseeno', 'toilet', 'waterassuage', 'pets', 'petsdung', 'garbageware', 'garbageerase', 'houseendur', 'houseclean', 'housecomplete', 'houseairflow', 'houselight', 'housesanitation', 'foodcook', 'foodkeepsafe', 'foodware', 'foodwarewash', 'foodwarekeep', 'foodgarbageware', 'foodcookroom', 'foodsanitation', 'iodeinsalt', 'iodeinmaterial', 'iodeinuse', 'ftlj', 'whjrk', 'slpp', 'cht', 'kmch', 'controlrat', 'controlcockroach', 'controlhousefly', 'controlmqt', 'controlinsetdisease', 'housechar', 'housecharground', 'flag18fileexpo'], 'string', 'max' => 1],
            [['waterdrink', 'wateruse'], 'string', 'max' => 2],
            [['xgis', 'ygis'], 'string', 'max' => 55],
            [['nearhouse'], 'string', 'max' => 250],
            [['pcucodeperson', 'pid'], 'unique', 'targetAttribute' => ['pcucodeperson', 'pid']],
            [['pcucode', 'hcode'], 'unique', 'targetAttribute' => ['pcucode', 'hcode']],
            [['pcucode', 'usernamedoc'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['pcucode' => 'pcucode', 'usernamedoc' => 'username']],
            [['pcucode', 'villcode'], 'exist', 'skipOnError' => true, 'targetClass' => Village::className(), 'targetAttribute' => ['pcucode' => 'pcucode', 'villcode' => 'villcode']],
            [['waterdrink'], 'exist', 'skipOnError' => true, 'targetClass' => Cwatertype::className(), 'targetAttribute' => ['waterdrink' => 'watertypecode']],
            [['wateruse'], 'exist', 'skipOnError' => true, 'targetClass' => Cwatertype::className(), 'targetAttribute' => ['wateruse' => 'watertypecode']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pcucode' => Yii::t('app', 'Pcucode'),
            'hcode' => Yii::t('app', 'Hcode'),
            'villcode' => Yii::t('app', 'Villcode'),
            'hid' => Yii::t('app', 'Hid'),
            'hno' => Yii::t('app', 'Hno'),
            'road' => Yii::t('app', 'Road'),
            'telephonehouse' => Yii::t('app', 'Telephonehouse'),
            'pcucodeperson' => Yii::t('app', 'Pcucodeperson'),
            'pid' => Yii::t('app', 'Pid'),
            'pcucodepersonvola' => Yii::t('app', 'Pcucodepersonvola'),
            'pidvola' => Yii::t('app', 'Pidvola'),
            'area' => Yii::t('app', 'Area'),
            'communityno' => Yii::t('app', 'Communityno'),
            'dateregister' => Yii::t('app', 'Dateregister'),
            'waterdrink' => Yii::t('app', 'Waterdrink'),
            'waterdrinkeno' => Yii::t('app', 'Waterdrinkeno'),
            'wateruse' => Yii::t('app', 'Wateruse'),
            'wateruseeno' => Yii::t('app', 'Wateruseeno'),
            'toilet' => Yii::t('app', 'Toilet'),
            'waterassuage' => Yii::t('app', 'Waterassuage'),
            'pets' => Yii::t('app', 'Pets'),
            'petsdung' => Yii::t('app', 'Petsdung'),
            'garbageware' => Yii::t('app', 'Garbageware'),
            'garbageerase' => Yii::t('app', 'Garbageerase'),
            'houseendur' => Yii::t('app', 'Houseendur'),
            'houseclean' => Yii::t('app', 'Houseclean'),
            'housecomplete' => Yii::t('app', 'Housecomplete'),
            'houseairflow' => Yii::t('app', 'Houseairflow'),
            'houselight' => Yii::t('app', 'Houselight'),
            'housesanitation' => Yii::t('app', 'Housesanitation'),
            'foodcook' => Yii::t('app', 'Foodcook'),
            'foodkeepsafe' => Yii::t('app', 'Foodkeepsafe'),
            'foodware' => Yii::t('app', 'Foodware'),
            'foodwarewash' => Yii::t('app', 'Foodwarewash'),
            'foodwarekeep' => Yii::t('app', 'Foodwarekeep'),
            'foodgarbageware' => Yii::t('app', 'Foodgarbageware'),
            'foodcookroom' => Yii::t('app', 'Foodcookroom'),
            'foodsanitation' => Yii::t('app', 'Foodsanitation'),
            'iodeinsalt' => Yii::t('app', 'Iodeinsalt'),
            'iodeinmaterial' => Yii::t('app', 'Iodeinmaterial'),
            'iodeinuse' => Yii::t('app', 'Iodeinuse'),
            'ftlj' => Yii::t('app', 'Ftlj'),
            'whjrk' => Yii::t('app', 'Whjrk'),
            'slpp' => Yii::t('app', 'Slpp'),
            'cht' => Yii::t('app', 'Cht'),
            'kmch' => Yii::t('app', 'Kmch'),
            'controlrat' => Yii::t('app', 'Controlrat'),
            'controlcockroach' => Yii::t('app', 'Controlcockroach'),
            'controlhousefly' => Yii::t('app', 'Controlhousefly'),
            'controlmqt' => Yii::t('app', 'Controlmqt'),
            'controlinsetdisease' => Yii::t('app', 'Controlinsetdisease'),
            'housechar' => Yii::t('app', 'Housechar'),
            'housecharground' => Yii::t('app', 'Housecharground'),
            'housesurveydate' => Yii::t('app', 'Housesurveydate'),
            'flag18fileexpo' => Yii::t('app', 'Flag18fileexpo'),
            'xgis' => Yii::t('app', 'Xgis'),
            'ygis' => Yii::t('app', 'Ygis'),
            'housepic' => Yii::t('app', 'Housepic'),
            'nearhouse' => Yii::t('app', 'Nearhouse'),
            'usernamedoc' => Yii::t('app', 'Usernamedoc'),
            'headhealthhouse' => Yii::t('app', 'Headhealthhouse'),
            'dateupdate' => Yii::t('app', 'Dateupdate'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPcucode0()
    {
        return $this->hasOne(User::className(), ['pcucode' => 'pcucode', 'username' => 'usernamedoc']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPcucode1()
    {
        return $this->hasOne(Village::className(), ['pcucode' => 'pcucode', 'villcode' => 'villcode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWaterdrink0()
    {
        return $this->hasOne(Cwatertype::className(), ['watertypecode' => 'waterdrink']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWateruse0()
    {
        return $this->hasOne(Cwatertype::className(), ['watertypecode' => 'wateruse']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHouseanimals()
    {
        return $this->hasMany(Houseanimal::className(), ['pcucode' => 'pcucode', 'hcode' => 'hcode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHousegenusculexes()
    {
        return $this->hasMany(Housegenusculex::className(), ['pcucode' => 'pcucode', 'hcode' => 'hcode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHouserequest()
    {
        return $this->hasOne(Houserequest::className(), ['pcucode' => 'pcucode', 'hcode' => 'hcode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeople()
    {
        return $this->hasMany(Person::className(), ['pcucodeperson' => 'pcucode', 'hcode' => 'hcode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonfamilyfolder()
    {
        return $this->hasOne(Personfamilyfolder::className(), ['pcucode' => 'pcucode', 'hcode' => 'hcode']);
    }

    /**
     * {@inheritdoc}
     * @return HouseQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HouseQuery(get_called_class());
    }
}
