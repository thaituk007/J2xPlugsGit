<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Person */

$this->title = $model->pcucodeperson;
$this->params['breadcrumbs'][] = ['label' => 'People', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="person-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'pcucodeperson' => $model->pcucodeperson, 'pid' => $model->pid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'pcucodeperson' => $model->pcucodeperson, 'pid' => $model->pid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'pcucodeperson',
            'pid',
            'hcode',
            'prename',
            'fname',
            'lname',
            'birth',
            'sex',
            'idcard',
            'bloodgroup',
            'bloodrh',
            'allergic',
            'marystatus',
            'educate',
            'occupa',
            'nation',
            'origin',
            'intercode',
            'religion',
            'familyno',
            'familyposition',
            'income',
            'typelive',
            'datein',
            'dischargetype',
            'dischargedate',
            'father',
            'fatherid',
            'mother',
            'motherid',
            'mate',
            'mateid',
            'privatedoc',
            'rightcode',
            'rightno',
            'hosmain',
            'hossub',
            'dateregis',
            'datestart',
            'dateexpire',
            'officework',
            'hnomoi',
            'roadmoi',
            'mumoi',
            'subdistcodemoi',
            'distcodemoi',
            'provcodemoi',
            'postcodemoi',
            'telephoneperson',
            'mobile',
            'hcodeoldin',
            'dateupdate',
            'flag18fileexpo',
            'messengername',
            'messengeraddr',
            'messengertel',
            'patientrelate',
            'mommilk',
            'persondisease',
            'flagoffline',
            'nickname',
            'prenameeng',
            'fnameeng',
            'lnameeng',
            'person_house_position_id_from_hosxp',
            'passpotnumber',
            'workpermitnumber',
            'hidmoi11',
            'housetype',
            'roomno',
            'condo',
            'soisub',
            'soimain',
            'dateupdateaddressout',
            'candobedhomesocial',
            'beastprojectout',
            'healthcuation',
            'fingerprintr1',
            'fingerprintr2',
            'userpccprivatedoc',
        ],
    ]) ?>

</div>
