<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PersonSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="person-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pcucodeperson') ?>

    <?= $form->field($model, 'pid') ?>

    <?= $form->field($model, 'hcode') ?>

    <?= $form->field($model, 'prename') ?>

    <?= $form->field($model, 'fname') ?>

    <?php // echo $form->field($model, 'lname') ?>

    <?php // echo $form->field($model, 'birth') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'idcard') ?>

    <?php // echo $form->field($model, 'bloodgroup') ?>

    <?php // echo $form->field($model, 'bloodrh') ?>

    <?php // echo $form->field($model, 'allergic') ?>

    <?php // echo $form->field($model, 'marystatus') ?>

    <?php // echo $form->field($model, 'educate') ?>

    <?php // echo $form->field($model, 'occupa') ?>

    <?php // echo $form->field($model, 'nation') ?>

    <?php // echo $form->field($model, 'origin') ?>

    <?php // echo $form->field($model, 'intercode') ?>

    <?php // echo $form->field($model, 'religion') ?>

    <?php // echo $form->field($model, 'familyno') ?>

    <?php // echo $form->field($model, 'familyposition') ?>

    <?php // echo $form->field($model, 'income') ?>

    <?php // echo $form->field($model, 'typelive') ?>

    <?php // echo $form->field($model, 'datein') ?>

    <?php // echo $form->field($model, 'dischargetype') ?>

    <?php // echo $form->field($model, 'dischargedate') ?>

    <?php // echo $form->field($model, 'father') ?>

    <?php // echo $form->field($model, 'fatherid') ?>

    <?php // echo $form->field($model, 'mother') ?>

    <?php // echo $form->field($model, 'motherid') ?>

    <?php // echo $form->field($model, 'mate') ?>

    <?php // echo $form->field($model, 'mateid') ?>

    <?php // echo $form->field($model, 'privatedoc') ?>

    <?php // echo $form->field($model, 'rightcode') ?>

    <?php // echo $form->field($model, 'rightno') ?>

    <?php // echo $form->field($model, 'hosmain') ?>

    <?php // echo $form->field($model, 'hossub') ?>

    <?php // echo $form->field($model, 'dateregis') ?>

    <?php // echo $form->field($model, 'datestart') ?>

    <?php // echo $form->field($model, 'dateexpire') ?>

    <?php // echo $form->field($model, 'officework') ?>

    <?php // echo $form->field($model, 'hnomoi') ?>

    <?php // echo $form->field($model, 'roadmoi') ?>

    <?php // echo $form->field($model, 'mumoi') ?>

    <?php // echo $form->field($model, 'subdistcodemoi') ?>

    <?php // echo $form->field($model, 'distcodemoi') ?>

    <?php // echo $form->field($model, 'provcodemoi') ?>

    <?php // echo $form->field($model, 'postcodemoi') ?>

    <?php // echo $form->field($model, 'telephoneperson') ?>

    <?php // echo $form->field($model, 'mobile') ?>

    <?php // echo $form->field($model, 'hcodeoldin') ?>

    <?php // echo $form->field($model, 'dateupdate') ?>

    <?php // echo $form->field($model, 'flag18fileexpo') ?>

    <?php // echo $form->field($model, 'messengername') ?>

    <?php // echo $form->field($model, 'messengeraddr') ?>

    <?php // echo $form->field($model, 'messengertel') ?>

    <?php // echo $form->field($model, 'patientrelate') ?>

    <?php // echo $form->field($model, 'mommilk') ?>

    <?php // echo $form->field($model, 'persondisease') ?>

    <?php // echo $form->field($model, 'flagoffline') ?>

    <?php // echo $form->field($model, 'nickname') ?>

    <?php // echo $form->field($model, 'prenameeng') ?>

    <?php // echo $form->field($model, 'fnameeng') ?>

    <?php // echo $form->field($model, 'lnameeng') ?>

    <?php // echo $form->field($model, 'person_house_position_id_from_hosxp') ?>

    <?php // echo $form->field($model, 'passpotnumber') ?>

    <?php // echo $form->field($model, 'workpermitnumber') ?>

    <?php // echo $form->field($model, 'hidmoi11') ?>

    <?php // echo $form->field($model, 'housetype') ?>

    <?php // echo $form->field($model, 'roomno') ?>

    <?php // echo $form->field($model, 'condo') ?>

    <?php // echo $form->field($model, 'soisub') ?>

    <?php // echo $form->field($model, 'soimain') ?>

    <?php // echo $form->field($model, 'dateupdateaddressout') ?>

    <?php // echo $form->field($model, 'candobedhomesocial') ?>

    <?php // echo $form->field($model, 'beastprojectout') ?>

    <?php // echo $form->field($model, 'healthcuation') ?>

    <?php // echo $form->field($model, 'fingerprintr1') ?>

    <?php // echo $form->field($model, 'fingerprintr2') ?>

    <?php // echo $form->field($model, 'userpccprivatedoc') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
