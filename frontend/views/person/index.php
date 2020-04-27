<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PersonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'People';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="person-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Person', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pcucodeperson',
            'pid',
            'hcode',
            'prename',
            'fname',
            //'lname',
            //'birth',
            //'sex',
            //'idcard',
            //'bloodgroup',
            //'bloodrh',
            //'allergic',
            //'marystatus',
            //'educate',
            //'occupa',
            //'nation',
            //'origin',
            //'intercode',
            //'religion',
            //'familyno',
            //'familyposition',
            //'income',
            //'typelive',
            //'datein',
            //'dischargetype',
            //'dischargedate',
            //'father',
            //'fatherid',
            //'mother',
            //'motherid',
            //'mate',
            //'mateid',
            //'privatedoc',
            //'rightcode',
            //'rightno',
            //'hosmain',
            //'hossub',
            //'dateregis',
            //'datestart',
            //'dateexpire',
            //'officework',
            //'hnomoi',
            //'roadmoi',
            //'mumoi',
            //'subdistcodemoi',
            //'distcodemoi',
            //'provcodemoi',
            //'postcodemoi',
            //'telephoneperson',
            //'mobile',
            //'hcodeoldin',
            //'dateupdate',
            //'flag18fileexpo',
            //'messengername',
            //'messengeraddr',
            //'messengertel',
            //'patientrelate',
            //'mommilk',
            //'persondisease',
            //'flagoffline',
            //'nickname',
            //'prenameeng',
            //'fnameeng',
            //'lnameeng',
            //'person_house_position_id_from_hosxp',
            //'passpotnumber',
            //'workpermitnumber',
            //'hidmoi11',
            //'housetype',
            //'roomno',
            //'condo',
            //'soisub',
            //'soimain',
            //'dateupdateaddressout',
            //'candobedhomesocial',
            //'beastprojectout',
            //'healthcuation',
            //'fingerprintr1',
            //'fingerprintr2',
            //'userpccprivatedoc',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
