<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Person */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="person-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pcucodeperson')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pid')->textInput() ?>

    <?= $form->field($model, 'hcode')->textInput() ?>

    <?= $form->field($model, 'prename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birth')->textInput() ?>

    <?= $form->field($model, 'sex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idcard')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bloodgroup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bloodrh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'allergic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'marystatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'educate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'occupa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'origin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intercode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'religion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'familyno')->textInput() ?>

    <?= $form->field($model, 'familyposition')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'income')->textInput() ?>

    <?= $form->field($model, 'typelive')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'datein')->textInput() ?>

    <?= $form->field($model, 'dischargetype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dischargedate')->textInput() ?>

    <?= $form->field($model, 'father')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fatherid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'motherid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mateid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'privatedoc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rightcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rightno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hosmain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hossub')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateregis')->textInput() ?>

    <?= $form->field($model, 'datestart')->textInput() ?>

    <?= $form->field($model, 'dateexpire')->textInput() ?>

    <?= $form->field($model, 'officework')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hnomoi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'roadmoi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mumoi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subdistcodemoi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'distcodemoi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provcodemoi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'postcodemoi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telephoneperson')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hcodeoldin')->textInput() ?>

    <?= $form->field($model, 'dateupdate')->textInput() ?>

    <?= $form->field($model, 'flag18fileexpo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'messengername')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'messengeraddr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'messengertel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patientrelate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mommilk')->textInput() ?>

    <?= $form->field($model, 'persondisease')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'flagoffline')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nickname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prenameeng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fnameeng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lnameeng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'person_house_position_id_from_hosxp')->textInput() ?>

    <?= $form->field($model, 'passpotnumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'workpermitnumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hidmoi11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'housetype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'roomno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'condo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'soisub')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'soimain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateupdateaddressout')->textInput() ?>

    <?= $form->field($model, 'candobedhomesocial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'beastprojectout')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'healthcuation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fingerprintr1')->textInput() ?>

    <?= $form->field($model, 'fingerprintr2')->textInput() ?>

    <?= $form->field($model, 'userpccprivatedoc')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
